<?php

namespace App\Http\Livewire\Admin;
use App\Models\product;

use Livewire\Component;

class ProductSlide extends Component
{
public $Products=[];

 public function mount(){
$Proj=array('This is the Products','Product2','Product3');
 $this->Products=product::orderBy('id','desc')->get();
 }
    public function render()
    {
        
return <<<'blade'
           <div class="card bg-light ml-2 mr-2 container"><h5 class="card-title mt-3 mb-0" ><i class="mr-2 fa fa-folder-open" aria-hidden="true"></i><b>Products & Services</b></h5><hr/><div class="d-flex d-flex-row overflow-auto">@foreach ($Products as $Product)<a style="color:#343434" href="/products/{{$Product->name}}/{{$Product->created_at}}/{{$Product->id}}"><div class="col-4-sm myAnimate1"><div class="card-img-header"><img style="object-fit:cover;border:solid;border-size:2px;border-color:#fff" height="150px" width="200px" src="storage/product-img/{{$Product->product_url}}"></div><div class="card-body"><h5 class="card-title mb-1 myTruncate1" style="width:100%">{{$Product->name}}</h5><div class="card-text myTruncate2" style="width:160px">{{$Product->description}}</div><div class=""><span style="background-color:#34bc00;color:#fff; border-radius:30px" class="mr-1 pl-2 pr-1 text-mutted">Price </span><b>@if($Product->price!=0)N<?php echo number_format($Product->price) ?>@else FREE! @endif </b> </div></div></div></a>@endforeach</div></div></div>
        blade;
        
    }
}
