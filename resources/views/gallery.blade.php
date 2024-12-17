@extends('layouts.app')
@push('css')

<style type="text/css">
  .error{
    color: red;
  }
</style>
@endpush
@section('content')
<!-- Inner Heading Start -->
<div class="innerHeading-wrap" style="background-color: rgba(3, 22, 67, .9) !important; background:none;">
  <div class="container">
    <h1>{{__('Gallery')}}</h1>
  </div>
</div>


@php
$categories = [
    [
        'name' => 'Baisakhi',
        'url' => 'https://dgvschool.com/school/public/images/IMG-20240415-WA0080_1732503777.jpg',
    ],
    [
        'name' => 'Blood Donation',
        'url' => 'https://dgvschool.com/school/public/images/IMG-20240520-WA0025_1732503846.jpg',
    ],
    [
        'name' => 'Children Day',
        'url' => 'https://dgvschool.com/school/public/images/IMG-20241114-WA0023_1732503987.jpg',
    ],
    [
        'name' => 'Diwali Celebration',
        'url' => 'https://dgvschool.com/school/public/images/IMG-20241029-WA0217_1732504273.jpg',
    ],
    [
        'name' => 'Independence Day',
        'url' => 'https://dgvschool.com/school/public/images/IMG-20240815-WA0152_1732504384.jpg',
    ],
    [
        'name' => 'Janmashtami',
        'url' => 'https://dgvschool.com/school/public/images/IMG-20240824-WA0108_1732504531.jpg',
    ],
    [
        'name' => 'Olympiad Achievement',
        'url' => 'https://dgvschool.com/school/public/images/IMG-20241024-WA0078_1732504926.jpg',
    ],
    [
        'name' => 'Raising Awareness',
        'url' => '',
    ],
    [
        'name' => 'Teacher Day',
        'url' => '',
    ],
    [
        'name' => 'Trip to Mojoland',
        'url' => '',
    ],
    [
        'name' => 'Trip to Pratapgarh',
        'url' => 'https://dgvschool.com/school/public/images/IMG-20230426-WA0111_1732505254.jpg',
    ],
];
@endphp
<!-- @if(null!==(module(4)))
<div class="gallery-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          @foreach(module(4) as $gallery)
          <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="{{asset('images/thumb/'.$gallery->image)}}" alt="{{$gallery->title}}" style=" border-radius: 12px;    height: 170px;">
              <div class="portfolio-overley">
                <div class="content"> <a href="{{asset('images/'.$gallery->image)}}" class="fancybox image-link" data-fancybox="images" title="{{$gallery->title}}"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
      </div>
    </div>
  </div>
</div>
@endif

<div class="innerContent-wrap">
  <div class="container">
    <div class="cont_info ">
      <div class="row">
       
      </div>
    </div>
    
  </div>
</div> -->

<div class="gallery-wrap">
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-lg-3 col-md-6 mb-4">
            <a href="{{ url('/gallery/' . strtolower(str_replace(' ', '-', $category['name']))) }}">
                <div class="galleryImg text-center" style="border: 1px solid #ccc; border-radius: 12px;">
                @if(!empty($category['url']))
                        <img src="{{ $category['url'] }}" alt="{{ $category['name'] }}" style="border-radius: 12px; height: 170px;">
                @else
                <img src="https://dgvschool.com/school/public/images/dgv_background_1714248357.png" alt="https://dgvschool.com/school/public/images/dgv_background_1714248357.png" style="height: 170px;">
                @endif
                <h5 style="margin-bottom: 2px; margin-top:2px;">{{ $category['name'] }}</h5>    
                </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

