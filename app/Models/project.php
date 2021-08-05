<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    
protected $fillable = [
        'name',
        'image_url',
        'description',
        'user_id',
        'year','type','completed'
        
    ];
    
public function user(){
      return $this->belongsTo(User::class);
    }
}
