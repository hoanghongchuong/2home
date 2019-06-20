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
                    <h2>{{$lang =='vi' ? "Danh sách phòng" : "List room"}}</h2>                    
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
         <div class="col-lg-4 col-md-4 col-xs-12 p-sticky">
            <!-- Sidebar Start-->
            <div class="sidebar ">
               <aside class="sidebar-widget">
                  <!-- Review Start -->
                    <form action="" method="GET" id="lst_form_filter">
                        <div class="review">
                            <!-- Option Bar -->
                            <div class="option-bar clearfix">
                               <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                     <div class="section-heading">
                                        <div class="media">
                                           <div class="media-left">
                                              <i class="flaticon-royalty-crown"></i>
                                           </div>
                                           <div class="media-body">
                                              <h4>{{ $lang =='vi' ? "Tìm kiếm phòng/căn hộ" : "Search room/ apartment" }}</h4>
                                              <div class="border"></div>
                                              <p>{{ $lang =='vi' ? "Tìm kiếm phòng/căn hộ" : "Search room/ apartment" }}</p>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                        </div>
                         <!-- Review End -->
                         <!--Tim theo khu vuc-->
                        <div class="popular-rooms">
                            <!-- title-->
                            <h2 class="title">{{ $lang =='vi' ? "Khu vực" : "Area" }}</h2>
                            <select class="form-control" name="area">
                              <option value="">chọn khu vực</option>
                                @foreach($cate_pro as $area)
                                <option value="{{$area->id}}">{{$area['name_'.$lang]}}</option>
                                @endforeach
                            </select>
                        </div>
                         <!-- Popular Rooms Start -->
                        <h2 class="pro-filter-tit">{{trans('label.price')}}</h2>
                        @if($lang =='vi')
                        <div class="widget-info filter-price" style="position: relative;">
                            <div>
                                <input type="text" id="range" value="" name="range_vi" />
                            </div>                            
                        </div>
                        @else
                        <div class="widget-info filter-price" style="position: relative;">
                            <div>
                                <input type="text" id="range_en" value="" name="range_en" />
                            </div>                            
                        </div>
                        @endif
                        <div class="popular-rooms">                            
                            <div class="form-group">
                               <label>&nbsp;</label><br>
                               <button class="btn btn-primary" type="submit">{{ $lang =='vi' ? "Tìm kiếm" : "Search" }}</button>
                            </div>
                        </div>                         
                    </form>
               </aside>
               <!-- End-->
               <!-- Helping Start-->
                <div class="show-pc">
                    <div class="helping-Center sidebar-widget">
                        <h2 class="title">{{ $lang =='vi' ? "Trợ giúp" : "Help" }}</h2>
                        <!-- <p>Trung tâm chăm sóc khách hàng.</p> -->
                        <ul class="contact-link">
                            <li>
                               <a href="#">
                               <i class="fa fa-map-marker"></i>
                               {{$setting['address_'.$lang]}}
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
                </div>
               <!-- Helping End-->
            </div>
            <!-- Sidebar End-->
         </div>
         <div class="col-lg-8 col-md-8 col-xs-12">
            <!-- Block Heading Start-->
            <div class="block-heading">
               <h4>
                  <span class="heading-icon">
                  <i class="fa fa-caret-right icon-design"></i>
                  <i class="fa fa-th-list"></i>
                  </span>
                  {{$lang =='vi' ? "Danh sách phòng" : "List room"}}
               </h4>
               <!--<div class="toggle-view pull-right">
                  <a href="#" class="active-view-btn">
                      <i class="fa fa-th-list"></i>
                  </a>
                  <a href="#" class="change-view-btn">
                      <i class="fa fa-th-large"></i>
                  </a>
                  </div>-->
            </div>
            <!-- Block Heading End -->
            <!-- Rooms List Start -->
            @foreach($result as $item)
            <div class="rooms-list-box clearfix">
               <div class=" row-table row-flush">
                  <div class="col-lg-4  col-md-4 col-sm-4 col-xs-12 rooms-pic">
                     <a href="{{url('phong/'.$item['alias_vi']).'.html'}}">
                     <img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item['name_'.$lang]}}" class="img-responsive">
                     </a>
                  </div>
                  <!-- Detail Body -->
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 detail-body">
                     <!-- Header -->
                     <header>
                        <div class="pull-left">
                           <!-- Title -->
                           <h5 class="title">
                              <a href="{{url('phong/'.$item['alias_vi']).'.html'}}">{{$item['name_'.$lang]}}</a>
                           </h5>
                           <!-- Custom List -->
                           <div class="custom-list">
                              {!! $item['mota_'.$lang] !!}
                           </div>
                        </div>
                        <!-- Price -->
                        <div class="price">
                            @if($lang =='vi')
                            <span>{{number_format($item['price_first_vi'])}} đ/{{number_format($item['price_vi'])}} đ</span>
                            @else
                            <span>{{number_format($item['price_first_en'])}} $/{{number_format($item['price_en'])}} $</span>
                            @endif
                        </div>
                     </header>
                     <!-- paragraph -->
                     <p>
                        <i class="fa fa-map-marker"></i> {!! $item['address_'.$lang] !!}
                     </p>
                     <!-- Facilities List -->
                    <ul class="facilities-list">
                      <?php $convenientCurrent = \App\Convenient::whereIn('id', explode(',',$item['convenient_id']))->get(); ?>
                        @if($convenientCurrent)
                            @foreach($convenientCurrent as $convenient)
                            <li>
                              <!-- <i class="flaticon-air-conditioner"></i> -->                                    
                              <span>{{$convenient['name_'.$lang]}}</span>                                    
                            </li>
                          @endforeach
                        @endif 
                        
                    </ul>
                     <div class="clearfix"></div>
                    <p>
                        {!! str_limit($item['content_'.$lang], 250) !!}
                       
                    </p>
                     <!-- Btn Div -->
                    <div class="btn-div">
                        <a href="{{url('phong/'.$item['alias_vi']).'.html'}}">
                        <span class="read-more">{{trans('label.book_now')}}</span>
                        <span class="icon-arrow-right2 bg-danger">
                        <i class="fa  fa-angle-right"></i>
                        </span>
                        </a>
                    </div>
                  </div>
               </div>
            </div>            
            @endforeach
            <!-- Page navigation Start-->
            <div class="paginations">
                    {!! $result->links() !!}
            </div>
            <!-- Page navigation End-->
            <!-- Recent News Start-->
            <div class="Recent-news sidebar-widget show-sp">
               <!-- Title-->
               <h2 class="title">Tin tức</h2>
               <div class="media">
                  <div class="media-left">
                     <a href="http://2home.vn/tin-tuc/dinh-nghia-chuan-ve-khai-niem-can-ho-cao-cap-con-sot-dat-phong-tai-ha-noi-nam-2018/10.html">
                     <img class="media-object" src="http://admin.2home.vn/upload/ee3a3f70cd52afeb342fb679c03add65.jpg" alt="ĐỊNH NGHĨA CHUẨN VỀ KHÁI NIỆM &quot;CĂN HỘ CAO CẤP&quot; - CƠN SỐT ĐẶT PHÒNG TẠI HÀ NỘI NĂM 2018">
                     </a>
                  </div>
                  <div class="media-body">
                     <a href="http://2home.vn/tin-tuc/dinh-nghia-chuan-ve-khai-niem-can-ho-cao-cap-con-sot-dat-phong-tai-ha-noi-nam-2018/10.html">ĐỊNH NGHĨA CHUẨN VỀ KHÁI NIỆM &quot;CĂN HỘ CAO CẤP&quot; - CƠN SỐT ĐẶT PHÒNG TẠI HÀ NỘI NĂM 2018</a>
                     <span>0000-00-00 00:00:00</span>
                  </div>
               </div>
               <div class="media">
                  <div class="media-left">
                     <a href="http://2home.vn/tin-tuc/5-bo-phim-khong-the-cuong-lai-danh-cho-nhung-cap-doi-dang-yeu/6.html">
                     <img class="media-object" src="http://admin.2home.vn/upload/be47f2e5e70fa7974a57c74258c5eda0.jpg" alt="5 BỘ PHIM KHÔNG THỂ CƯỠNG LẠI DÀNH CHO NHỮNG CẶP ĐÔI ĐANG YÊU">
                     </a>
                  </div>
                  <div class="media-body">
                     <a href="http://2home.vn/tin-tuc/5-bo-phim-khong-the-cuong-lai-danh-cho-nhung-cap-doi-dang-yeu/6.html">5 BỘ PHIM KHÔNG THỂ CƯỠNG LẠI DÀNH CHO NHỮNG CẶP ĐÔI ĐANG YÊU</a>
                     <span>2017-08-17 07:00:00</span>
                  </div>
               </div>
               <div class="media">
                  <div class="media-left">
                     <a href="http://2home.vn/tin-tuc/lua-chon-dia-diem-hen-ho-khong-the-dai-khai-duoc-part-ii/5.html">
                     <img class="media-object" src="http://admin.2home.vn/upload/eec2366a4d7e337226fcb14e4d2fd878.jpg" alt="LỰA CHỌN ĐỊA ĐIỂM HẸN HÒ - KHÔNG THỂ ĐẠI KHÁI ĐƯỢC! (PART II)">
                     </a>
                  </div>
                  <div class="media-body">
                     <a href="http://2home.vn/tin-tuc/lua-chon-dia-diem-hen-ho-khong-the-dai-khai-duoc-part-ii/5.html">LỰA CHỌN ĐỊA ĐIỂM HẸN HÒ - KHÔNG THỂ ĐẠI KHÁI ĐƯỢC! (PART II)</a>
                     <span>2017-08-18 07:00:00</span>
                  </div>
               </div>
               <div class="media">
                  <div class="media-left">
                     <a href="http://2home.vn/tin-tuc/lua-chon-dia-diem-hen-ho-khong-the-dai-khai-duoc-part-i/4.html">
                     <img class="media-object" src="http://admin.2home.vn/upload/beadbbacc3fc375f5820ee2e37b6f962.jpg" alt="LỰA CHỌN ĐỊA ĐIỂM HẸN HÒ - KHÔNG THỂ ĐẠI KHÁI ĐƯỢC! (PART I)">
                     </a>
                  </div>
                  <div class="media-body">
                     <a href="http://2home.vn/tin-tuc/lua-chon-dia-diem-hen-ho-khong-the-dai-khai-duoc-part-i/4.html">LỰA CHỌN ĐỊA ĐIỂM HẸN HÒ - KHÔNG THỂ ĐẠI KHÁI ĐƯỢC! (PART I)</a>
                     <span>2017-08-15 07:00:00</span>
                  </div>
               </div>
            </div>
            <!-- Recent News End-->
            <!-- Helping Start-->
            <div class="show-sp">
               <div class="helping-Center sidebar-widget">
                  <h2 class="title">Trợ giúp</h2>
                  <p>Trung tâm chăm sóc khách hàng.</p>
                  <ul class="contact-link">
                     <li>
                        <a href="#">
                        <i class="fa fa-map-marker"></i>
                        102 Thái Thịnh, phường Trung Liệt, quận Đống Đa, Hà Nội
                        </a>
                     </li>
                     <li>
                        <a href="tel:0944-910-499">
                        <i class="fa fa-phone"></i>
                        0944-910-499
                        </a>
                     </li>
                     <li>
                        <a href="mailto:always2home@gmail.com">
                        <i class="fa fa-envelope-o"></i>
                        always2home@gmail.com
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
