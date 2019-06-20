@extends('index')
@section('content')
<?php
   
?>
<!-- Content Start -->
<!-- Blog Body Start -->
<div class="blog-body">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-xs-12">
            <!-- Blog Box Start -->
            <div class="thumbnail blog-box">
               <img src="{{asset('upload/news/'.$data['photo'])}}">
               <!-- detail -->
                <div class="caption detail">
                    <h1 class="title">
                        <a href="{{URL::current()}}">{{$data['name_'.$lang]}}</a>
                    </h1>
                    <div class="content">
                        {!! $data['content_'.$lang] !!}
                    </div>
                    <div class="clearfix">
                         <div class="blog-share">
                            <div class="addthis_inline_share_toolbox"></div>
                         </div>
                    </div>
                </div>
            </div>
            <!-- Comments Thread Start -->
            <div class="comments-thread clearfix">
               <h2 class="sub-title mrg-btm">Bình luận</h2>
               <div class="comment">
                  <!-- CORRECT -->
                  <div class="fb-comments" data-href="{{URL::current()}}" data-width="100%" data-numposts="5"></div>
               </div>
            </div>
            <!-- Comments Thread End -->
         </div>
      </div>
   </div>
</div>
<!-- Blog Body End -->



@endsection