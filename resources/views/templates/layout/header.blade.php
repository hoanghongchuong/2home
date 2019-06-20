<?php
    $setting = Cache::get('setting');
    // $menus = \App\Menu::where('parent_id', 0)->orderBy('stt','asc')->get()->toArray();
    // dd($menus);
    $categories = \App\ProductCate::where('com','san-pham')->where('parent_id',0)->get()->toArray();
    $lang = Session::get('locale');
?>
<header class="main-header">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('')}}" class="logo">
                    <img src="{{asset('upload/hinhanh/'.$setting->photo)}}">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{url('')}}">{{trans('label.home')}}</a>
                    </li>
                    <li>
                        <a href="{{url('phong')}}">{{trans('label.room_apartment')}}</a>
                    </li>
                    <li>
                        <a href="{{url('dich-vu')}}">{{trans('label.service')}}</a>
                    </li>
                    <li>
                        <a href="{{url('tin-tuc')}}">{{trans('label.news')}}</a>
                    </li>
                    <li><a href="{{url('gioi-thieu')}}">{{trans('label._vechungtoi')}}</a></li>
                    <li><a href="{{url('lien-he')}}">{{trans('label.contact')}}</a></li>
                    <li class="language">
                        <a href="{{url('lang/'.'en')}}"><img src="{{ asset('public/images/en.png')}}"></a> &nbsp
                        <a href="{{url('lang/'.'vi')}}"><img src="{{ asset('public/images/vi.png')}}"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </div>
    </nav>
</header>
<!-- Header End -->