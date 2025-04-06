<footer class="py-5">
    <div>
      <hr>
    <!-- Fixed bottom bar -->
   @livewire('layouts.fixed-bar')
      <div class="row footer">

        <div class="col-12 col-md-2">
          <div class="footer-menu">
            <img src="{{siteLogo()}}" alt="logo" id="logo" class="footer-logo">
            <x-social-media-links />  
          </div>
        </div>
        

        <div class="col-12 col-sm-10">
          <div class="footer-menu">
          <ul>
          @foreach(frontLinks('footer') as $key => $link)
          <a href="{{$link->slug}}" class="nav-link">@if(app()->getLocale() == 'ar') {{$link->title_ar}} @else {{$link->title_en}} @endif</a>
          @endforeach
            </ul>
          
          </div>
        </div>
       
      </div>

      <div class="row col-12 copyright">
        <div class="col-12 col-md-10">
          © {{ now()->year }} <span class="site-name">   {{__('main_trans.All_rights_reserved')}} {{siteInfo("name")}}</span> 
        </div>

        <div class="col-12 col-md-2">
        <img src="{{asset('assets/front/images/dev_logo.png')}}" alt="" width="150">
        </div>

      </div>
    

    </div>
  
        
     

  </footer >
  