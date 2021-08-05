<?php
namespace App\Http\Livewire\products;
use App\Models\product;
use Livewire\Component;

class OneProduct extends Component
{
 public $Product;
 public $ProductAuthor;
 
    public function mount($id){
     $this->Product=product::find($id);
     $this->ProductAuthor=product::find($id)->user->name;
     }
     
    public function render(){
     return view('livewire.products.one-product')
     ->extends('layouts.app')
     ->section('content');}
}
