@extends('layouts.app')

@section('content')

<style>
    p {
    text-align: justify!important;
    font-size: 14px;
    line-height: 26px;
    color: #000;
}
.custom-img {
    height: 550px;   /* Set the desired height */
    object-fit: cover; /* This will help to maintain the aspect ratio */
}
</style>
<!-- Inner Heading Start -->
<!-- Inner Heading Start -->
<div class="innerHeading-wrap" style="background-color: rgba(3, 22, 67, .9) !important; background:none;">
  <div class="container">
    <h1>{{$cms->title}}</h1>
  </div>
</div>
<!-- About Start -->
<?php $class="12"; if($cms->image!='' && null!==($cms->image)){
  $class = '5';
} ?>
@if($cms->slug == 'about-us')
<div class="about-wrapp" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="about_boxx">
              <!--<div class="title">-->
              <!--  <h1>{{$cms->title}}</h1>-->
              <!--</div>-->
              <p>{!!$cms->description!!}</p>
              
            </div>
          </div>
          <!--@if($cms->image!='' && null!==($cms->image))-->
          <!--<div class="col-lg-7">-->
          <!--  <div class="aboutImg"><img src="{{asset('images/'.$cms->image)}}" alt=""></div>-->
          <!--</div>-->
          <!--@endif-->
        </div>
      </div>
  <div class="container">
      <div class="row">
        @if($cms->image!='' && null!==($cms->image))
        <div class="col-lg-3">
          <div class="aboutImg"><img src="{{asset('images/deepak-sir.jpeg')}}" alt="" style="max-width:95%;"></div>
        </div>
        @endif
        <div class="col-lg-9">
          <div class="about_box">
            <div class="title">
              <h2>Founder Director</h2> 
              <h5>Shri Deepak Kumar Sharma</h5>
            </div>
            <p>D.G.V. Institutions are organised to give its students new thoughts, 
              new visions, the right philosophy of life with the ability of self 
              examinations, self evaluations and appraisal. It shall be institutions’
               endeavour to discover optimum percentage of the mental faculties  of its 
               students to equip them with objective, analytical outlook for their best 
               adjustment in the ever-changing environment with the ultimate aim to 
               develop the students into ‘self actualized’ human beings.</p>
          </div>
        </div>
      </div>
    </div>
  <div class="container">
    <div class="row">
      @if($cms->image!='' && null!==($cms->image))
      <div class="col-lg-3">
        <div class="aboutImg"><img src="{{asset('images/IMG-20240509-WA0012.jpg')}}" alt="" style="max-width:95%;"></div>
      </div>
      @endif
      <div class="col-lg-9">
        <div class="about_box">
          <div class="title">
            <h2>Managing Director</h2> 
            <h5>Greatal Sharma</h5>
          </div>
          <p>At D.G.V., our unwavering focus on providing the best possible care and support to our students is reflected in our motto, 
          "To develop Brilliant Brains." We believe in creating a community of progressive, lifelong learners who understand that 
          learning is not just a means to achieve academic goals but a tool for all-inclusive development. We are confident in our 
          ability to shape the minds of future leaders and innovators with this vision, and we take immense pride in our commitment 
          to putting our students at the centre of everything we do.</p>
        </div>
      </div>
    </div>
  </div>  
  <div class="container">
      <div class="row">
        @if($cms->image!='' && null!==($cms->image))
        <div class="col-lg-3">
          <div class="aboutImg"><img src="{{asset('images/savitasharma.jpeg')}}" alt="" style="max-width:95%;"></div>
        </div>
        @endif
        <div class="col-lg-9">
          <div class="about_box">
            <div class="title">
              <h2>Founder Principal</h2> 
              <h5>Dr. Savita Sharma</h5>
            </div>
            <p>Dr Savita Sharma, the child - centric Principal of D.G.V. Sr. Sec. Public School, Rohtak. 
              She is an M.Ed. and Doctrate in Psychology. She has completed many training programs 
              organized by reputed organizations based on Excellence in Education, Leadership Skills, 
              Life Skills, Strategies for school leaders etc. She is also a trained CBSE and HBSE 
              resource person and has conducted many workshops in different schools. She also has 
              expertise in Hypnotherapy, Pranic Healing, Parenting Coach, Relationship Councelling 
              and is a trained Career Counselor. She is a motivational trainer for both students and 
              teachers. She believes that teaching is a profession that needs to be taken up by choice 
              to guide a generation of aspiring students. She has left a lasting impression on the 
              minds of many students and teachers. She believes in igniting and channelising young 
              minds into achieving brilliance through active learning imparted by a team of dedicated 
              teachers.</p>
              <p>An educationist and an extremely progressive personality, she endeavours to take the
                 school to even greater heights.</p>
          </div>
        </div>
      </div>
    </div>
  <div class="container">
    <div class="row">
      @if($cms->image!='' && null!==($cms->image))
      <div class="col-lg-3">
        <div class="aboutImg"><img src="{{asset('images/SanchiSharma.jpg')}}" alt="" style="max-width:95%;"></div>
      </div>
      @endif
      <div class="col-lg-9">
        <div class="about_box">
          <div class="title">
            <h2>Joint Director </h2> 
            <h5>Sanchi Sharma</h5>
          </div>
          <p>Our Core Aspiration is to provide an Educational Excellence, in that every 
            student makes a positive difference during the time with us. In expecting 
            Excellence we ensure that children enjoy school in a happy, safe and secure 
            atmosphere designed to fulfill their potential. We also strive to provide a 
            caring, supportive and challenging environment to the children, in which they 
            can grow and flourish to the esteemed heights.</p>
            <p>I strongly believe that true education should instill knowledge, 
              creativity, tradition and Culture among the children and we Directors 
              along with faculties work together to motivate the children to perform 
              well in every walk of their journey towards noble citizens of tomorrow.</p>
        </div>
      </div>
    </div>
  </div>  
  <div class="container">
    <div class="row">
      @if($cms->image!='' && null!==($cms->image))
      <div class="col-lg-3">
        <div class="aboutImg"><img src="{{asset('images/ShresthaSharma.jpeg')}}" alt="" style="max-width:95%;"></div>
      </div>
      @endif
      <div class="col-lg-9">
        <div class="about_box">
          <div class="title">
            <h2>Joint Director </h2> 
            <h5>Shrestha Sharma</h5>
          </div>
          <p>
          We here at D.G.V. Public School, impart an education that creates an environment 
          which enables children to recognize and explore their own potential, pursue 
          academic excellence and become lifelong learners.
          </p>
          <p>We aim to empower our students to grow as individuals with strong open discerning
             minds with an international outlook, preparing them to excel in this world of 
             challenges.</p>
          <p>
          D.G.V. is one of the foremost centres of learning. It has top-rated facilities
           and has been consistently delivering outstanding results and student 
           success stories. An extraordinary experience awaits your child at D.G.V.
          </p>   
        </div>
      </div>
    </div>
  </div>   
</div>
@endif
@if($cms->slug == 'news')
    <div class="news-wrap mt-2" id="news">
        <div class="container">
            <div class="row">
              <div class="col-lg-12 col-sm-12">
                <div class="about_boxx">
                  <!--<div class="title">-->
                  <!--  <h1>{{$cms->title}}</h1>-->
                  <!--</div>-->
                  <p>{!!$cms->description!!}</p>
                  
                </div>
              </div>
            </div>
          </div>
        <div class="container">
          @if(null!==(module(4)))
            <div class="gallery-wrap">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="row">
                      @foreach(module(4) as $gallery)
                      @if(strtolower(str_replace(' ', '-', $gallery->title)) == 'news')
                      <div class="col-lg-3 col-md-6">
                        <div class="galleryImg"><img src="{{asset('images/thumb/'.$gallery->image)}}" alt="{{$gallery->title}}" style=" border-radius: 12px;    height: 170px;">
                          <div class="portfolio-overley">
                            <div class="content"> <a href="{{asset('images/'.$gallery->image)}}" class="fancybox image-link" data-fancybox="images" title="{{$gallery->title}}"><i class="fas fa-search-plus"></i></a> </div>
                          </div>
                        </div>
                      </div>
                      @endif
                      @endforeach
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
          <div class="row mt-2 mb-2">
              <div class="col-lg-6 col-sm-12" style="border: 5px solid #232936;">
                  <h3>Recent News</h3>
                  <div class="row">
                          <div class="col-lg-12 col-sm-12">
                              <div class="about_box">
                                <div class="title">
                                  <h5>Blood Donation Camp</h5> 
                                </div>
                                <p>On May 18, 2024, we hosted a Blood Donation Camp to encourage the spirit of giving and supporting the 
                                healthcare needs of our community. We are grateful for the participation and contributions of everyone involved.</p>
                              </div>
                          </div>
                        <div class="col-lg-12 col-sm-12">
                          <div class="about_box">
                            <div class="title">
                              <h5>Plant for Planet Drive</h5> 
                            </div>
                            <p>In celebration of our Director Sir's birthday, we held a Plant for Planet Drive on June 27, 2024. 
                            This initiative promoted environmental awareness and sustainability among students and staff, 
                            with many participating in the planting activities.</p>
                          </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                          <div class="about_box">
                            <div class="title">
                              <h5>Talent Hunt for Students 2</h5> 
                            </div>
                            <p>During the first week of March, we conducted the second installment of our Talent Hunt Series. 
                            This event provided students with a platform to showcase their unique skills and talents, 
                            and we were impressed by the diverse range of abilities displayed.</p>
                          </div>
                        </div>
                        
                        <div class="col-lg-12 col-sm-12">
                          <div class="about_box">
                            <div class="title">
                              <h5>Physical Training Workshop</h5> 
                            </div>
                            <p>On April 28, 2024, we organized a Physical Training Workshop to promote health 
                            and fitness among our students. The workshop offered essential training and 
                            exercise routines, encouraging a healthy lifestyle.</p>
                          </div>
                        </div>
                  </div>
              </div>
              <div class="col-lg-6 col-sm-12" style="border: 5px solid #232936;">
                  <h3>Upcoming News</h3>
                    <div class="col-lg-12 col-sm-12">
                      <div class="about_box">
                        <div class="title">
                          <h5>Positive Parenting Program (P3) by Dr. Savita Sharma</h5> 
                        </div>
                        <p>In the first week of August, Dr. Savita Sharma will lead the Positive Parenting Program. 
                        This session will provide valuable insights and techniques for parents to create a nurturing 
                        and supportive home environment for their children.</p>
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                      <div class="about_box">
                        <div class="title">
                          <h5>Jalsa Cultural Fest</h5> 
                        </div>
                        <p>Our vibrant Jalsa Cultural Fest is scheduled for the second week of October. 
                        This event will showcase the diverse talents and cultural heritage of our students 
                        through various performances and activities.</p>
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                      <div class="about_box">
                        <div class="title">
                          <h5> Talent Hunt Series</h5> 
                        </div>
                        <p>Starting the new year, our Talent Hunt Series will take place in the first week of 
                        January. This series offers a platform for students to display their unique 
                        skills and talents.</p>
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                      <div class="about_box">
                        <div class="title">
                          <h5> Annual Cultural Events</h5> 
                        </div>
                        <p> In the first week of November, we will hold our Annual Cultural Events.
                        Students will have the opportunity to participate in and enjoy a range of cultural 
                        activities and performances.</p>
                      </div>
                    </div>
                     <div class="col-lg-12 col-sm-12">
                      <div class="about_box">
                        <div class="title">
                          <h5> Annual Sports Fest</h5> 
                        </div>
                        <p>Ending the year on a high note, our Annual Sports Fest will be held in 
                        the last week of December. This event will encourage students to engage in 
                        physical activities and sportsmanship.</p>
                      </div>
                    </div>
              </div>
          </div>
        </div>
    </div>    
@endif
<!-- About End --> 
@if($cms->slug == 'events')
    <div class="container mt-2 mb-2">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <h4><strong>BLOOD DONATION CAMP</strong></h4>
                <p>On May 18, 2024, our school hosted a successful Blood Donation Camp,
                demonstrating our commitment to community service and humanitarian efforts.
                Organized in collaboration with a local blood bank, the event saw enthusiastic
                participation from students, parents, staff, and local community members. The
                school’s auditorium was set up with donation stations, where certified medical
                professionals ensured a smooth and safe donation process. Educational sessions on
                the importance of blood donation and its life-saving impact were conducted, inspiring
                many first-time donors to contribute. The camp not only collected a significant
                number of blood units but also instilled a profound sense of social responsibility and
                empathy in our school community</p>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6">
                <div id="carouselExampleControls_first" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="{{asset('images/blood-donation/1.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('images/blood-donation/2.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('images/blood-donation/3.jpg')}}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('images/blood-donation/4.jpg')}}" alt="Forth slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('images/blood-donation/5.jpg')}}" alt="Fivth slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('images/blood-donation/6.jpg')}}" alt="Sixth slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls_first" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls_first" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <h4><strong>BAISAKHI CELEBRATION</strong></h4>
                <p>Our Baisakhi celebration included an exciting visit to a local farm, providing our
                students a hands-on learning experience about this vibrant festival. As they explored
                the lush fields, students learned about the significance of Baisakhi in marking the
                harvest season and its importance in Punjabi culture. The trip featured interactive
                activities such as traditional dance performances, participation in the harvest
                process, and a tasting session of fresh farm produce. This enriching excursion
                deepened the students' understanding of agricultural practices and fostered a
                greater appreciation for cultural traditions.</p>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6">
                <div id="carouselExampleControls_second" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="{{asset('images/baisakhi/1.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('images/baisakhi/2.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('images/baisakhi/3.jpg')}}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('images/baisakhi/4.jpg')}}" alt="Forth slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls_second" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls_second" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <h4><strong>HOLI CELEBRATION</strong></h4>
                <p>Holi, the vibrant festival of colors, was joyously celebrated at our school, bringing
                together students, teachers, and staff in a spirit of unity and festivity. The day began
                with a special assembly where the significance of Holi was shared, emphasizing its themes
                of love, friendship, and the triumph of good over evil. The school grounds
                became a lively canvas as everyone indulged in playful color throwing, traditional
                music, and dance performances. Special arrangements ensured a safe and
                eco-friendly celebration, with organic colors and ample hydration stations. The event
                fostered a sense of community and cultural appreciation, leaving everyone with
                cherished memories and colorful smiles.</p>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6">
                <div id="carouselExampleControls_third" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="{{asset('images/holi/1.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('images/holi/2.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('images/holi/3.jpg')}}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('images/holi/4.jpg')}}" alt="Forth slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls_third" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls_third" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
    </div>
@endif
@if($cms->slug == 'rule-and-regulations')
    <div class="container" style="margin-top: 36px; margin-bottom: 27px;">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12">
              <img src="{{ asset('download/Rules-Regulations.png') }}" alt="">
          </div>
      </div>
  </div>
@endif
@if($cms->slug == 'syllabus-curriculur')
    <div class="container mt-2 mb-2">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <!--<h4><strong>SYLLABUS AND CURRICULUM</strong></h4>-->
                <p style="font-size: 17px;">As a CBSE-affiliated school, we adhere to the NCERT syllabus, which
                    includes the CBSE curriculum, assessment scheme, and marking system. Our
                    curriculum is carefully designed to ensure students' learning and promote their
                    overall development. We recognize each student's abilities and encourage
                    them to become more aware of the world around them. We focus on fostering
                    logical thinking, positive attitudes, and aesthetic appreciation through a
                    comprehensive school curriculum.</p>
                <p style="font-size: 17px;">
                    Our teaching methodology is highly effective, incorporating well-prepared
                    lesson plans, teaching aids, concept-based activities, and the use of
                    audio-visual tools and storytelling. We prioritize student engagement in the
                    learning process to help them reach their full potential. We also provide the
                    best resources available to make learning efficient and meaningful.
                </p>
                <p style="font-size: 17px;">
                    Our experienced mentors emphasize a concept-based approach to teaching,
                    ensuring that students have a clear understanding of the material. We also
                    place a strong emphasis on skill development, focusing on communication,
                    writing, artistic, IT, and sports skills. Various activities, such as poem
                    recitations, ASL, speeches, debates, declamations, slogan writing, essay
                    writing, calligraphy, dance, drama, special day celebrations, poster making,
                    drawing, and more, are organized to enhance these skills.
                </p>
                <p style="font-size: 17px;">
                    In addition, we offer regular robotics lab classes to spark students' interest in
                    IT, and we organize various sports matches and tournaments to develop their
                    athletic abilities. All skill development activities are scheduled in the school
                    calendar.
                </p>
                <p style="font-size: 17px;">
                    We follow a continuous and systematic assessment plan that focuses on the
                    comprehensive evaluation of students. Our assessment methods go beyond
                    traditional paper-and-pen tests, aiming to eliminate exam-related anxiety. We
                    assess students through quizzes, class presentations, ASL, project work,
                    group activities, and more.
                </p>
                <p style="font-size: 17px;">
                    To ensure the effectiveness of our curriculum, our experienced administrators
                    regularly monitor and manage the teaching and learning process, ensuring
                    that we successfully achieve our goals.
                </p>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12">
                 <h4 class="text-center"><strong>CO-CURRICULAR ACTIVITIES</strong></h4>
                 <p style="font-size: 17px;">
                     The primary goal of education at D.G.V. is to uplift the human spirit. To
                    achieve this, a diverse range of activities is designed to explore and assess
                    each student's individuality. Continuous efforts are made to help each pupil
                    reach their fullest potential. D.G.V. is a space where we cultivate the next
                    generation of citizens who will lead the nation. D.G.V. reflects the rich heritage
                    of India's diverse culture, and students are encouraged to develop obedience,
                    tolerance, and hidden talents. All activities are conducted at the inter-house
                    level, allowing students to hone their skills, adapt to changing times, and excel
                    in various co-curricular activities.
                 </p>
            </div>
        </div>
    </div>    
@endif
@if($cms->slug == 'admission-process')
    <div class="container" style="margin-top: 36px; margin-bottom: 27px;">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12">
              <img src="{{ asset('download/Admission-Process.png') }}" alt="">
          </div>
      </div>
  </div>
@endif

@if($cms->slug == 'clubs')
    <div class="container" style="margin-top: 36px; margin-bottom: 27px;">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12">
              <img src="{{ asset('images/facility/clubs.png') }}" alt="">
          </div>
      </div>
  </div>
@endif

@if($cms->slug == 'sports')
    <div class="container" style="margin-top: 36px; margin-bottom: 27px;">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12">
              <img src="{{ asset('images/facility/sports.png') }}" alt="">
          </div>
      </div>
  </div>
@endif

@if($cms->slug == 'labs')
    <div class="container" style="margin-top: 36px; margin-bottom: 27px;">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12">
              <img src="{{ asset('images/facility/labs.png') }}" alt="">
          </div>
      </div>
  </div>
@endif

@if($cms->slug == 'rooms')
    <div class="container" style="margin-top: 36px; margin-bottom: 27px;">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12">
              <img src="{{ asset('images/facility/rooms.png') }}" alt="">
          </div>
      </div>
  </div>
@endif

@if($cms->slug == 'house')
    <div class="container" style="margin-top: 36px; margin-bottom: 27px;">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12">
              <img src="{{ asset('images/facility/house.png') }}" alt="">
          </div>
      </div>
  </div>
@endif

@if($cms->slug == 'alumni')
    <div class="container" style="margin-top: 36px; margin-bottom: 27px;">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12">
              <img src="{{asset('images/Alumni Details.png')}}" alt="">
          </div>
      </div>
  </div>
@endif

@if($cms->slug == 'achievements')
    <div class="container" style="margin-top: 36px; margin-bottom: 27px;">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12">
              <img src="{{asset('images/Result.jpg')}}" alt="">
          </div>
      </div>
  </div>
@endif

@if($cms->slug == 'faculty')
    <div class="container" style="margin-top: 36px; margin-bottom: 27px;">
      <div class="row">
          @if($cms->image!='' && null!==($cms->image))
          <div class="col-lg-12">
            <div class="aboutImg"><img src="{{asset('images/'.$cms->image)}}" alt=""></div>
          </div>
          @endif
          <div class="col-lg-12">
            <div class="about_boxx">
              <!--<div class="title">-->
              <!--  <h1>{{$cms->title}}</h1>-->
              <!--</div>-->
              <p>{!!$cms->description!!}</p>
              
            </div>
          </div>
      </div>
  </div>
@endif


@if($cms->slug == 'withdrawal-criteria')
    <div class="container" style="margin-top: 36px; margin-bottom: 27px;">
      <div class="row">
          @if($cms->image!='' && null!==($cms->image))
          <div class="col-lg-12">
            <div class="aboutImg"><img src="{{asset('images/'.$cms->image)}}" alt=""></div>
          </div>
          @endif
          <div class="col-lg-12">
            <div class="about_boxx">
              <!--<div class="title">-->
              <!--  <h1>{{$cms->title}}</h1>-->
              <!--</div>-->
              <!--<p>{!!$cms->description!!}</p>-->
              
            </div>
          </div>
      </div>
  </div>
@endif

@if($cms->slug == 'admission-form')
    <div class="container" style="margin-top: 36px; margin-bottom: 27px;">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <form method="post" action="https://dgvschool.com/schoo/submit-admission-form">
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
                  <h4 class="mt-4" style="color:#003d69 !important;">Father Details</h4>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="fatherName" class="form-label">Father Name</label>
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
                  
                   <!-- Mother Details -->
                  <h4 class="mt-4" style="color:#003d69 !important;">Mother Details</h4>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="mothername" class="form-label">Mother Name</label>
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
@endif
@endsection
