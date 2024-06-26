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
<div class="innerHeading-wrap">
  <div class="container">
    <h1>{{__('Gallery')}}</h1>
  </div>
</div>


@if(null!==(module(4)))
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
<!-- Inner Heading End --> 
<div class="innerContent-wrap">
  <div class="container">
    <div class="cont_info ">
      <div class="row">
       
      </div>
    </div>
    
  </div>
</div>
@endsection

