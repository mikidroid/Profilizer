<?php

namespace App\Http\Livewire\Articles;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Article;
use Livewire\WithPagination;

class Comments extends Component
{
use WithPagination;
 
 public $ArticleId;
 public $CommentName;
 public $_name;
 public $content;
 public $_Comments;
 public $ReplyClick=false;
 public $CommentId;
 public $_Replies;
 public $reply_name;
 public $reply_content;
 
        
    public function mount(){
        if(auth()->check()){$this->_name=auth()->user()->name;}
      //  $C=DB::select('SELECT articles.*,comments.* FROM comments INNER JOIN articles ON comments.article_id=articles.id WHERE comments.article_id=?',[$this->ArticleId]);
$this->_Comments=Article::find($this->ArticleId)->comments->orderBy('id','desc')->paginate(10);
    // $this->_Comments=$C->paginate(10);
    }
    
   public function Replies($Comment_id){
       
      //  $this->_Replies=DB::select('SELECT comments.*,replies.* FROM replies INNER JOIN comments ON replies.comment_id=comments.id WHERE replies.comment_id=?',[$Comment_id]);
        $this->ReplyToggle();
    }
        
    public function render(){
        return view('livewire.articles.comments');}
        
    public function ReplyToggle(){
        
        if($this->ReplyClick){$this->ReplyClick=false;}
        if(!$this->ReplyClick){$this->ReplyClick=true;}}
    
    public function SendComment($Article_Id,Request $request){
       $SendC=DB::insert('INSERT INTO comments (created_at,updated_at,name,content,article_id) VALUES (?,?,?,?,?)',[date("Y-m-d H:i:s"),date("Y-m-d H:i:s"),$request->name,$request->_content,$Article_Id]);
       if($SendC){session()->flash('success','Comment added successfully!');
        return back();}
       else{session()->flash('error','Error while sending comment!');}}
       
public function SendReply($Comment_id,Request $request){
       $SendC=DB::insert('INSERT INTO replies (created_at,updated_at,name,content,comment_id) VALUES (?,?,?,?,?)',[date("Y-m-d H:i:s"),date("Y-m-d H:i:s"),$this->reply_name,$this->reply_content,$Comment_Id]);
       if($SendC){session()->flash('success','Comment added successfully!');
        return back();}
       else{session()->flash('error','Error while sending comment!');}}
}
