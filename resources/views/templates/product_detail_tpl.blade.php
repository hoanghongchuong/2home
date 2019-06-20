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
                    <h2>{{$data['name_'.$lang]}}</h2>
                    <a href="{{url('')}}" class="btn btn-fill">{{trans('label.home')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Page Banner End -->
<!-- Page Banner End -->
<div class="rooms-details-body">
   <div class="container">
        <div class="row">
          @if (session('message'))
            <div class="box-header">
              <div class="alert-success">
                <h2 class="box-title">{{ session('message') }}</h2>
              </div>
              
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
                <div class="hotel-details">
                   <!-- Option Bar Start-->
                    <div class="option-bar clearfix">
                      <div class="row">
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="section-heading">
                               <div class="media">
                                  <div class="media-left">
                                     <i class="fa fa-crown"></i>
                                  </div>
                                  <div class="media-body hidden-xs">
                                     <h4>{{$data['name_'.$lang]}}</h4>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="header-price">
                                @if($lang =='vi')
                                <h3>{{number_format($data['price_first_vi'])}} đ / {{number_format($data['price_vi'])}} đ</h3>
                                @else
                                <h3>{{number_format($data['price_first_en'])}} $ / {{number_format($data['price_en'])}} $</h3>
                                @endif
                            </div>
                         </div>
                      </div>
                    </div>
                   <!-- Option Bar End-->
                   <!-- Rooms Detail Slider Start-->
                    <div class="rooms-detail-slider simple-slider">
                      <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                         <div class="carousel-outer">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                            @if(count($albums) > 0)
                                @foreach($albums as $k=>$album)
                                <div class="item @if($k==0)active @endif">
                                  <img src="{{asset('upload/hasp/'.$album['photo'])}}" class="thumb-preview" alt="{{$data['name_'.$lang]}}">
                                </div>
                                @endforeach
                            @else
                                <div class="item active">
                                  <img src="{{asset('upload/product/'.$data['photo'])}}" class="thumb-preview" alt="{{$data['name_'.$lang]}}">
                                </div>
                            @endif
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                            <span class="slider-mover-left no-bg" aria-hidden="true">
                            <img src="{{asset('public/images/chevron-left.png ')}}" alt="chevron-left">
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
                         <!-- Indicators -->
                         <ol class="carousel-indicators thumbs visible-lg visible-md">
                            @foreach($albums as $k=>$album))                            
                            <li data-target="#carousel-custom" data-slide-to="{{$k}}" class=" @if($k==0)active @endif">
                               <img src="{{asset('upload/hasp/'.$album['photo'])}}" alt="{{$data['name_'.$lang]}}">
                            </li>
                            @endforeach
                         </ol>
                      </div>
                    </div>
                   <!-- Car Detail Slider End-->
                    <div class="inside-room">
                      <h2 class="title">{{ $lang =='vi' ? 'Giá phòng' : "price" }}</h2>
                      <div class="content">
                         <table class="table table-bordered table-responsive">
                            <thead>
                               <tr>
                                  <th>{{$lang =='vi' ? "Tên" : "Name"}}</th>
                                  <th>{{ $lang =='vi' ? 'Giá phòng' : "price" }}</th>
                               </tr>
                            </thead>
                            <tbody>
                               <tr>
                                  <td>
                                    2 giờ đầu                            
                                  </td>
                                  <td>
                                    @if($lang =='vi')
                                        {{number_format($data['price_first_vi'])}} đ
                                    @else
                                        {{number_format($data['price_first_en'])}} $
                                    @endif
                                                             
                                  </td>
                               </tr>
                               <tr>
                                  <td>
                                    1 giờ tiếp theo                            
                                  </td>
                                  <td>
                                    @if($lang =='vi')
                                        {{number_format($data['price_next_vi'])}} đ
                                    @else
                                        {{number_format($data['price_next_en'])}} $
                                    @endif                           
                                  </td>
                               </tr>
                               <tr>
                                  <td>
                                     Phí ngày                            
                                  </td>
                                  <td>
                                    @if($lang =='vi')
                                        {{number_format($data['price_vi'])}} đ
                                    @else
                                        {{number_format($data['price_en'])}} $
                                    @endif                              
                                  </td>
                               </tr>
                            </tbody>
                         </table>
                      </div>
                    </div>
                   <br>
                   <!-- Room Details Start -->
                    <div class="room-specifications clearfix visible-xs">
                      <!-- Option Bar Start -->
                      <div class="option-bar clearfix">
                         <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                               <div class="section-heading">
                                  <div class="media">
                                     <div class="media-left">
                                        <i class="fa fa-crown"></i>
                                     </div>
                                     <div class="media-body">
                                        <h4>{{$data['name_'.$lang]}}</h4>
                                        <!--<div class="border"></div>
                                           <p>Nằm trong tòa nhà chung cư cao cấp Artemis, quận Thanh Xuân, Hà Nội với lối kiến trúc hiện đại, sang trọng, cùng không gian mở - tận dụng tối đa ánh sáng tự nhiên  Sapphire Apartment 4 - Artemis chắc chắn sẽ mang lại cho khách hàng những giây phút nghỉ ngơi, thư thái tuyệt đối. 
                                           </p>-->
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <p>{!! str_limit($data['content_'.$lang], 200) !!}</p>
                      <form method="post" action="{{route('book.room')}}" id="frm-mobile-booking">
                        {{csrf_field()}}
                        <input type="hidden" name="product_id" value="{{$data['id']}}">              
                            <div class="row">
                                <div class="form-group">
                                    <label for="checkin">{{trans('label.hoten')}}<i class="text-danger">*</i></label>
                                    <input type="text" name="full_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="checkin">{{trans('label.phone')}}<i class="text-danger">*</i></label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="checkin">Email<i class="text-danger">*</i></label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group">
                                    <label for="checkin">{{$lang =='vi' ? "Thời gian nhận phòng" : "Time check inn"}} <i class="text-danger">*</i></label>
                                    <div class="input-group date datetimepicker1">
                                        <input type='text' class="form-control" name="start_date" />
                                        <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                                         
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="checkin">{{$lang =='vi' ? "Thời gian trả phòng" : "Time check out"}} <i class="text-danger">*</i></label>
                                    <div class="input-group date datetimepicker2" id=>
                                        <input type='text' class="form-control" name="end_date" />
                                        <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                   <label>{{$lang =='vi' ? "Số người lớn" : "Number Adult"}}</label>
                                   <input type="number" name="adult" min="1" max="100" class="form-control">
                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                   <label>{{$lang =='vi' ? "Số trẻ em" : "Number Children"}}</label>
                                   <input type="number" name="children" min="1" max="100" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <button type="submit" class="book-btn">
                                      <!-- <span class="book-btn-l"><i class="fa fa-check"></i></span> -->
                                      <span class="book-btn-r">Đặt ngay</span>
                                      <div class="clear"></div>
                                    </button>
                                </div>
                            </div>
                      </form>
                    </div>
                   <!-- Room Details-End -->
                   <!-- About Room start-->
                    <div class="about-room">
                        <h2 class="title">
                            {{trans('label.content')}}           
                        </h2>
                        <div class="content">
                            {!! $data['content_'.$lang] !!}
                        </div>
                    </div>
                   <!-- About Room End-->
                   <!-- Amenities Start-->
                    <div class="amenities">
                      <h2 class="title">{{ $lang =='vi' ? "Tiện nghi" : "Convenient" }}</h2>
                      <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 detail-body">
                            <!-- Facilities List -->
                            <ul class="facilities-list">
                              @if($convenientCurrent)
                                  @foreach($convenientCurrent as $convenient)
                                  <li>
                                    <!-- <i class="flaticon-air-conditioner"></i> -->                                    
                                    <span>{{$convenient['name_'.$lang]}}</span>                                    
                                  </li>
                                @endforeach
                              @endif 
                            </ul>
                         </div>
                      </div>
                    </div>
                   <!-- About Room End-->
                    <div class="amenities">
                      <h2 class="title">{{trans('label.service')}}</h2>
                      <div class="row">
                        @foreach($services as $service)
                        <a href="{{url('dich-vu/'.$service['alias_vi'].'.html')}}" target="_blank" class="btn btn-default btn-twitter">{{$service['name_'.$lang]}}</a>
                        @endforeach
                      </div>
                    </div>
                   
                   <!-- Inside Room End-->
                    <div class="inside-room">
                      <h2 class="title">{{ $lang=='vi' ? "Bản đồ" : "Map"}}</h2>
                      <div id="map">
                          {!! $data['iframemap'] !!}
                      </div>
                    </div>
                   <!-- Inside Room End-->
                    <div class="inside-room">
                      <h2 class="title">{{trans('label.another_room')}}</h2>
                        <div class="row">
                            @foreach($relatedProducts as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <!-- Rooms Box Start-->
                                <div class="thumbnail rooms-box clearfix">
                                   <a href="{{url('phong/'.$product['alias_vi'].'.html')}}">
                                   <img src="{{asset('upload/product/'.$product['photo'])}}" alt="Iris Atremis Apartment">
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
                                               {{$product['mota_'.$lang]}}                                      
                                            </div>
                                         </div>
                                         <!-- Price -->
                                         <div class="price">                                            
                                            @if($lang =='vi')
                                            <span>{{number_format($product['price_first_vi'])}} đ/{{number_format($product['price_vi'])}} đ</span>
                                            @else
                                            <span>{{number_format($product['price_first_en'])}} $/{{number_format($product['price_en'])}} $</span>
                                            @endif
                                         </div>
                                      </header>
                                      <!-- Paragraph -->
                                      <p><i class="fa fa-map-marker"></i> {{$product['address_'.$lang]}}</p>
                                      <!-- Btn Div-->
                                      <div class="btn-div">
                                         <a href="{{url('phong/'.$product['alias_vi'].'.html')}}">
                                         <span class="read-more">{{$lang =='vi' ? "Đặt ngay" : "Book now"}}</span>
                                         <span class="icon-arrow-right2 bg-danger"><i class="fa fa-angle-right"></i></span>
                                         </a>
                                      </div>
                                      <div class="clearfix"></div>
                                   </div>
                                </div>
                            </div>
                            @endforeach                
                        </div>
                    </div>
                </div>
                <!-- content div End-->
                <!-- Comments Thread Start-->
                <div class="comments-thread clearfix">
                   <h2 class="title">{{$lang =='vi' ? "Bình luận" : "Comment"}}</h2>
                   <div class="inside-room">
                      <!-- CORRECT -->
                      <div class="fb-comments" data-href="{{URL::current()}}" data-width="100%" data-numposts="5"></div>
                   </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 p-sticky">
                <div class="details-sidebar">
                   <!-- Room Details Start -->
                   <div class="room-specifications clearfix hidden-xs">
                      <!-- Option Bar Start -->
                      <div class="option-bar clearfix">
                         <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                               <div class="section-heading">
                                  <div class="media">
                                     <div class="media-left">
                                        <i class="fa fa-crown"></i>
                                     </div>
                                     <div class="media-body">
                                        <h4>{{$data['name_'.$lang]}}</h4>
                                        <div class="border"></div>
                                        <!-- <p>Đặt phòng Sapphire Apartment 4 - Artemis</p> -->
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                        <form method="post" action="{{route('book.room')}}" id="frm-desk-booking">
                          {{csrf_field()}}
                          <input type="hidden" name="product_id" value="{{$data['id']}}"> 
                            <div class="row">
                                <div class="form-group">
                                    <label for="checkin">{{trans('label.hoten')}}<i class="text-danger">*</i></label>
                                    <input type="text" name="full_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="checkin">{{trans('label.phone')}}<i class="text-danger">*</i></label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="checkin">Email<i class="text-danger">*</i></label>
                                    <input type="text" name="email" class="form-control">
                                </div>                      
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="checkin">{{$lang =='vi' ? "Thời gian nhận phòng" : "Time check in"}} <i class="text-danger">*</i></label>
                                    <div class="input-group date datetimepicker1">
                                        <input type='text' class="form-control" name="start_date" />
                                        <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(function () {
                                        $('.datetimepicker1').datetimepicker();
                                    });
                                </script>                          
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="checkin">{{$lang =='vi' ? "Thời gian trả phòng" : "Time check out"}} <i class="text-danger">*</i></label>
                                    <div class="input-group date datetimepicker2">
                                        <input type='text' class="form-control" name="end_date" />
                                        <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(function () {
                                        $('.datetimepicker2').datetimepicker();
                                    });
                                </script> 
                            </div>
                            <div class="row">
                                <div class="form-group">
                                   <label>{{$lang =='vi' ? "Số người lớn" : "Number Adult"}}</label>
                                    <input type="number" name="adult" min="1" max="100" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                   <label>{{$lang =='vi' ? "Số trẻ em" : "Number Children"}}</label>
                                    <input type="number" name="children" min="1" max="100" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                   <p class="form-error error"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                   <button type="submit" class="book-btn" onclick="return handleBooking('#frm-desk-booking');">
                                      <!-- <span class="book-btn-l"><i class="fa fa-check"></i></span> -->
                                      <span class="book-btn-r">{{ $lang =='vi' ? "Đặt ngay" : "Book Now" }}</span>
                                      <div class="clear"></div>
                                   </button>
                                </div>
                            </div>
                        </form>
                   </div>
                   <!-- Room Details-End -->
                   <!-- Help Center Start -->
                   <div class="helping-Center">
                        <h2 class="title">{{ $lang =='vi' ? "Trợ giúp" : "Help" }}</h2>
                        <span>
                          <a href="tel:{{$setting['hotline']}}">
                          <i class="fa fa-phone"></i> {{$setting['hotline']}}
                          </a>
                        </span>
                        <p>
                            <a href="mailto:{{$setting['email']}}"><i class="fa fa-envelope"></i> {{$setting['email']}}</a>
                        </p>
                        <p>
                            <a href=""><i class="fa fa-map-marker"></i> {{$setting['address_'.$lang]}}</a>
                        </p>
                   </div>
                   <!-- Help Center End -->
                   <!-- Social List Start -->                   
                </div>
            </div>
        </div>
   </div>
</div>

@endsection
