<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id","product_name","qty",
        "price","total","paid","delivered","drive_url",
        
    ];

    public function users() {

        return $this->belongsTo(User::class, 'user_id');

    }

 
    
}
