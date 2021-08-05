<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userinfo extends Model
{
    use HasFactory;
    
    protected $fillable=[
     'core_values','bio','skills','achievements','qualifications','user_id'
     ];
    
    public function user(){
     return $this->belongsTo(User::class);
    }
}