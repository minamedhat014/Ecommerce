<?php

namespace App\Http\Livewire\Ecommerce\Products;

use App\Models\Price;
use App\Models\Product;
use Livewire\Component;
use App\Traits\HasCheckbox;
use App\Models\ProductCategory;
use App\Traits\HasProductFilter;

class Filter extends Component
{
    
    
    use HasCheckbox;

public $categories=[];
public $price_high_range;
public $price_low_range;
public $price_range ;
public $filter = 'new'; // default



public function mount(){
    $this->categories = ProductCategory::all();
    $prices = Price::pluck('price');
    $this->price_high_range = $prices->max();
    $this->price_low_range =$prices->min();
}

public function setFilter($filter)
{
    $this->filter = $filter;
}

public function filter() {
   
        return Product::with(['category', 'media', 'offers', 'price','attributes','features','applications'])
            ->where('status', 'active')   

            ->when($this->checked_ids, function ($query)  {
                $query->whereRelation('category', 'category_id', '=', $this->checked_ids);
            })
    
            ->when(isset($this->price_low_range, $this->price_high_range), function ($query)  {
                $query->whereHas('price', function ($query)  {
                    $query->whereBetween('price', [$this->price_low_range, $this->price_high_range]);
                });
            })
            ->when($this->filter === 'best_seller', fn($q) => $q->where('is_best_seller', true))
            ->when($this->filter === 'new', fn($q) => $q->orderBy('created_at', 'desc'))
            ->when($this->categoryId, fn($q) => $q->where('category_id', $this->categoryId))
            ->get();
    
}




    public function render()
    {
        return view('livewire.ecommerce.products.filter');
    }
}
