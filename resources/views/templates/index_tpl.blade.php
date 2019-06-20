@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
?>
<div class="slider">
    <div id="carousel-id1" class="carousel slide" data-ride="carousel">                    
        <div class="carousel-inner">
            @foreach($sliders as $k=>$slider)
            <div class="item @if($k==0)active @endif">
                <img  alt="Third slide" src="{{asset('upload/hinhanh/'.@$slider['photo'])}}">
                <div class="container">
                    
                </div>
            </div>
            @endforeach
        </div>
        <a class="left carousel-control" href="#carousel-id1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<!-- Banner End-->
<div class="hotel-service-2" id="our-service">
    <div class="container">
        <div class="main-title">
            <h1>{{$lang =='vi' ? "Dịch vụ của chúng tôi" : "Service"}}</h1>
            <!-- <p>Chạm đến niềm hạnh phúc thực sự ở mọi giác quan của khách hàng!</p> -->
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
        <a href="{{url('dich-vu')}}" class="btn btn-fill">{{trans('label.docthem')}}</a>
    </div>
</div>    <!-- My service End-->
 <!-- Recent Rooms Start-->
<div class="favorite-rooms content-area clearfix">
    <div class="container">
        <div class="main-title">
            <h1>{{trans('label.roomhot')}}</h1>                
        </div>
        <div class="row">                                    
            @foreach($hotProducts as $hot)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <!-- Rooms Box Start-->
                <div class="thumbnail rooms-box clearfix">
                    <a href="{{url('phong/'.$hot['alias_vi'].'.html')}}">
                        <img src="{{asset('upload/product/'.$hot['photo'])}}" alt="{{$hot['name_'.$lang]}}">
                    </a>
                    <!-- detail -->
                    <div class="caption detail">
                        <!-- Header -->
                        <header class="clearfix">
                            <div class="pull-left">
                                <h5 class="title">
                                    <a href="{{url('phong/'.$hot['alias_vi'].'.html')}}">{{$hot['name_'.$lang]}}</a>
                                </h5>
                                <div class="custom-list">
                                    {!! $hot['mota_'.$lang] !!}
                                    
                                </div>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                @if($lang =='vi')
                                <span>{{number_format($hot['price_vi'])}}đ</span>
                                @else
                                <span>{{number_format($hot['price_en'])}}$</span>
                                @endif
                            </div>
                        </header>
                        <!-- Paragraph -->
                        <p><i class="fa fa-map-marker"></i> {{$hot['address_'.$lang]}}</p>
                        
                        <!-- Btn Div-->
                        <div class="btn-div">
                            <a href="{{url('phong/'.$hot['alias_vi'].'.html')}}">
                                <span class="read-more">{{$lang =='vi' ? "Đặt ngay" : "Book Now"}}</span>
                                <span class="icon-arrow-right2 bg-danger"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- Rooms Box End-->
            </div>
            @endforeach           
        </div>
    </div>
</div>
<!-- Recent Rooms End-->
<div class="favorite-rooms content-area clearfix">
    <div class="container">
        <div class="main-title">
            <h1>Phòng đặt nhiều nhất</h1>                
        </div>
        <div class="row">
        @foreach($products as $product)                                    
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <!-- Rooms Box Start-->
                <div class="thumbnail rooms-box clearfix">
                    <a href="{{url('phong/'.$product['alias_vi'].'.html')}}">
                        <img src="{{asset('upload/product/'.$product['photo'])}}" alt="{{$product['name_'.$lang]}}">
                    </a>
                    <!-- detail -->
                    <div class="caption detail">
                        <!-- Header -->
                        <header class="clearfix">
                            <div class="pull-left">
                                <h5 class="title">
                                    <a href="{{url('phong/'.$product['alias_vi'].'.html')}}">{{$product['name_'.$lang]}}</a>
                                </h5>
                                <div class="custom-list">
                                    {!! $product['mota_'.$lang] !!}                                    
                                </div>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                @if($lang =='vi')
                                <span>{{number_format($product['price_vi'])}}đ</span>
                                @else
                                <span>{{number_format($product['price_en'])}}$</span>
                                @endif
                            </div>
                        </header>
                        <!-- Paragraph -->
                        <p><i class="fa fa-map-marker"></i> {{$product['address_'.$lang]}}</p>
                        
                        <!-- Btn Div-->
                        <div class="btn-div">
                            <a href="{{url('phong/'.$product['alias_vi'].'.html')}}">
                                <span class="read-more">{{$lang =='vi' ? "Đặt ngay" : "Book Now"}}</span>
                                <span class="icon-arrow-right2 bg-danger"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- Rooms Box End-->
            </div>
        @endforeach

        </div>
    </div>
</div>
<!-- tin tức -->
<div class="favorite-rooms content-area clearfix">
    <div class="container">
        <div class="main-title">
            <h1>{{trans('label.news')}}</h1>                
        </div>
        <div class="row">                                    
            @foreach($news as $n)
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <!-- Rooms Box Start-->
                <div class="thumbnail rooms-box clearfix">
                    <a href="">
                        <img src="{{asset('upload/news/'.$n['photo'])}}" alt="{{$n['name_'.$lang]}}">
                    </a>
                    <!-- detail -->
                    <div class="caption detail">
                        <!-- Header -->
                        <header class="clearfix">
                            <div class="pull-left">
                                <h5 class="title">
                                    <a href="{{url('tin-tuc/'.$n['alias_vi'].'.html')}}">{{$n['name_'.$lang]}}</a>
                                </h5>                                
                        </header>                        
                        <div class="btn-div">
                            <a href="{{url('tin-tuc/'.$n['alias_vi'].'.html')}}">
                                <span class="read-more">{{trans('label.detail')}}</span>
                                <span class="icon-arrow-right2 bg-danger"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- Rooms Box End-->
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
