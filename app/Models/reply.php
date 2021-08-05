<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    use HasFactory;
    
    protected $fillable=['name','content','comment_id','profilePic_url'];
    
    public function comment(){
     return $this->belongsTo(Comment::class);
    }
}
