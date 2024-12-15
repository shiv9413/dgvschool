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
        'Baisakhi',
        'Blood Donation',
        'Children Day',
        'Diwali',
        'Independence Day',
        'Janmashtami',
        'Olympiad',
        'Raising Awareness',
        'Teacher Day',
        'Trip to Mojoland',
        'Trip to Pratapgarh',
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
            <a href="{{ url('/category/' . strtolower(str_replace(' ', '-', $category))) }}">
                <div class="galleryImg text-center" style="border: 1px solid #ccc; border-radius: 12px;">
                <img src="https://dgvschool.com/school/public/images/dgv_background_1714248357.png" alt="https://dgvschool.com/school/public/images/dgv_background_1714248357.png" style="height: 170px;">
                <h5 style="margin-bottom: 2px; margin-top:2px;">{{ $category }}</h5>    
                </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

