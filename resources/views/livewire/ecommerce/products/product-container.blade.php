
<div class="container-fluid ">

    <div class="row justify-content-center  text-center mt-4 b-1">


        <button class="btn btn-outline-info col-3 m-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilter" aria-controls="offcanvasFilter">      
              <i class="fa-solid fa-filter"></i>
            
          </button>
        
          <button type="button" class="btn btn-outline-info col-3 m-2 {{ $filter === 'recent' ? 'active' : '' }}"   wire:click="setFilter('recent')" >{{__('main_trans.Recent_products')}}</button>
           <button type="button" class="btn btn-outline-info col-3 m-2 {{ $filter === 'best_seller' ? 'active' : '' }}"   wire:click="setFilter('best_seller')">{{__('main_trans.best_selling_products')}}</button>
           <button type="button" class="btn btn-outline-info col-3 m-2 {{ $filter === 'new' ? 'active' : '' }}" wire:click="setFilter('new')"   >{{__('main_trans.new_arrivals')}}</button>
        @livewire('ecommerce.products.filter')
        <hr>
 </div>

<div class="container text-center mt-4">   

    <div class="row col-12 justify-content-center">
            @foreach($this->products as $key => $product)
                <div class="col-6 col-md-4 col-lg-3">
                    @livewire('ecommerce.products.product-card', ['product' => $product], key($product->id))
                    @livewire('ecommerce.products.product-modal', ['product' => $product])
                </div>
            @endforeach
        </div>
        
        {{-- {{$this->products->links() }}  --}}
    </div>
   
</div>
