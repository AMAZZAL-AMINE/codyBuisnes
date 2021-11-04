<?php

namespace App\Http\Controllers;
use App\Models\Order;

use App\Models\Product;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalePaymentController extends Controller
{
    //continu video payment with paypal part 2

    public function __construct() {

        $this->middleware('auth');
    }


    public function handlePayment() {


        $data = [];

        $data['items'] = [];

        foreach(\Cart::getContent() as $item) {

                array_push($data['items'], [
                    'name' => $item->name,
                    'price' => (int) ($item->price  /* //9 */),
                    'desc' => $item->associatedModel->description,
                    'qty' => $item->quantity,
                ]);


        }

        $data['invoice_id'] = auth()->user()->id;
        $data['invoice_description'] = "Cpmmande #{$data['invoice_id']}";
        $data['return_url'] = route('success.payment');
        $data['cancel_url'] = route('cancel.payment');

        $total = 0;

        foreach($data['items'] as $item) {
            $total += $item['price']*$item['qty'];
        }

        $data['total'] = $total;

       $paypayModule = new ExpressCheckout;

       $res = $paypayModule->setExpressCheckout($data);
       $res = $paypayModule->setExpressCheckout($data, true);

       return redirect($res['paypal_link']);


    }


    public function paymentCancel() {

        return redirect()->route('cart.index')->with([
            'info' => 'Your Payment Has been Canceled',
        ]);

    }




    public function paymentSuccess(Request $request) {
        
        $paypalModule = new ExpressCheckout;

        $response = $paypalModule->getExpressCheckoutDetails($request->token);
        
        if(in_array(strtoupper($response['ACK']),['SUCCESS', 'SUCCESSWITHWARNING']))  {

            foreach (\Cart::getContent() as  $item) {
                # code...
                Order::create([

                    'user_id' => auth()->user()->id,
                    'product_name' => $item->name,
                    'qty' => $item->quantity,
                    'price' => $item->price,
                    'total' => $item->price * $item->quantity,
                    'drive_url' => $item->associatedModel->drive_url,
                    'paid' => 1,

                ]);

                \Cart::clear();
    
            }

            return redirect()->route('user.profile',auth()->user()->id)->with([
                'success' => 'Payment  accepted seccessfully'
            ]);

            
        }
       
        return redirect()->route('cart.index')->with([

            'info' => 'Your Payment Has Been Accesspted seccessfully'

        ]);

    }



    
}