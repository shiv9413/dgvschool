@extends('layouts.app')
@push('css')
<style type="text/css">
  .card {
    position: relative;
    margin-bottom: 1.5rem;
    width: 100%;
}

.teachers-content h3 {
    font-size: 18px!important;
}
.power-ribbon-top-left {
    top: -6px;
    left: -9px;
}
.power-ribbon {
    width: 56px;
    height: 56px;
    overflow: hidden;
    position: absolute;
    z-index: 10;
}
.power-ribbon-top-left span {
    right: -5px;
    top: 1px;
    transform: rotate(
-45deg
);
}
.power-ribbon span {
    position: absolute;
    display: block;
    width: 82px;
    padding: 8px 0;
    color: #fff;
    font: 500 16px/1 Lato, sans-serif;
    text-shadow: 0 1px 1px rgb(0 0 0 / 20%);
    text-transform: capitalize;
    text-align: center;
}
.badge {
    display: inline-block;
    padding: .25em .4em;
    font-size: 50%;
    font-weight: 300;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 3px;
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 80%;
    line-height: 1.84615385;
    border-radius: 3px;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.mr-5 a{
  font-size: 85%;
}
.categories_wrap {
    z-index: 1!important;
    margin-top: -70px;
    position: relative;
}
.categories-course h4 {
    font-size: 17px!important;
}
.edu_icon {
    background: #000;
    width: 106px!important;
    height: 45px!important;
    line-height: 22px!important;
}
.class_box {
    border-radius: 12px!important;
}
.gkcss {
      background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
      padding: 10px 20px;
      border-radius: 5px;
      color: #fff; /* Ensure the text is white */
      font-family:IBMPlexSerif !important;
  }
#border_custom {
    border:5px rgba(3,22,67,.9) double; margin-left: 10px;
    margin-right: 10px;
    text-align: justify;
}  
</style>

<style>
    .news-section {
        background-color: #ffffff; /* Dark blue with transparency */
        color:  rgba(3, 22, 67, 0.9); 
        border: 1px solid #ddd;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        font-family: "Times New Roman";
    }

    .news-title {
        text-align:center;
        background-color: #ffffff;
        color:  rgba(3, 22, 67, 0.9); 
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 15px;
        font-family: "Times New Roman";
    }

    .news-container {
        position: relative;
        overflow: hidden;
        height: 200px; /* Adjust as needed */
    }

    .news-list {
        list-style-type: none;
        margin: 0;
        padding: 0;
        animation: scroll-mid 15s linear infinite;
    }

    .news-list li {
        padding: 10px 0;
    }

    .news-list li a {
        text-decoration: none;
        font-size: 1rem;
        color: #ffffff; /* White text for links */
    }

    .news-list li a:hover {
        text-decoration: underline;
    }

    .news-container:hover .news-list {
        animation-play-state: paused;
    }

    @keyframes scroll-mid {
        0% {
            transform: translateY(50%); /* Start from the middle */
        }
        100% {
            transform: translateY(-100%); /* Scroll to the top */
        }
    }
</style>
@endpush
@section('content')
<!--<div class="container" style="margin: 0; padding: 0;">-->
<!--    <div class="row">-->
<!--        <div class="col-md-12 col-sm-12 col-lg-12">-->
<!--              <img src="{{ asset('images/dgv_background_1714248357.png') }}" alt="">-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="tp-banner-container">
  <div class="tp-banner" style="max-height: 500px!important; height: 500px!important;">
    <ul>
      @if(null!==(module(1))) 
      @foreach(module(1) as $slider) 
      <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="images/dummy.png" data-lazyload="{{asset('images/'.$slider->image)}}">
        <!--<div class="caption lft large-title tp-resizeme slidertext2 gkcss" data-x="center" data-y="170" data-speed="600" data-start="1600"><span> {{$slider->title}} </span></div>-->
        <!--<div class="caption lfb large-title tp-resizeme slidertext3 gkcss" data-x="center" data-y="260" data-speed="600" data-start="2200">{!! $slider->description!!}</div>-->
        <!--<div class="caption lfb large-title tp-resizeme slidertext4" data-x="330" data-y="350" data-speed="600" data-start="2800"> <a data-bs-toggle="modal" data-bs-target="#admissionFormModal"><i class="fas fa-edit" style="font-size: 18px !important;"></i> {{$slider->extra_field_1}}</a> </div>-->
        <!--<div class="caption lfb large-title tp-resizeme slidertext4" data-x="610" data-y="350" data-speed="600" data-start="3400"> <a href="{{url('/contact-us')}}"><i class="far fa-calendar-alt" style="font-size: 18px !important;"></i> {{$slider->extra_field_3}}</a> </div>-->
      </li>
      @endforeach
      @endif
      
    </ul>
  </div>
</div>


<div class="our-course-categories-two " style="margin-top:110px; display:none;" id="course-section">
<!--    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#admissionFormModal">-->
<!--  Open Admission Form-->
<!--</button>-->
  <div class="container">
    <div class="categories_wrap">
      <ul class="row unorderList">
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course" style="background-color:rgba(3,22,67,.9) !important;">
            <div class="edit_option">
              @if(Auth::guard('admin')->user())
              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(2)->slug)}}#widget_2"><i class="fas fa-edit"></i></a>
              @endif
            </div>
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="{{asset('images/'.widget(2)->extra_image_1)}}" alt=""> </span> </div>
              <div class="cours-title">
                <h4>{{ widget(2)->extra_field_1 }}</h4>
                <p>{!! widget(2)->description !!}</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course" style="background-color:rgba(3,22,67,.9) !important;">
            <div class="edit_option">
              @if(Auth::guard('admin')->user())
              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(3)->slug)}}#widget_3"><i class="fas fa-edit"></i></a>
              @endif
            </div>
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="{{asset('images/'.widget(3)->extra_image_1)}}" alt=""> </span> </div>
              <div class="cours-title">
                <h4>{{ widget(3)->extra_field_1 }}</h4>
                <p>{!! widget(3)->description !!}</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course" style="background-color:rgba(3,22,67,.9) !important;" >
            <div class="edit_option">
              @if(Auth::guard('admin')->user())
              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(4)->slug)}}#widget_4"><i class="fas fa-edit"></i></a>
              @endif
            </div>
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="{{asset('images/'.widget(4)->extra_image_1)}}" alt=""> </span> </div>
              <div class="cours-title">
                <h4>{{ widget(4)->extra_field_1 }}</h4>
                <p>{!! widget(4)->description !!}</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course" style="background-color:rgba(3,22,67,.9) !important;">
            <div class="edit_option">
              @if(Auth::guard('admin')->user())
              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(5)->slug)}}#widget_5"><i class="fas fa-edit"></i></a>
              @endif
            </div>
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="{{asset('images/'.widget(5)->extra_image_1)}}" alt=""> </span> </div>
              <div class="cours-title">
                <h4>{{ widget(5)->extra_field_1 }}</h4>
                <p>{!! widget(5)->description !!}</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
      </ul>
    </div>
  </div>
</div>


<div class="about-wrap  " id="about" style="padding:0 !important;">
  <div class="container">
    <div class="about_sec">
        <div class="row">
                  @if(null!==(module(1))) 
                  @foreach(module(1) as $slider) 
            <div class="col-md-12 col-sm-12 col-lg-12 mb-4 text-center">
                <div class="caption lfb large-title tp-resizeme slidertext4" data-speed="600" data-start="2800"> <a data-bs-toggle="modal" data-bs-target="#admissionFormModal"><i class="fas fa-edit" style="font-size: 14px !important; "></i> {{$slider->extra_field_1}}</a> </div>
            </div>
            <!--<div class="col-md-12 col-sm-12 col-lg-6 mb-4">-->
            <!--     <div class="caption lfb large-title tp-resizeme slidertext4" data-speed="600" data-start="3400"> <a href="{{url('/contact-us')}}"><i class="far fa-calendar-alt" style="font-size: 18px !important;"></i> {{$slider->extra_field_3}}</a> </div>-->
                  
            <!--</div>-->
            @endforeach
            @endif
            <div class="col-md-6 col-sm-6 col-lg-6">
                  <img src="{{ asset('images/school-info.png') }}" alt="">
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 mt-3 mb-3">
              <div class="news-section">
                  <h3 class="news-title">Latest News</h3>
                  <div class="news-container">
                      <ul class="news-list">
                          <li>
                               <b>Admission will open soon!</b>
                          </li>
                          <li>
                              <b>Congratulations to Students holding high positions in the Olympiad.</b>
                          </li>
                          <li>
                              <b>Download the New School Mobile App Today! <a href="https://play.google.com/store/apps/details?id=com.schoolknot.dgvschool" target="_blank"><i class="fas fa-share"></i>                                  </a></b>
                          </li>
                          <li>
                              <b>Winter Break is from 01.01.2025 to 15.01.2025</b>
                          </li>
                          <li>
                            <b>Annual Sports Function - 22nd December 2024</b>
                          </li>
                          <li>
                            <b>Quote of the Week: “Education is the most powerful weapon which you can use to change the world” – Nelson Mandela</b>
                          </li>
                          <li>
                            <b>Join the D.G.V. WhatsApp community for Instant Updates <a href="https://wa.me/918708773237?text=D.G.V.%20School" target="_blank"><i class="fas fa-share"></i>                              </a></b>
                          </li>
                          <li>
                            <b>D.G.V. Food Bank Inauguration on Dec 04, 2024 (Thursday)
                            </b>
                          </li>
                          <li>
                            <b>
                            D.G.V. Annual Cultural Function on Dec 14, 2024 (Saturday)
                            </b>
                          </li>
                          <li>
                            <b>Christmas Celebration on Dec 24, 2024</b>
                          </li>
                      </ul>
                  </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 mt-2" id="border_custom">
                <h4 style="color:rgba(3,22,67,.9);"><strong>Our Vision</strong></h4>
                <p>Professor William James of Harward used to say, “The average person develops only 10% of his lalent mental ability.” Stating the things broadly, the human individual lives far below his full potential. He possesses powers of various sorts which he habitually fails to use. Thus the great aim of education is not just knowledge but action with knowledge. </p>
            </div>      
             <div class="col-md-12 col-sm-12 col-lg-12 mt-2 mb-2" id="border_custom">
                 <h4 style="color:rgba(3,22,67,.9);"><strong>Our Mission</strong></h4>
                 <p>At D.G.V. School, our mission is to empower students to excel in their careers by celebrating diverse talents while respecting individual differences and backgrounds. Our inclusive community values mutual respect, sensitivity, and goodwill, shaping learners to make meaningful contributions to the world.</p>
            </div>
             <div class="col-md-12 col-sm-12 col-lg-12">
                  <img src="{{ asset('images/apj-quote.png') }}" alt="">
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 mb-2 mt-2">
                  <img src="{{ asset('download/Image.png') }}" alt="">
            </div>
        </div>
    <!--  <div class="edit_option">-->
    <!--     @if(Auth::guard('admin')->user())-->
    <!--          <a target="_blank" href="{{route('admin.widgets_data',widgetPage(6)->slug)}}#widget_6"><i class="fas fa-edit"></i></a>-->
    <!--          @endif-->
    <!--  </div>-->
    <!--<div class="row">-->
    <!--  <div class="col-lg-7">-->
    <!--    <div class="aboutImg" style="text-align: center;"><img src="{{asset('images/'.widget(6)->extra_image_1)}}" style="height:450px; border-radius:12px;" alt=""></div>-->
    <!--  </div>-->
    <!--  <div class="col-lg-5">-->
    <!--    <div class="about_box">-->
    <!--      <div class="title">-->
    <!--        <h1>{!! widget(6)->extra_field_1 !!}</h1>-->
    <!--      </div>-->
    <!--      <p>{!! widget(6)->description !!}</p>-->
    <!--      <ul class="edu_list">-->
    <!--        <li>-->
    <!--          <div class="learing-wrp">-->
    <!--            <div class="edu_icon" style="background-color:rgba(3,22,67,.9) !important;"><img src="{{asset('images/education.png')}}" style="width: 70%;-->
    <!--margin: 8px 5px 4px 5px;" alt=""></div>-->
    <!--            <div class="learn_info">-->
    <!--              <h3>{{ widget(6)->extra_field_2 }}</h3>-->
    <!--              <p>{{ widget(6)->extra_field_3 }}</p>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <div class="learing-wrp">-->
    <!--            <div class="edu_icon" style="background-color:rgba(3,22,67,.9) !important;"><img src="{{asset('images/class.png')}}" style="width: 72%;-->
    <!--margin: 10px 5px 4px 5px;" alt=""></div>-->
    <!--            <div class="learn_info">-->
    <!--              <h3>{{ widget(6)->extra_field_4 }}</h3>-->
    <!--              <p>{{ widget(6)->extra_field_5 }}</p>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
  </div>
  </div>
</div>
@if(null!==(module(2))) 
<!--<div class="class-wrap">-->
<!--  <div class="container">-->
<!--    <div class="edit_option">@if(Auth::guard('admin')->user())-->
<!--            <a target="_blank" href="{{route('admin.modules.data',moduleSlug(2)->slug)}}"><i class="fas fa-edit"></i></a>-->
<!--            @endif</div>-->
<!--    <div class="title">-->
<!--      <h1> {{__('Our Popular Classes')}} </h1>-->
<!--    </div>-->
<!--    <ul class="owl-carousel  ">-->
<!--      @foreach(module(2) as $class)-->
<!--      <li class="item">-->
<!--        <div class="class_box">-->
<!--          <div class="class_Img"><img src="{{asset('images/thumb/'.$class->image)}}" alt="">-->
<!--            <div class="time_box"><span>{{$class->extra_field_5}}</span></div>-->
<!--          </div>-->
<!--          <div class="path_box">-->
<!--            <h3><a href="{{route('classes.detail',$class->slug)}}">{{$class->title}}</a></h3>-->
<!--            <p>{!!\Illuminate\Support\Str::limit(strip_tags($slider->description), 100, '...')!!}</p>-->
            <!--<div class="students_box">-->
            <!--  <div class="students">Students: {{$class->extra_field_3}}</div>-->
            <!--  <div class="stud_fee">Fee: {{$class->extra_field_6}}</div>-->
            <!--</div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </li>-->
<!--      @endforeach-->
<!--    </ul>-->
<!--  </div>-->
<!--</div>-->
@endif
<!--<div class="container mt-5">-->
<!--  <div class="row">-->
    <!-- Labs Category -->
<!--    <div class="col-md-4">-->
<!--      <div class="card">-->
<!--        <div class="card-header text-center text-white" style="background-color:rgba(3,22,67,.9) !important;">-->
<!--          <b>LABS</b>-->
<!--        </div>-->
<!--        <div class="card-body">-->
<!--          <ul class="list-group">-->
<!--              <li class="list-group-item">Physics Lab</li>-->
<!--              <li class="list-group-item">Chemistry Lab</li>-->
<!--              <li class="list-group-item">Biology Lab</li>-->
<!--              <li class="list-group-item">Robotics Lab</li>-->
<!--              <li class="list-group-item">IT Labs</li>-->
<!--              <li class="list-group-item">Mathematics Lab</li>-->
<!--              <li class="list-group-item">S.S. Lab</li>-->
<!--              <li class="list-group-item">Psychology Lab</li>-->
<!--          </ul>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
    
    <!-- Rooms Category -->
<!--    <div class="col-md-4">-->
<!--      <div class="card">-->
<!--        <div class="card-header text-center text-white" style="background-color:rgba(3,22,67,.9) !important;">-->
<!--          <b>ROOMS</b>-->
<!--        </div>-->
<!--        <div class="card-body">-->
<!--         <ul class="list-group">-->
<!--            <li class="list-group-item">Art Room</li>-->
<!--            <li class="list-group-item">Music Room</li>-->
<!--            <li class="list-group-item">Dance Room</li>-->
<!--            <li class="list-group-item">Indoor Games Room</li>-->
<!--            <li class="list-group-item">Library</li>-->
<!--            <li class="list-group-item">Medical Room</li>-->
<!--            <li class="list-group-item">Kids Gym</li>-->
<!--            <li class="list-group-item">Cultural Auditorium</li>-->
<!--            <li class="list-group-item">Jungle Room</li>-->
<!--          </ul>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->

    <!-- Outdoor Games Category -->
<!--    <div class="col-md-4">-->
<!--      <div class="card">-->
<!--        <div class="card-header text-center text-white" style="background-color:rgba(3,22,67,.9) !important;">-->
<!--          <b>OUTDOOR GAMES</b>-->
<!--        </div>-->
<!--        <div class="card-body">-->
<!--          <ul class="list-group">-->
<!--              <li  class="list-group-item">Cricket Pitche</li>-->
<!--              <li  class="list-group-item">Basketball</li>-->
<!--              <li  class="list-group-item">Skating Rink</li>-->
<!--              <li  class="list-group-item">Volleyball</li>-->
<!--              <li  class="list-group-item">Handball</li>-->
<!--              <li  class="list-group-item">Badminton</li>-->
<!--              <li  class="list-group-item">Football</li>-->
<!--              <li  class="list-group-item">Shooting</li>-->
<!--              <li  class="list-group-item">Kho-kho</li>-->
<!--              <li  class="list-group-item">Lawn Tennis</li>-->
<!--          </ul>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="col-md-4">-->
<!--      <div class="card">-->
<!--        <div class="card-header text-cente text-white" style="background-color:rgba(3,22,67,.9) !important;">-->
<!--          <b>HOUSES</b>-->
<!--        </div>-->
<!--        <div class="card-body">-->
<!--        <ul class="list-group">-->
<!--          <li class="list-group-item">Rigya</li>-->
<!--          <li class="list-group-item">Yajur</li>-->
<!--          <li class="list-group-item">Saam</li>-->
<!--          <li class="list-group-item">Atharva</li>-->
<!--        </ul>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="col-md-4">-->
<!--      <div class="card">-->
<!--        <div class="card-header text-center text-white" style="background-color:rgba(3,22,67,.9) !important;">-->
<!--          <b>CLUBS</b>-->
<!--        </div>-->
<!--        <div class="card-body">-->
<!--        <ul class="list-group">-->
<!--          <li class="list-group-item">Sports</li>-->
<!--          <li class="list-group-item">Literary</li>-->
<!--          <li class="list-group-item">Ecofriendly</li>-->
<!--          <li class="list-group-item">Photography</li>-->
<!--          <li class="list-group-item">Handicrafts</li>-->
<!--          <li class="list-group-item">D.G.V. Tourism</li>-->
<!--        </ul>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!-- Choice Start -->
<div class="choice-wrap " style="background:rgba(3,22,67,.9);">
  <div class="container">
    <div class="edit_option blck_color">
       @if(Auth::guard('admin')->user())
              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(7)->slug)}}#widget_7"><i class="fas fa-edit"></i></a>
              @endif
    </div>
    <div class="title">
      <h1 style="color:white;">{!! widget(7)->extra_field_1 !!}</h1>
    </div>
    <p style="color:white;">{!! widget(7)->description !!}</p>
    <div class="readmore"><a href="{!! url('/contact-us') !!}">{!! widget(7)->extra_field_2 !!}</a></div>
  </div>
</div>
<!-- Choice End -->



<!-- Video Start -->
<!--<div class="video-wrap  ">-->
<!--  <div class="container">-->
<!--    <div class="title center_title">-->
<!--      <div class="edit_option blck_color">-->
<!--       @if(Auth::guard('admin')->user())-->
<!--              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(8)->slug)}}#widget_8"><i class="fas fa-edit"></i></a>-->
<!--              @endif-->
<!--    </div>-->
<!--      <h1>{!! widget(8)->extra_field_1 !!}</h1>-->
<!--    </div>-->
<!--    <div class="video">-->
<!--      <div class="playbtn"><a data-fancybox="" href="{!! widget(8)->extra_field_2 !!}"><span></span></a></div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!-- Video End -->

<!-- Gallery Start -->
@if(null!==(module(4)))
<div class="gallery-wrap " style="display:none;">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="gallery_box">
          <div class="edit_option align_left blck_color">
            @if(Auth::guard('admin')->user())
            <a target="_blank" href="{{route('admin.modules.data',moduleSlug(9)->slug)}}"><i class="fas fa-edit"></i></a>
            @endif
          </div>
          <div class="gallery_left">
            <div class="title">
              <h1>{!! widget(9)->extra_field_1 !!}</h1>
            </div>
            <p>{!! widget(9)->description !!}</p>
            <div class="readmore"><a href="https://dgvrohtak.com/kids_college/gallery">{{__('View All Gallery')}}</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row">
            <?php $i=0; ?>
          @foreach(module(4) as $gallery)
          <?php  if($i==6) break;?>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="{{asset('images/thumb/'.$gallery->image)}}" alt="{{$gallery->title}}" style=" border-radius: 12px;    height: 170px;">
              <div class="portfolio-overley">
                <div class="content"> <a href="{{asset('images/'.$gallery->image)}}" class="fancybox image-link" data-fancybox="images" title="{{$gallery->title}}"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <?php $i++;   ?>
          @endforeach
          
        </div>
      </div>
    </div>
  </div>
</div>
@endif
<!-- Gallery End --> 
@if(null!==(module(5)))
<!-- Testimonials Start -->
<div class="testimonials-wrap " id="testimonial-section">
  <div class="container">
    <div class="edit_option blck_color">
     @if(Auth::guard('admin')->user())
        <a target="_blank" href="{{route('admin.modules.data',moduleSlug(5)->slug)}}"><i class="fas fa-edit"></i></a>
      @endif
    </div>
    <div class="title">
      <p>{!! widget(10)->extra_field_1 !!}</p>
      <h1> {!! widget(10)->extra_field_2 !!} </h1>
    </div>
    <ul class="owl-carousel testimonials_list unorderList">
      @foreach(module(5) as $testimoinial)
      <li class="item">
        <div class="testimonials_sec" style="background-color:rgba(3,22,67,.9) !important;">
          <div class="client_box">
            <div class="clientImg"><img alt="" src="{{asset('images/thumb/'.$testimoinial->image)}}"></div>
            <ul class="unorderList starWrp">
              <?php if($testimoinial->extra_field_2 == 5){?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2 == 4){ ?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2 == 3){ ?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2==2){ ?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2==1){ ?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2==0){ ?>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php } ?>
            </ul>
          </div>
          {!!$testimoinial->description!!}
          <h3>{{$testimoinial->title}} <span>{{$testimoinial->extra_field_1}}</span></h3>
          <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
@endif
<!-- Testimonials End --> 

<div class="choice-wrap enroll-wrap" style="background: rgba(3,22,67,.9) !important;">
  <div class="container">
    <div class="edit_option">@if(Auth::guard('admin')->user())
              <a target="_blank" href="{{route('admin.widgets_data',widgetPage(11)->slug)}}#widget_11"><i class="fas fa-edit"></i></a>
              @endif</div>
    <div class="title">
      <h1>{{widget(11)->extra_field_1}}</h1>
    </div>
    <p>{!!widget(11)->description!!}</p>
    <div class="phonewrp"><img src="{{asset('images/'.widget(11)->extra_image_1)}}" alt=""><a href="tel:{{ widget(1)->extra_field_2 }}">{{ widget(1)->extra_field_2 }}</a></div>
  </div>
</div>

<!-- Teacher Start -->
@if(null!==(module(7)))
<section class="teachers-area-three teacher-wrap pt-100 pb-70  " id="teacher-section">
  <div class="container">
    <div class="edit_option blck_color">
      @if(Auth::guard('admin')->user())
        <a target="_blank" href="{{route('admin.modules.data',moduleSlug(7)->slug)}}"><i class="fas fa-edit"></i></a>
      @endif
    </div>
    <div class="title center_title">
      <h1>{{__('Our Teachers')}}</h1>
    </div>
    <div class="row">
      @foreach(module(7) as $teacher)
      <div class="col-lg-3 col-sm-6">
        <div class="single-teachers">
          <div class="teacherImg"> <img src="{{asset('images/thumb/'.$teacher->image)}}"  style="height: 315px; width: 100%;" alt="Image">
            <ul class="social-icons list-inline">
              <!-- social-icons -->
              <li class="social-facebook"> <a href="{{$teacher->extra_field_10}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
              <li class="social-twitter"> <a href="{{$teacher->extra_field_11}}"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
              <li class="social-linkedin"> <a href="{{$teacher->extra_field_12}}"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a> </li>
              <li class="social-googleplus"> <a href="{{$teacher->extra_field_13}}"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
            </ul>
          </div>
          <div class="teachers-content">
            <h3>{{$teacher->title}}</h3>
            <!--<div class="designation">{{$teacher->extra_field_1}}</div>-->
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

<!-- Teacher Start --> 

<!--Addmission Form Modal Code-->
<div class="modal fade" id="admissionFormModal" tabindex="-1" aria-labelledby="admissionFormModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content shadow-lg rounded-3">
      <div class="modal-header text-white" style="background-color:#003d69 !important;">
        <h5 class="modal-title" id="admissionFormModalLabel">Admission Form</h5>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('admission-form') }}">
        @csrf
        <!-- Child Information -->
          <h4 style="color:#003d69 !important;">Child Information</h4>
          <div class="row mt-3">
            <div class="col-md-6 mb-3">
              <label for="childName" class="form-label">Name of the Child</label>
              <input type="text" class="form-control border-primary" name="child_name" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="dob" class="form-label">Date of Birth</label>
              <input type="date" class="form-control border-primary" name="date_of_birth" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="admissionClass" class="form-label">Admission Seeking in Class</label>
              <input type="text" class="form-control border-primary" name="admission_seeking_class" id="admissionClass" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Gender</label>
              <select class="form-control border-primary" name="gender">
                <option>Select</option>
                <option>Boy</option>
                <option>Girl</option>
              </select>
            </div>
          </div>
          <div class="row">
              <div class="col-md-6 mb-3">
                <label for="prevSchool" class="form-label">Name of the Previous School</label>
                <input type="text" class="form-control border-primary" id="prevSchool" name="previous_school">
              </div>
          </div>
          
           <!-- Sibling Details -->
          <h4 class="mt-4" style="color:#003d69 !important;">Sibling Details</h4>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="siblingName" class="form-label">Sibling Name</label>
              <input type="text" class="form-control border-primary" name="sibling_name" id="siblingName">
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Brother/Sister</label>
              <select class="form-control border-primary" name="sibling_relation">
                <option>Select</option>
                <option>Brother</option>
                <option>Sister</option>
              </select>
            </div>
          </div>   
          <div class="row">   
             <div class="col-md-6 mb-3">
		     <label for="siblingAge" class="form-label">Sibling Age</label>
		    <input type="number" class="form-control border-primary" id="siblingAge" name="sibling_age">
             </div>
             <div class="col-md-6 mb-3">
		     <label for="siblingSchool" class="form-label">If Studying, Name of School</label>
		    <input type="text" class="form-control border-primary" id="siblingSchool" name="sibling_school">
             </div>
          </div>
          
          <!-- Parent Details -->
          <h4 class="mt-4" style="color:#003d69 !important;">Father's Details</h4>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="fatherName" class="form-label">Father's Name</label>
              <input type="text" class="form-control border-primary" id="fatherName" name="father_name" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="fatherQualifications" class="form-label">Qualifications</label>
              <input type="text" class="form-control border-primary" id="fatherQualifications" name="father_qualifications">
            </div>
          </div>
          <div class="row">
             <div class="col-md-6 mb-3">
              <label for="fatherMobile" class="form-label">Mobile</label>
              <input type="tel" class="form-control border-primary" id="fatherMobile" name="father_mobile" required>
             </div>
             <div class="col-md-6 mb-3">
              <label for="fatherOccupation" class="form-label">Occupation</label>
              <input type="text" class="form-control border-primary" id="fatherOccupation" name="father_occupation">
             </div>
          </div>
          
          <div class="row">
             <div class="col-md-6 mb-3">
                <label for="fatherDesignation" class="form-label">Designation</label>
                <input type="text" class="form-control border-primary" id="fatherDesignation" name="father_designation">
             </div>
             <div class="col-md-6 mb-3">
                <label for="fatherIncome" class="form-label">Annual Income</label>
            	<input type="number" class="form-control border-primary" id="fatherIncome" name="father_annual_income">
             </div>
          </div>
          
           <!-- Mother's Details -->
          <h4 class="mt-4" style="color:#003d69 !important;">Mother's Details</h4>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="mothername" class="form-label">Mother's Name</label>
              <input type="text" class="form-control border-primary" id="mothername" name="mother_name" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="motherQualifications" class="form-label">Qualifications</label>
              <input type="text" class="form-control border-primary" id="motherQualifications" name="mother_qualifications">
            </div>
          </div>
          
          <div class="row">
             <div class="col-md-6 mb-3">
              <label for="motherMobile" class="form-label">Mobile</label>
              <input type="tel" class="form-control border-primary" id="motherMobile" name="mother_mobile" required>
             </div>
             <div class="col-md-6 mb-3">
              <label for="motherOccupation" class="form-label">Occupation</label>
              <input type="text" class="form-control border-primary" id="motherOccupation" name="mother_occupation">
             </div>
          </div>
          
          <div class="row">
             <div class="col-md-6 mb-3">
                <label for="motherDesignation" class="form-label">Designation</label>
                <input type="text" class="form-control border-primary" id="motherDesignation" name="mother_designation">
             </div>
             <div class="col-md-6 mb-3">
                <label for="motherIncome" class="form-label">Annual Income</label>
            	<input type="number" class="form-control border-primary" id="motherIncome" name="mother_annual_income">
             </div>
          </div>
          <div class="row">
             <div class="col-md-12 mb-3">
                <label for="motherDesignation" class="form-label">Address</label>
                <textarea class="form-control border-primary" row="2" style="height:86px !important;" name="address"></textarea>
             </div>
          </div>
          
          <!-- Grandparents & Transport Section -->
<h4 class="mt-4" style="color:#003d69 !important;">Grandparents & Transport</h4>
<div class="row p-3">
    <div class="col-md-5">
        <label class="form-label"><b>Do the grandparents of the child:</b></label>
    </div>
    <div class="col-md-4">
        <div class="form-check">
            <input class="form-check-input border-primary custom-checkbox" type="checkbox" name="grandparents_reside_with_you[]" value="Do not reside with you" id="doNotReside">
            <label class="form-check-label" for="doNotReside" style="color:#003d69 !important;">Do not reside with you</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input border-primary custom-checkbox" type="checkbox" name="grandparents_reside_with_you[]" value="Reside with you" id="resideWithYou">
            <label class="form-check-label" for="resideWithYou" style="color:#003d69 !important;">Reside with you</label>
        </div>
    </div>
</div>

<!-- Occupation of Grandparents -->
<div class=" p-3 rounded shadow-sm" style="background-color: #f9f9f9;">
    <label class="form-label" style="color: #5a5a5a;"><b>Occupation of grandparents:</b></label>
    <div class="row">
        <!-- Doing business -->
        <div class="col-md-4 mb-2">
            <div class="form-check form-check-custom">
                <input class="form-check-input custom-checkbox" type="checkbox" name="grandparents_occupation[]" value="Doing business" id="doingBusiness">
                <label class="form-check-label" for="doingBusiness" style="color:#003d69 !important;">Doing business</label>
            </div>
        </div>

        <!-- Landlord -->
        <div class="col-md-4 mb-2">
            <div class="form-check form-check-custom">
                <input class="form-check-input custom-checkbox" type="checkbox" name="grandparents_occupation[]" value="Landlord" id="landLord">
                <label class="form-check-label" for="landLord" style="color:#003d69 !important;">Landlord</label>
            </div>
        </div>

        <!-- Retired from govt job -->
        <div class="col-md-4 mb-2">
            <div class="form-check form-check-custom">
                <input class="form-check-input custom-checkbox" type="checkbox" name="grandparents_occupation[]" value="Retired from govt job" id="retired">
                <label class="form-check-label" for="retired" style="color:#003d69 !important;">Retired from govt job</label>
            </div>
        </div>

        <!-- Other -->
        <div class="col-md-4 mb-2">
            <div class="form-check form-check-custom">
                <input class="form-check-input custom-checkbox" type="checkbox" name="grandparents_occupation[]" value="Other" id="other">
                <label class="form-check-label" for="other" style="color:#003d69 !important;">Other</label>
            </div>
        </div>
    </div>
</div>

<!-- Child Transport -->
<div class=" p-3 rounded shadow-sm" style="background-color: #f9f9f9;">
    <label class="form-label" style="color: #5a5a5a;"><b>Whether the child will use:</b></label>
    <div class="row">
        <!-- School transport -->
        <div class="col-md-4 mb-2">
            <div class="form-check">
                <input class="form-check-input custom-checkbox" type="checkbox" name="child_transport[]" value="School transport" id="schoolTransport">
                <label class="form-check-label" for="schoolTransport" style="color:#003d69 !important;">School transport</label>
            </div>
        </div>

        <!-- Self transport -->
        <div class="col-md-4 mb-2">
            <div class="form-check">
                <input class="form-check-input custom-checkbox" type="checkbox" name="child_transport[]" value="Self transport" id="selfTransport">
                <label class="form-check-label" for="selfTransport" style="color:#003d69 !important;">Self transport</label>
            </div>
        </div>
    </div>
</div>

<!-- Personal Transport -->
<div class="p-3 rounded shadow-sm" style="background-color: #f9f9f9;">
    <label class="form-label" style="color: #5a5a5a;"><b>In case of personal transport, which vehicle do you use:</b></label>
    <div class="row">
        <!-- Car -->
        <div class="col-md-4 mb-2">
            <div class="form-check">
                <input class="form-check-input custom-checkbox" type="checkbox" name="personal_transport[]" value="Car" id="car">
                <label class="form-check-label" for="car" style="color:#003d69 !important;">Car</label>
            </div>
        </div>

        <!-- Two-wheeler -->
        <div class="col-md-4 mb-2">
            <div class="form-check">
                <input class="form-check-input custom-checkbox" type="checkbox" name="personal_transport[]" value="Two-wheeler" id="twoWheeler">
                <label class="form-check-label" for="twoWheeler" style="color:#003d69 !important;">Two-wheeler</label>
            </div>
        </div>
    </div>
</div>


<!-- What Attracted You to Kiddies College -->
<div class="p-3 rounded shadow-sm" style="background-color: #f9f9f9;">
    <label class="form-label" style="color: #5a5a5a;"><b>What attracted you to come to Kiddies College:</b></label>
    <div class="row">
        <!-- The parents -->
        <div class="col-md-4">
            <div class="form-check form-check-custom">
                <input class="form-check-input custom-checkbox" type="checkbox" name="attraction[]" value="The parents" id="parents">
                <label class="form-check-label" for="parents" style="color:#003d69 !important;">The parents</label>
            </div>
        </div>
        <!-- Pamphlets -->
        <div class="col-md-4">
            <div class="form-check form-check-custom">
                <input class="form-check-input custom-checkbox" type="checkbox" name="attraction[]" value="Pamphlets" id="pamphlets">
                <label class="form-check-label" for="pamphlets" style="color:#003d69 !important;">Pamphlets</label>
            </div>
        </div>
        <!-- Building -->
        <div class="col-md-4">
            <div class="form-check form-check-custom">
                <input class="form-check-input custom-checkbox" type="checkbox" name="attraction[]" value="By seeing the building" id="building">
                <label class="form-check-label" for="building" style="color:#003d69 !important;">By seeing the building</label>
            </div>
        </div>
        <!-- Other -->
        <div class="col-md-4">
            <div class="form-check form-check-custom">
                <input class="form-check-input custom-checkbox" type="checkbox" name="attraction[]" value="Other" id="otherAttraction">
                <label class="form-check-label" for="otherAttraction" style="color:#003d69 !important;">Other</label>
            </div>
        </div>
    </div>
</div>

<!-- Questions for School Management -->
<div class="row mt-4">
    <div class="col-md-12">
        <p style="font-weight: bold; color: #003d69;">Three questions you would like to ask from school management regarding the education / development of your child.</p>
    </div>
</div>

         <!-- Questions -->
          <h4 class="mt-4" style="color:#003d69 !important;">Questions for the School</h4>
          <div class="row">
            <div class="col-md-4">
              <div class="mb-3">
                <label for="question1" class="form-label">Question 1</label>
                <input type="text" class="form-control border-primary" id="question1" name="question1" placeholder="Enter your first question">
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label for="question2" class="form-label">Question 2</label>
                <input type="text" class="form-control border-primary" id="question2" name="question2" placeholder="Enter your second question">
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label for="question3" class="form-label">Question 3</label>
                <input type="text" class="form-control border-primary" id="question3" name="question3" placeholder="Enter your third question">
              </div>
            </div>
          </div>

          <div class="text-center mt-4">
            <button type="submit" class="btn btn-lg" style="background-color:#003d69 !important; color:white;" ><b>Submit Application</b></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--Admission Form Modal Code End-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script>
    document. getElementById("teacher-section"). remove();
     document. getElementById("course-section"). remove();
     document. getElementById("testimonial-section"). remove();
     document.addEventListener("DOMContentLoaded", () => {
        const newsContainer = document.querySelector(".news-container");
        const newsList = document.querySelector(".news-list");
        newsContainer.addEventListener("touchstart", () => {
            newsList.style.animationPlayState = "paused";
        });
        newsContainer.addEventListener("touchend", () => {
            newsList.style.animationPlayState = "running";
        });
    });
</script>
@endsection
