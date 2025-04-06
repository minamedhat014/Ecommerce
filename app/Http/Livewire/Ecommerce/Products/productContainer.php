<?php

namespace App\Http\Livewire\Ecommerce\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\HasProductFilter;
use Livewire\Attributes\Computed;


class productContainer extends Component
{

use HasProductFilter;









    public function render()
    {
     
        return view('livewire.ecommerce.products.product-container');
    }
}
