<?php

namespace App\Http\Controllers;
use App\Models\userinfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pagesController extends Controller
{
 
 public $core_values;
 public $qualifications;
 public $bio;
 public $skills;
 public $achievements;
 public $projects=[];
 
// GetAdminId function
public function getAdminId(){   
    $adminId=User::where('user_id','=','admin')->first();
    return $adminId->id;
}
    public function home(){
        $Userinfo=User::where('user_id','=','admin')->first()
        ->userinfo()
        ->where('user_id','=',$this->getAdminId())
        ->first();
        if($Userinfo){
        $this->qualifications=$Userinfo->qualifications;
        $this->core_values=$Userinfo->core_values;
        $this->bio=$Userinfo->bio;
        $this->achievements=$Userinfo->achievements;
        $this->skills=$Userinfo->skills;
        }

        $content=array(
        'qualifications'=>$this->qualifications,
        'core_values'=>$this->core_values,
        'bio'=>$this->bio,
        'achievements'=>$this->achievements,
        'skills'=>$this->skills,
        'projects'=>$this->projects);
     
        $Article=DB::select('SELECT * FROM articles');
        $RandNum=rand(1,count($Article));
        $Article=DB::select
        ('SELECT * FROM articles WHERE id=?',[$RandNum]);
   
        return view
        ('pages.home',
        ['qualifications'=>$this->qualifications,
        'core_values'=>$this->core_values,
        'bio'=>$this->bio,
        'achievements'=>$this->achievements,
        'skills'=>$this->skills,
        'projects'=>$this->projects,
        'Article'=>$Article]);}
 
}
