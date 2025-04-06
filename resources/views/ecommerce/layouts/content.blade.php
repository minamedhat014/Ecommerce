<div class="content" id="content"  style=" padding-top: 70px;">
    @yield('content')
    <x-bread-crumb/>
    <button id="scrollToTop" class="scroll-top"><i class="fa-solid fa-up-long"></i></button>
   @livewire('ecommerce.products.product-search')
    @livewire('ecommerce.products.filter')
    @livewire('ecommerce.products.cart')
    @livewire('ecommerce.users.user-index') 
   
  <!-- /.content -->

  </div>