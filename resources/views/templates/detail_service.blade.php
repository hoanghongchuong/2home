@extends('index')
@section('content')

<div class="blog-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2>{{trans('label.service')}}</h2>
         </div>
      </div>
   </div>
</div>
<!-- Blog Banner End -->
<!-- Banner End -->
<!-- Content Start -->
<div class="about-item">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="rooms-detail-slider simple-slider">
                   <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                      <div class="carousel-outer">
                         <!-- Wrapper for slides -->
                         <div class="carousel-inner">
                            @foreach($albums as $k=>$album)
                            <div class="item @if($k ==0)active @endif">
                               <img src="{{asset('upload/service/'.$album->photo)}}" class="thumb-preview" alt="">
                            </div>
                            @endforeach
                         </div>
                         <!-- Controls -->
                         <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                         <span class="slider-mover-left no-bg" aria-hidden="true">
                         <img src="{{asset('public/images/chevron-left.png')}}" alt="chevron-left">
                         </span>
                         <span class="sr-only">Previous</span>
                         </a>
                         <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                         <span class="slider-mover-right no-bg" aria-hidden="true">
                         <img src="{{asset('public/images/chevron-right.png')}}" alt="chevron-right">
                         </span>
                         <span class="sr-only">Next</span>
                         </a>
                      </div>
                   </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="text">
                   <h2>{{$data['name_'.$lang]}}</h2>
                   <div class="content">
                      {!! $data['content_'.$lang] !!}               
                   </div>
                </div>
            </div>
         <!-- About Item End -->
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="comments-thread clearfix">
            <h2 class="sub-title mrg-btm">Bình luận</h2>
            <div class="comment">
            <!-- CORRECT -->
                <div class="fb-comments" data-href="{{URL::current()}}" data-width="100%" data-numposts="5"></div>
            </div>
        </div>
    </div>
</div>
@endsection