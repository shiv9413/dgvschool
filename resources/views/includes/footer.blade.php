
<!-- Footer Start -->
<div class="footer-wrap" style="background-color:rgba(3,22,67,.9) !important;">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="footer_logo"><img alt="" class="footer-default" src="{{asset('images/'.widget(1)->extra_image_1)}}"></div>
        <p>{{widget(1)->description}}</p>
      </div>
      <div class="col-lg-2 col-md-3">
        <h3>{{__('Quick links')}}</h3>
        <ul class="footer-links">
          {!!get_menus(2)!!}
        </ul>
      </div>
      @if(null!==(module(10)))
      <div class="col-lg-3 col-md-4">
        <h3>{{__('Opening Hours')}}</h3>
        <ul class="unorderList hourswrp">
          @foreach(module(10) as $day)
          <li>{{$day->title}} <span>{{$day->extra_field_1}}</span></li>
          @endforeach
        </ul>
      </div>
      @endif
      <div class="col-lg-3 col-md-4">
        <div class="footer_info">
          <h3>{{__('Get in Touch')}}</h3>
          <ul class="footer-adress">
            <li class="footer_address"> <i class="fas fa-map-signs"></i> <span>{{widget(1)->extra_field_4}}</span> </li>
            <li class="footer_email"> <i class="fas fa-envelope" aria-hidden="true"></i> <span><a href="mailto:{{widget(1)->extra_field_3}}"> {{widget(1)->extra_field_3}} </a></span> </li>
            <li class="footer_phone"> <i class="fas fa-phone-alt"></i> <span><a href="tel:{{widget(1)->extra_field_2}}"> {{widget(1)->extra_field_2}}</a></span> </li>
          </ul>
          <div class="social-icons footer_icon">
              <h3 style="margin-bottom: 15px;">Like Us On</h3>
            <ul>
              <li><a href="{{widget(12)->extra_field_1}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
              <li><a href="{{widget(12)->extra_field_2}}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="{{widget(12)->extra_field_3}}"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="{{widget(12)->extra_field_4}}"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer End --> 

<!--Copyright Start-->
<div class="footer-bottom text-center">
  <div class="container">
    <div class="copyright-text">{{__('Copyright')}} © {{widget(1)->extra_field_1}} {{__('2021. All Rights Reserved')}}</div>
  </div>
</div>
<!--Copyright End--> 





     <!--<div id="footer-bar" class="footer-bar-1">-->
     <!--       <a href="/school" class=""><i class="fa fa-home"></i><span>Home</span></a>-->
     <!--       <a href="/school/about-us"><i class="fa fa-user"></i><span>About</span></a>-->
     <!--       <a href="/school/classes"><i class="fa fa-book"></i><span>Classes</span></a>-->
     <!--       <a href="/school/gallery"><i class="fa fa-image"></i><span>Gallery</span></a>-->
     <!--       <a href="/school/contact-us"><i class="fa fa-phone"></i><span>Contact</span></a>-->
     <!--</div>-->
     <script>
         document.addEventListener("DOMContentLoaded", function () {
                // Select all dropdown buttons
                var dropdownButtons = document.querySelectorAll('.nav-item.dropdown button');
            
                dropdownButtons.forEach(function (dropdownButton) {
                    var dropdownMenu = dropdownButton.nextElementSibling; // The corresponding dropdown menu
                    
                    // Add a click event listener to each dropdown button
                    dropdownButton.addEventListener('click', function (event) {
                        event.preventDefault(); // Prevent default behavior (like page reload)
                        
                        // Toggle the dropdown menu
                        if (dropdownMenu.classList.contains('show')) {
                            dropdownMenu.classList.remove('show');  // Close the dropdown
                            dropdownMenu.style.display = 'none';    // Optionally hide it with display:none
                        } else {
                            dropdownMenu.classList.add('show');     // Open the dropdown
                            dropdownMenu.style.display = 'block';   // Optionally show it with display:block
                        }
                    });
                });
            
                // Close dropdowns when clicking outside
                document.addEventListener('click', function (event) {
                    dropdownButtons.forEach(function (dropdownButton) {
                        var dropdownMenu = dropdownButton.nextElementSibling; // The corresponding dropdown menu
                        
                        // If the click is outside the button and menu, close the dropdown
                        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                            dropdownMenu.classList.remove('show');
                            dropdownMenu.style.display = 'none';  // Optionally hide the dropdown
                        }
                    });
                });
            });

     </script>
