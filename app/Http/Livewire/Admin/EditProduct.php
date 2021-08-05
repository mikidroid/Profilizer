<?php

namespace App\Http\Livewire\Admin;
use App\Models\product;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;

class EditProduct extends Component{
use WithFileUploads;
 //To set default constants
 public $name;
 public $description;
 public $product_url;
 public $temp_product_url;
 public $payment_url;
 public $category;
 public $price;
 public $i;
 public $prod_id;
 //To set rules for validation
 protected $rules=[
'name'=>'required|min:3',
'product_url'=>'image|2048'
  ];
 // To mount default values from database
 public function mount($id){
        $P=product::find($id);
        $this->name=$P->name;
        $this->description=$P->description;
        $this->temp_product_url=$P->product_url;
        $this->payment_url=$P->payment_url;
        $this->category=$P->category;
        $this->price=$P->price;
        $this->prod_id=$P->id;}
 //To render the component
 public function render(){
        return view('livewire.admin.edit-product')
        ->extends('layouts.adminLayout')
        ->section('content');}
 // To Update database 
 public function update(Request $request,$prod_id){
        $this->validate([
         'name'=>'required|min:3']);
  //Check if product url is set
  if(isset($this->product_url)){
   //To check first if file exists before unlinking
   if(file_exists('storage/product-img/'.$this->temp_product_url)){
      unlink('storage/product-img/'.$this->temp_product_url);}
  // Continue image update process after check
  $imgName=time().'_'.$this->product_url->getClientOriginalName();
  $imgPath=$this->product_url->storeAs('public/product-img',$imgName);
  $this->product_url=$imgName;}
  // Use tempoary image_url if no image selected
  else{
   $this->product_url=$this->temp_product_url;}
 // Assign inputs to be used for update 
 $input=[
   'name'=>$this->name,
   'description'=>$this->description,
   'product_url'=>$this->product_url,
   'payment_url'=>$this->payment_url,
   'category'=>$this->category,
   'price'=>$this->price,
   'user_id'=>Auth()->user()->id];
 //Update database using assigned inputs
 $prodUpdate=product::find($prod_id)->update($input);
  // On success update show message
  if ($prodUpdate){
    Session()->
    flash('success','Product edited successfully Sam!');
    // Redirect if successfull
    return redirect()->to('admin/products');}
  // On update failure. Show error message
  else{
    Session()->
    flash('error','something went wrong with your request.');}
 } //End Update function
    
} // End class
