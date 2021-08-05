<?php

namespace App\Http\Livewire\Inc;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Mail\SendGmail;

class SendMail extends Component
{
 public $subject;
 public $message;
 public $sender;
    public function mount(){
      if(auth()->check()){$this->sender=auth()->user()->email;}
    }
    public function render(){
      return view('livewire.inc.send-mail');}
      
    public function SendMail(){
      $GmailDetails=[
        'sender'=>$this->sender,
        'message'=>$this->message,
        'subject'=>$this->subject];
      if(response(Mail::to("samuelnissiuche@gmail.com")->send(new SendGmail($GmailDetails))==200)){
       
         Session()
     ->flash('success','Message sent successfully!');
     return redirect()->to('/');
      }
       else {
         return back()->with('error','Mail Not Sent!');
      }
    }
}
