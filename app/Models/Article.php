<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\comment;
class Article extends Model
{
    use HasFactory;
    protected $fillable=[
       'title','body','img_url','user_id','category','published'
     ];
     
    public function user(){
     
       return $this->belongsTo(User::class);
    
    }
    
    
public function comment(){
     
       return $this->hasMany(comment::class);
    
    }
}