<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
       'title','body','img_url','user_id','category'
     ];
     
    public function user(){
     
       return $this->belongsTo(User::class);
    
    }
}
