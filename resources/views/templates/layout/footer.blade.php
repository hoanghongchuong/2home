<?php
    $setting = \App\Setting::where('id', 1)->first()->toArray();
    $lang = Session::get('locale');    
?>
<footer class="main-footer clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-item clearfix">
                <div class="footer-item-content">
                    <a href="{{url('')}}" class="logo">
                        <img src="{{asset('upload/hinhanh/'.$setting['logo'])}}">
                    </a>
                    <div class="clearfix"></div>
                    <!-- paragraph-->
                    <ul class="clearfix">
                        <li>
                            <a href="tel:{{$setting['phone']}}">
                                <i class="fa fa-phone"></i>
                                {{$setting['phone']}}
                            </a>
                        </li>
                        <li>
                            <a href="mailto:always2home@gmail.com">
                                <i class="fa fa-envelope-o"></i>
                                {{$setting['email']}}
                            </a>
                        </li>
                        <li>
                            <a href="tel:0944-910-499">
                                <i class="fa fa-map-marker"></i>
                                {{$setting["address_".$lang]}}
                            </a>
                        </li>
                    </ul>
                    
                </div>
            </div>
            <div class="col-md-4 footer-item clearfix">
                <h3>{{trans('label.link_map')}}</h3>
                <div class="box-map-footer">
                    {!! $setting["iframemap"] !!}
                </div>
            </div>
            <div class="col-md-4 footer-item clearfix">
                <h3>Fanpage</h3>
                <div class="box-fanpage">
                    <div class="fb-page" data-href="{{$setting['facebook']}}" data-tabs="timeline" data-width="320px" data-height="250px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{$setting['facebook']}}" class="fb-xfbml-parse-ignore"><a href="{{$setting['facebook']}}">Facebook</a></blockquote></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End-->

<!-- Sub Footer-->
<div class="sub-footer">
    <div class="container">
        <span>Copyright 2019. Bản quyền thuộc về: Công ty cổ phần hungthinhads</span>
    </div>
</div>