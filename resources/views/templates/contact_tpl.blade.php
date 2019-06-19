@extends('index')
@section('content')
<?php
$setting = \App\Setting::where('id', 1)->first()->toArray();

?>
<div class="page-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcrumb-area">
               <h2>Liên hệ</h2>
               <!--<p>Whether you're looking to sell or let your home or want to buy or rent a home, we really are the people for you to come to.</p>
                  <a href="/" class="btn btn-fill">Home</a>
                  <a href="/contact.html" class="btn btn-fill btn-default">Contact Us</a>-->
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Page Banner End -->
<!-- Banner End -->
<!-- Content Start -->
<!-- contact us body Start-->
<div class="contact-us-body">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
            <!-- Contact Form Start -->
            <div class="contact-form">
               <!-- Header-->
                <div class="header">
                  <h3>{{trans('label.send_message')}}</h3>
                </div>
                @if (session('message'))
                <div class="box-header">
                  <h4 class="box-title text-green alert-success">{{ session('message') }}</h4>
                </div>
                @endif
                <form action="{{route('postContact')}}" method="post" accept-charset="utf-8" class="contact-frm form-post-register">
                  {{ csrf_field() }}                  
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group fullname">
                            <input type="text" name="name" value="" placeholder="{{trans('label.hoten')}}"  class="form-control input-text">
                            @if ($errors->first('name')!='')
                                <span style="color: red">( {!! $errors->first('name'); !!})</span>
                            @endif
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group enter-email">                            
                           <input type="email" name="email" class="input-text" placeholder="{{trans('label.email')}}">
                            @if ($errors->first('email')!='')
                                <span style="color: red">( {!! $errors->first('email'); !!})</span>
                            @endif
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group number">                                                        
                           <input type="text" name="phone" class="input-text" placeholder="{{trans('label.phone')}}">
                           @if ($errors->first('phone')!='')
                                <span style="color: red">( {!! $errors->first('phone'); !!})</span>
                            @endif
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                        <div class="form-group message">                            
                           <textarea class="input-text" name="content" placeholder="{{trans('label.content')}}"></textarea>
                            @if ($errors->first('content')!='')
                                <span style="color: red">( {!! $errors->first('content'); !!})</span>
                            @endif
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group send-btn">
                           <button type="submit" class="btn-submit" id="btn-submit-form">{{trans('label.send')}}</button>
                        </div>
                     </div>
                  </div>
                </form>
            </div>
            <!-- Contact Form End -->
         </div>
         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <!-- Contact Details-->
            <div class="contact-details">
               <!-- Header-->
               <!-- <div class="header">
                  <h3>Thông tin chi tiết</h3>
                  <p>Bạn có vấn đề về việc đặt phòng trực tuyến liên hệ với chúng tôi theo thông tin bên dưới</p>
               </div> -->
               <!--  Contact-details-box-->
               <div class="media contact-details-box">
                  <div class="media-left">
                     <i class="fa fa-map-marker"></i>
                  </div>
                  <div class="media-body">
                     <h5>Address:</h5>
                     <p>{{$setting["address_".$lang]}}</p>
                  </div>
               </div>
               <!--  Contact-details-box-->
               <div class="media contact-details-box">
                  <div class="media-left">
                     <i class="fa fa-phone"></i>
                  </div>
                  <div class="media-body">
                     <h5>Hotline </h5>
                     <!--<p>
                        <a href="tel:0477-0477-8556-552">office: 0477 8556 552</a>
                        </p>-->
                     <p>
                        <a href="tel:+55-417-634-7071">Mobile: {{$setting["hotline"]}}</a>
                     </p>
                  </div>
               </div>
               <!--  Contact-details-box-->
               <div class="media contact-details-box">
                  <div class="media-left">
                     <i class="fa fa-envelope"></i>
                  </div>
                  <div class="media-body">
                     <h5>Email</h5>
                     <p>
                        <a href="mailto:{{$setting['email']}}">{{$setting["email"]}}</a>
                     </p>
                  </div>
               </div>
              
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
