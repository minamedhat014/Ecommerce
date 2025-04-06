<?php


namespace App\Traits;

use Livewire\WithPagination;


trait HasProductFilter {

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $filter = 'new'; // default

    public function setFilter($filter)
    {
        $this->filter = $filter;
    }


    public $isFiltered = false;
    public $price_low_range;
    public $price_high_range;
    public $price_average_range;
    public $category_id;
    public $page = 100;
    public $products =[];
    public $categories=[];



}
