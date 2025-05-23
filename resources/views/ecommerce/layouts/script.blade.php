@yield('script')
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
@livewireScripts
@stack('js-scripts')

<script src="{{asset('assets/dist/bootstrap-5.3.0-dist/js/bootstrap.min.js')}}"></script>
<!-- Bootstrap slider -->
    <script src="{{asset('assets/front end/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('assets/front end/js/plugins.js')}}"></script>
    <script src="{{asset('assets/front end/js/script.js')}}"></script>
    <script src="{{asset('assets/front end/js/main.js')}}"></script>

  <script src="{{asset('assets/plugins/aos/aos.js')}}"></script>
  <script src="{{asset('assets/plugins/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/plugins/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/plugins/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('assets/front end/js/main.js')}}"></script>

  
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var swiper = new Swiper(".mySwiper", {
        loop: true,  // Enables infinite looping
        autoplay: {
          delay: 3000, // Auto-slide every 3 seconds
          disableOnInteraction: false
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        effect: "fade", // Optional: Fade effect for smooth transitions
        speed: 800  // Animation speed
      });
    });
  </script>
  

<script>
 // contraol page direction 
document.addEventListener('DOMContentLoaded', function () {
    // Get the current locale from the meta tag or a global variable
    const locale = document.documentElement.lang; // Assuming lang attribute in <html>

    if (locale === 'ar') {
        document.body.classList.add('rtl');
    } else {
        document.body.classList.remove('rtl');
    }
});

/////////////////////////////////////////////////////

  const toggleTheme = document.getElementById('toggleTheme');

  // Load saved theme preference
  document.addEventListener('DOMContentLoaded', () => {
    const theme = localStorage.getItem('theme') || 'light';
    document.body.setAttribute('data-theme', theme);
    toggleTheme.checked = theme === 'dark';
  });

  // Toggle theme on change
  toggleTheme.addEventListener('change', () => {
    const theme = toggleTheme.checked ? 'dark' : 'light';
    document.body.setAttribute('data-theme', theme);
    localStorage.setItem('theme', theme); // Save preference
  });


  
    //style nav bar 
  // Get all dropdown elements
const dropdowns = document.querySelectorAll('.dropdown-toggle');

// Add event listener to each dropdown
  dropdowns.forEach(dropdown => {
  dropdown.addEventListener('click', () => {
    // Get the dropdown menu
    const dropdownMenu = dropdown.nextElementSibling;
    
    // Toggle the 'show' class
    dropdownMenu.classList.toggle('show');
  });
});

$('.dropdown-menu').dropdown();



</script>

{{-- scroll to top button --}}

<script>
const scrollToTopButton = document.getElementById("scrollToTop");

// Show button when user scrolls down
window.onscroll = function () {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        scrollToTopButton.style.display = "block";
    } else {
        scrollToTopButton.style.display = "none";
    }
};

// Scroll to top when button is clicked
scrollToTopButton.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
</script>

