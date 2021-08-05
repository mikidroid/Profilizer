<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Annoncement;
use App\Models\User;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable=[
       'subject','body','user_id'];
    public function user(){
       return $this->belongsTo(User::class);
    }
}
