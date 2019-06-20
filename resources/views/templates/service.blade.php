@extends('index')
@section('content')
<div class="page-banner">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="breadcrumb-area">
                      <h2>Dịch vụ</h2>
                      
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Page Banner End -->
<!-- Page Banner End -->
<!-- service Start-->
<div class="service-body bg-secvice-color service-page">
   <!-- My service Start-->
   <div class="hotel-service-2" id="our-service">
      <div class="container">
         <div class="main-title">
            <h1>Dịch vụ của chúng tôi</h1>
            <p>Chạm đến niềm hạnh phúc thực sự ở mọi giác quan của khách hàng!</p>
         </div>
         <div class="row mgn-btm">
            @foreach($slogans as $slogan)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="content">
                  <p><img src="{{asset('upload/hinhanh/'.$slogan['photo'])}}" alt=""></p>
                  <h4>{{$slogan['name_'.$lang]}}</h4>
                  <p>{!! $slogan['content_'.$lang] !!}</p>
               </div>
            </div>
            @endforeach
         </div>
         <!-- <a href="{{url('dich-vu')}}" class="btn btn-fill">{{trans('label.readmore')}}</a> -->
      </div>
   </div>
   <!-- My service End-->
</div>
<!-- Service End-->
<!-- Service box Start-->
@foreach($data as $k=>$item)
<div class="service-box clearfix">
   @if($k%2 == 0)
   <div class="col-lg-5 col-md-6 col-sm-12 item-photo">
      <img src="{{asset('upload/news/'.$item->photo)}}" alt="SET CHOCOLATE FONDUE">
   </div>   
   <div class="col-lg-7 col-md-6 col-sm-12 details">
      <h5>{{trans('label.service')}}</h5>
      <h1>{{$item['name_'.$lang]}}</h1>
      <p>
         {!! $item['mota_'.$lang] !!}
      </p>
      <a href="{{url('dich-vu/'.$item->alias_vi.'.html')}}" class="btn btn-fill btn-md">{{trans('label.detail')}}</a>
   </div>
   @else
   <div class="col-lg-7 col-md-6 col-sm-12 details">
      <h5>{{trans('label.service')}}</h5>
      <h1>{{$item['name_'.$lang]}}</h1>
      <p>
         {!! $item['mota_'.$lang] !!}
      </p>
      <a href="{{url('dich-vu/'.$item->alias_vi.'.html')}}" class="btn btn-fill btn-md">{{trans('label.detail')}}</a>
   </div>
   <div class="col-lg-5 col-md-6 col-sm-12 item-photo">
      <img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item['name_'.$lang]}}">
   </div>
   @endif
</div>
@endforeach

@endsection