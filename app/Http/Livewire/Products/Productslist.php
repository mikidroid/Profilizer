<?php

namespace App\Http\Livewire\Products;
use App\Models\product;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Productslist extends Component{
 public $ProductList;
    public function mount(){
      $this->ProductList=DB::select('select * FROM products');}
      
    public function render(){
        return view('livewire.products.products')
        ->extends('layouts.app')
        ->section('content');}
}
