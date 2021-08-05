<?php
namespace App\Http\Livewire\Admin;
use App\Models\product;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;

class CreateProduct extends Component{
use WithFileUploads;
 // Constants for input
 public $name;
 public $description;
 public $product_url;
 public $payment_url;
 public $category;
 public $price;
 public $i;
 // Rules for validation
 protected $rules=[
   'name'=>'required|min:3',
   'product_url'=>'image|2048'];
   
 //Render the component
 public function render(){
   return view('livewire.admin.create-product')
   ->extends('layouts.adminLayout')
   ->section('content');}
   
 //Store function To create data into database
 public function store(Request $request){
   //Validate input
   $this->validate(['name'=>'required|min:3']);
   //store image
   $imgName=time().'_'.$this
   ->product_url->getClientOriginalName();
   $imgPath=$this
   ->product_url
   ->storeAs('public/product-img',$imgName);
   $this->product_url=$imgName;
   //Creating Input model for database
   $input=[
      'name'=>$this->name,
      'description'=>$this->description,
      'product_url'=>$this->product_url,
      'payment_url'=>$this->payment_url,
      'category'=>$this->category,
      'price'=>$this->price,
      'user_id'=>Auth()->user()->id];
   //Create product from input       
   $prodCreate=product::create($input);
   //If Create is successful
   if ($prodCreate){
     //flash success message
     Session()
     ->flash('success','Product added successfully Sam!');}
   //If create is unsuccessful
   else{
      //Flash error message
     Session()
     ->flash('error','something went wrong with your request.');}
    } 
  //End store function
}
