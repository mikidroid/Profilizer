<?php

namespace App\Models;
use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    
    protected $fillable =['name','content','article_id','profilePic_url'];
    
public function user(){
     return $this->belongsTo(User::class);
    }
    
public function article(){
     return $this->belongsTo(Article::class);
    }
    
public function reply(){
     return $this->hasMany(reply::class);
    }
    
}
