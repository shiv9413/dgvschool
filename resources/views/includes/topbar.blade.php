<style>
    /* Make the dropdown menus appear on hover */
.navbar-nav .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
}

/* Optional: Smooth transition for dropdowns */
.dropdown-menu {
    transition: all 0.3s ease;
}

/* Adjust the alignment and positioning of the dropdown */
.dropdown-menu {
    position: absolute;
    left: 0;
    top: 100%;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
}
@media screen and (max-width: 990px) {
    .navbar-collapse {
        position: static !important;
    }
</style>
<div id="top_header" style="background-color:rgba(3,22,67,.9);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 top_header_left" style="margin:2px;">
                        <ul class="icon_header">
                            
                            
                            
                            
                            

                            
                            <!--<li class="border_round tran3s" title="Twitter"><a href="Javascript:void(0)"><i class="fa fa-twitter padt5 padr5"></i></a></li>
          <li class="border_round tran3s" title="Google Plus"><a href="Javascript:void(0)"><i class="fa fa-google-plus padt5 padr5"></i></a></li>-->
                            
                            
                            
                        </ul>
                        <!-- ========== End .icon_header ========= -->

                    </div>
                    <!-- ========== End .top_header_left ========= -->

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top_header_right pt-2">
            <!-- Social Media Links -->
            <div class="d-flex flex-wrap justify-content-center align-items-center">
                <!-- Facebook Link -->
                <a href="https://www.facebook.com/DGVRtk?mibextid=ZbWKwL" target="_blank" class="mr-3 mb-2">
                    <img src="{{asset('images/fb.png')}}" style="width: 28px; border-radius: 15%; background-color:#feffff;padding:2px;">
                </a>
                <!-- Instagram Link -->
                <a href="https://www.instagram.com/dgvrohtak?igsh=MTlpbjJwYWZnOGVmdw==" target="_blank" class="mr-3 mb-2">
                    <img src="{{asset('images/instagram.png')}}" style="width: 28px; border-radius: 15%; background-color:#feffff;padding:2px;">
                </a>
                <!-- YouTube Link -->
                <a href="https://youtube.com/@dgvpublicschoolrohtak?si=Iih9jZfv2meBXHuo" target="_blank" class="mr-3 mb-2">
                    <img src="{{asset('images/youtube.png')}}" style="width: 28px; border-radius: 15%; background-color:#feffff;padding:2px;">
                </a>
                <!-- Whatsapp Link -->
               <a href="https://wa.me/918708773237?text=D.G.V.%20School" target="_blank" class="mr-3 mb-2">
                    <img src="{{asset('images/whats-app.jpg')}}" style="width: 28px; border-radius: 15%; background-color:#feffff; padding:2px;" alt="WhatsApp">
                </a>
            </div>
        
            <!-- Email and Phone Links -->
            <div class="d-flex flex-wrap justify-content-center mt-2">
                <!-- Email Link -->
                <a href="mailto:info@dgvrohtak.com" class="text-white mr-3 mb-2" style="font-size: 14px;">
                    <i class="fas fa-envelope" aria-hidden="true"></i> info@dgvrohtak.com
                </a>
        
                <!-- Phone Link -->
                <a href="tel:+918708773237" class="text-white mb-2" style="font-size: 14px;">
                    <i class="fas fa-phone-alt"></i> +918708773237
                </a>
            </div>
        </div>



                    <!-- ========== End .top_header_right ========= -->
                    <div class="clear_fix" style="clear: both;"></div>
                </div>
                <!-- ========== End .row ========= -->
            </div>
            <!-- ========== End .container ========= -->
        </div>
<!--<div class="header-wrap">-->
<!--  <div class="container-fluid">-->
<!--    <div class="row">-->
<!--      <div class="col-lg-3 col-md-12 navbar-light">-->
<!--        <div class="logo"> <a href="{{url('/')}}"><img alt="" class="logo-default" src="{{asset('images/'.widget(1)->extra_image_1)}}"></a></div>-->
<!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>-->
<!--      </div>-->
<!--      <div class="col-lg-6 col-md-12">-->
<!--        <div class="navigation-wrap" id="filters">-->
<!--          <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="#">{{__('Menu')}}</a>-->
<!--            <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--              <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>-->
<!--              <ul class="navbar-nav mr-auto">-->
<!--                {!!get_menus(1)!!}-->
<!--              </ul>-->
<!--            </div>-->
<!--          </nav>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="col-lg-2 mt-3">-->
<!--        <div class="header_info">-->
<!--            <div class="dropdown" style="display:none;">-->
<!--              <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="background-color:#000435; color:white;">-->
<!--                 Learn More  <i class="fa fa-download"></i>-->
<!--              </button>-->
<!--              <div class="dropdown-menu" style="margin-top:4px;">-->
<!--                <a class="dropdown-item" href="{{ asset('download/Brochure.pdf') }}" download target="_blank">Brochure <i class="fa fa-file-pdf" aria-hidden="true"></i></a>-->
                <!--<a class="dropdown-item" href="{{ asset('download/Holidays.jpg') }}" download target="_blank">Holidays <i class="fa fa-image" aria-hidden="true"></i></a>-->
<!--                <a class="dropdown-item" href="{{ asset('download/School Details.pdf') }}" download target="_blank">School Details <i class="fa fa-file-pdf" aria-hidden="true"></i></a>-->
                <!--<a class="dropdown-item" href="{{ asset('download/School-Uniform-Details.jpg') }}" download target="_blank">Uniform Details <i class="fa fa-image" aria-hidden="true"></i></a>-->
                <!--<a class="dropdown-item" href="{{ asset('download/Instructions-of-School.jpg') }}" download target="_blank">Instructions of School <i class="fa fa-image" aria-hidden="true"></i></a>-->
<!--              </div>-->
<!--            </div>-->
          <!--<div class="search"><a href="#"><i class="fas fa-search"></i></a></div>-->
<!--          <div class="loginwrp">-->
<!--            @if(Auth::guard('student')->user())-->
<!--            <a href="{{ route('student.home') }}">-->
<!--                        <i class="ti-layout-sidebar-left"></i> {{__('Dashboard')}}-->
<!--                        </a>-->
<!--            @else-->
<!--            @if(Auth::guard('applicant')->user())   -->
<!--              <a href="{{ route('applicant.a.home') }}">-->
<!--                        <i class="ti-layout-sidebar-left"></i> {{__('Dashboard')}}-->
<!--                        </a>-->
<!--            @else               -->
<!--            <a href="{{route('student.login')}}">{{__('Login/Register')}}</a>-->
<!--            @endif-->
<!--            @endif-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<div class="header-wrap">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-12 navbar-light">
        <div class="logo"> 
          <a href="https://dgvschool.com/school">
            <img alt="" class="logo-default" style="width:65%;" src="https://dgvschool.com/school/public/images/DGV LOGO 2_1714497699.png">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span> 
        </button>
      </div>
      <div class="col-lg-9 col-md-12">
        <div class="navigation-wrap" id="filters">
          <nav class="navbar navbar-expand-lg navbar-light"> 
            <a class="navbar-brand" href="#">Menu</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <button class="close-toggler" type="button" data-toggle="offcanvas">
                <span><i class="fas fa-times-circle" aria-hidden="true"></i></span>
              </button>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a href="https://dgvschool.com/school/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a href="https://dgvschool.com/school/about-us" class="nav-link">About Us</a>
                </li>
                <li class="nav-item dropdown">
                  <!--<a href="#" class="nav-link dropdown-toggle" id="academicsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>-->
                  <button class="nav-link dropdown-toggle btn btn-link" id="academicsDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Academics
                    </button>
                  <div class="dropdown-menu" aria-labelledby="academicsDropdown">
                    <a class="dropdown-item" href="https://dgvschool.com/school/alumni">Alumni</a>
                    <a class="dropdown-item" href="https://dgvschool.com/school/achievements">Achievements</a>
                    <a class="dropdown-item" href="https://dgvschool.com/school/classes">Classes</a>
                    <a class="dropdown-item" href="https://dgvschool.com/school/syllabus-curriculur">Syllabus & Curriculum</a>
                    <a class="dropdown-item" href="https://dgvschool.com/school/faculty">Faculty</a>
                    <!--<a class="dropdown-item" href="#">Co-Curricular</a>-->
                    <a class="dropdown-item" href="https://dgvschool.com/school/news">News</a>
                    <a class="dropdown-item" href="https://dgvschool.com/school/events">Events</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <!--<a href="#" class="nav-link dropdown-toggle" id="admissionDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admission</a>-->
                  <button class="nav-link dropdown-toggle btn btn-link" id="admissionDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admission
                    </button>
                  <div class="dropdown-menu" aria-labelledby="admissionDropdown">
                    <a class="dropdown-item" href="https://dgvschool.com/school/admission-process">Admission Process</a>
                    <a class="dropdown-item" href="https://dgvschool.com/school/admission-form">Admission Form</a>
                    <a class="dropdown-item" href="https://dgvschool.com/school/rule-and-regulations">Rules & Regulations</a>
                    <a class="dropdown-item" href="https://dgvschool.com/school/withdrawal-criteria">Withdrawal Criteria</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <!--<a href="#" class="nav-link dropdown-toggle" id="schoolInfoDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Facilities</a>-->
                  <button class="nav-link dropdown-toggle btn btn-link" id="schoolInfoDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Facilities
                    </button>
                  <div class="dropdown-menu" aria-labelledby="schoolInfoDropdown">
                    <a class="dropdown-item" href="https://dgvschool.com/school/sports">Outdoor Games</a>
                    <a class="dropdown-item" href="https://dgvschool.com/school/clubs">Clubs</a>
                    <a class="dropdown-item" href="https://dgvschool.com/school/labs">Labs</a>
                    <a class="dropdown-item" href="https://dgvschool.com/school/rooms">Rooms</a>
                    <a class="dropdown-item" href="https://dgvschool.com/school/house">Houses</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <!--<a href="#" class="nav-link dropdown-toggle" id="downloadsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informations</a>-->
                    <button class="nav-link dropdown-toggle btn btn-link" id="downloadsDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        School Info
                    </button>
                  <div class="dropdown-menu" aria-labelledby="downloadsDropdown">
                        <a class="dropdown-item" href="{{ asset('download/Brochure.pdf') }}" download target="_blank">Brochure <i class="fa fa-file-pdf" aria-hidden="true"></i></a>
                <a class="dropdown-item" href="{{ asset('download/Holidays.pdf') }}" download target="_blank">Holidays <i class="fa fa-pdf" aria-hidden="true"></i></a>
                <a class="dropdown-item" href="{{ asset('download/School Details.pdf') }}" download target="_blank">School Details <i class="fa fa-file-pdf" aria-hidden="true"></i></a>
                <a class="dropdown-item" href="{{ asset('download/School-Uniform-Details.jpg') }}" download target="_blank">Uniform Details <i class="fa fa-image" aria-hidden="true"></i></a>
                <a class="dropdown-item" href="{{ asset('download/Instructions-of-School.jpg') }}" download target="_blank">Instructions of School <i class="fa fa-image" aria-hidden="true"></i></a>
                  </div>
                </li>
                 <li class="nav-item">
                  <a href="https://dgvschool.com/school/gallery" class="nav-link">Gallery</a>
                </li>
                 <li class="nav-item">
                  <a href="https://dgvschool.com/school/contact-us" class="nav-link">Contact Us</a>
                </li>
                <!--<li class="nav-item">-->
                <!--  <a href="#" class="nav-link">ERP Login</a>-->
                <!--</li>-->
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="loginwrp">
            @if(Auth::guard('student')->user())
            <a href="{{ route('student.home') }}">
                        <i class="ti-layout-sidebar-left"></i> {{__('Dashboard')}}
                        </a>
            @else
            @if(Auth::guard('applicant')->user())   
              <a href="{{ route('applicant.a.home') }}">
                        <i class="ti-layout-sidebar-left"></i> {{__('Dashboard')}}
                        </a>
            @else               
            <a href="{{route('student.login')}}">{{__('Login/Register')}}</a>
            @endif
            @endif
          </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginbuttons" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login As</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      
      <div class="modal-footer">
        <a style="width: 100%" href="{{route('student.login')}}" class="btn btn-secondary">Student</a>
        <a style="width: 100%" href="{{route('applicant.login')}}" class="btn btn-primary">Applicant</a>
      </div>
    </div>
  </div>
</div>
