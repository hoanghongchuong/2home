@extends('index')
@section('content')
<?php 
$setting = \App\Setting::where('id', 1)->first()->toArray();
?>
<!-- Banner End -->
<!-- Page Banner Start -->
<div class="page-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcrumb-area">
               <h2>{{trans('label.news')}}</h2>
               
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Page Banner End -->
<!-- Rooms List Start-->
<div class="rooms-list content-area">
    <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-8 col-xs-12">
            <div class="pdt-20">
               <!-- Blog Box Start -->
               @foreach($news['data'] as $item)
               <div class="thumbnail blog-box clearfix">
                  <img src="{{asset('upload/news/'.$item['photo'])}}" alt="{{$item['name_'.$lang]}}">
                  <!-- detail -->
                  <div class="caption detail">
                     <!-- Title -->
                     <h1 class="title">
                        <a href="{{url('tin-tuc/'.$item['alias_vi'].'.html')}}">{{$item['name_'.$lang]}}</a>
                     </h1>
                     <!-- Post Materials-->
                     <div class="post-materials">
                        <!-- paragraph -->
                        <p>
                           {!! $item['mota_'.$lang] !!}
                        </p>
                        <!-- Btn -->
                        <a href="{{url('tin-tuc/'.$item['alias_vi'].'.html')}}" class="btn btn-fill btn-md">{{trans('label.detail')}}</a>
                     </div>
                  </div>
               </div>
               <!-- Blog Box ENd -->
               @endforeach
               <div class="paginations">
                    {!! $data_paginate->links() !!}
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="sidebar">
               <!-- Popular Rooms Start -->
               <div class="Recent-news popular-rooms mgn-btm">
                  <h2>{{trans('label.room_apartment')}}</h2>
                  <div class="media">
                     <div class="media-left">
                        <a href="http://2home.vn/phong-can-ho/luxury-parkhill-apartment-2/176.html">
                        <img class="media-object" src="http://admin.2home.vn/upload/19024db11b286c5c5043f061600e69f0.JPG" alt="Luxury Parkhill Apartment 2">
                        </a>
                     </div>
                     <div class="media-body">
                        <h3><a href="http://2home.vn/phong-can-ho/luxury-parkhill-apartment-2/176.html">Luxury Parkhill Apartment 2</a></h3>
                        <p>Từ 1,250,000 VND/ngày</p>
                     </div>
                  </div>
                  <div class="media">
                     <div class="media-left">
                        <a href="http://2home.vn/phong-can-ho/vi-s-homestay-19-green-bay/175.html">
                        <img class="media-object" src="http://admin.2home.vn/upload/58c6481e03783ec6f74561455c250c8d.jpg" alt="Vi&#039;s Homestay 19 - Green Bay">
                        </a>
                     </div>
                     <div class="media-body">
                        <h3><a href="http://2home.vn/phong-can-ho/vi-s-homestay-19-green-bay/175.html">Vi&#039;s Homestay 19 - Green Bay</a></h3>
                        <p>Từ 850,000 VND/ngày</p>
                     </div>
                  </div>
                  <div class="media">
                     <div class="media-left">
                        <a href="http://2home.vn/phong-can-ho/luxury-metropolis-apartment-29/174.html">
                        <img class="media-object" src="http://admin.2home.vn/upload/efb218724cc551b1e8aadc05736f9a7b.JPG" alt="Luxury Metropolis Apartment 29">
                        </a>
                     </div>
                     <div class="media-body">
                        <h3><a href="http://2home.vn/phong-can-ho/luxury-metropolis-apartment-29/174.html">Luxury Metropolis Apartment 29</a></h3>
                        <p>Từ 2,500,000 VND/ngày</p>
                     </div>
                  </div>
                  <div class="media">
                     <div class="media-left">
                        <a href="http://2home.vn/phong-can-ho/luxury-metropolis-apartment-28/173.html">
                        <img class="media-object" src="http://admin.2home.vn/upload/219d285b681893918320fa84069017ff.JPG" alt="Luxury Metropolis Apartment 28">
                        </a>
                     </div>
                     <div class="media-body">
                        <h3><a href="http://2home.vn/phong-can-ho/luxury-metropolis-apartment-28/173.html">Luxury Metropolis Apartment 28</a></h3>
                        <p>Từ 2,250,000 VND/ngày</p>
                     </div>
                  </div>
                  <div class="media">
                     <div class="media-left">
                        <a href="http://2home.vn/phong-can-ho/amy-apartment-vinhomes-metropolis/172.html">
                        <img class="media-object" src="http://admin.2home.vn/upload/70383204fda2fdae5d4095da5fea47ac.jpg" alt="Amy Apartment - Vinhomes Metropolis">
                        </a>
                     </div>
                     <div class="media-body">
                        <h3><a href="http://2home.vn/phong-can-ho/amy-apartment-vinhomes-metropolis/172.html">Amy Apartment - Vinhomes Metropolis</a></h3>
                        <p>Từ 1,850,000 VND/ngày</p>
                     </div>
                  </div>
               </div>
               <!-- Recent News End -->
               <!-- Helping Center Start -->
               <div class="helping-Center mgn-btm">
                  <h2 class="title">{{ $lang =='vi' ? "Trợ giúp" : "Help" }}</h2>
                  <!-- <p>Chúng tôi rất vui khi giúp bạn!</p> -->
                  <ul class="contact-link">
                     <li>
                        <a href="#">
                        <i class="fa fa-map-marker"></i>
                        {{$setting["address_".$lang]}}
                        </a>
                     </li>
                     <li>
                        <a href="tel:{{$setting['hotline']}}">
                        <i class="fa fa-phone"></i>
                        {{$setting['hotline']}}
                        </a>
                     </li>
                     <li>
                        <a href="mailto:{{$setting['email']}}">
                        <i class="fa fa-envelope-o"></i>
                        {{$setting['email']}}
                        </a>
                     </li>
                  </ul>
               </div>
               <!-- Helping Center End -->
            </div>
         </div>
      </div>
    </div>
</div>
@endsection