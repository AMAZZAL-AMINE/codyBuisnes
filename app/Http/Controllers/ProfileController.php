<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * create user profile
     * show user profile
     * remove user if els
     * show edit form profile
     * update user info if theres new info
     */

     /* let user dont go anywehere in profile if not login */
     public function __construct()
     {
         $this->middleware('auth');
     }
 

     public function showProfile($user) {
        $orders = Order::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();
         $user = User::findOrFail($user);
         return view('auth.profile', compact('user','orders'));
     }

     /* show form for update profile */
     public function showUpdateForm($id)  {
         $user = User::findOrFail($id);

        if(auth()->user()->id == $user->id) {
            
            return view('auth.updateprofile', compact('user'));

        }else {
            return redirect()->route('user.profile',auth()->user()->id);
        }
     }

     /* *store data user in database */
     public function UpdateInfo($id, Request $request) {
        $data = $request->validate(
            array(
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required'],
                'password' => ['required', 'string', 'min:8'],
                'image' => ['image'],
                'bio' => ['max:320'],
                'phone' => ['numeric'],
                'birthday' => ['date'],
                'twitter' => ['URL'],
                'facebook' => ['URL'],
                'instagram' => ['URL'],
                'linkedin' => ['URL'],
            )
        );

        if ($request->hasFile('image')){
            $imagePath = request('image')->store('profile_image', 'public');
        }

        auth()->user()->where('id', $id)->update( 
             array(
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
                'image' => $imagePath ?? auth()->user()->image,
                'bio' => $data['bio'],
                'phone' => $data['phone'],
                'birth_date' => $data['birthday'],
                'twitter' => $data['twitter'],
                'facebook' => $data['facebook'],
                'instagram' => $data['instagram'],
                'linkedin' => $data['linkedin']
            ),
        );

        return redirect()->route('user.profile',auth()->user()->id)
                ->with(
                    array(
                        "message" => "Profile Has been Updated Successfylt"
                    )
                );
     }

}
