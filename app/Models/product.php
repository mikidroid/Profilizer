<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
protected $fillable = [
        'name',
        'product_url',
        'description',
        'payment_url',
        'category',
        'price',
        'user_id'
        
    ];
    
public function user(){
      return $this->belongsTo(User::class);
    }
}
