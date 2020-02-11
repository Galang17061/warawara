@extends('layouts_frontend._main')

@section('extra_style')
<style type="text/css">
    .center-cropped {
        height: 150px;
        overflow: hidden;
        /*margin: 10px;*/
        position: relative;
        /*border-radius: 25px;*/
    }
    @media screen and (max-width: 2000px) {
  .images_responsive {
        height: 450px;
    background-color: blue;
  }
}
    @media screen and (max-width: 1366px) {
  .images_responsive {
        height: 350px;
    background-color: red;
  }
}
    @media screen and (max-width: 992px) {
  .images_responsive {
        height: 350px;
    background-color: blue;
  }
}

/* On screens that are 600px or less, set the background color to olive */
@media screen and (max-width: 600px) {
  .images_responsive {
        height: 200px;
    background-color: olive;
  }
}
    .center-cropped-tumbnail {
        height: 50px;
        overflow: hidden;
        /*margin: 10px;*/
        position: relative;
    }
    .imgg {
        position: absolute;
        margin: auto; 
        min-height: 100%;
        min-width: 100%;
        left: -100%;
        right: -100%;
        top: -100%;
        bottom: -100%;
    }
    .search_bar_container{
        z-index: 99;
        margin-top: -250px;
        position: relative;
        padding-left: 20px;
        padding-right: 20px;
        background-color: #ffffffa6;
        border-radius: 50px;
    }
    .form-control {
        border:2px solid #000000;
        border-radius: 0px;
        color: black;
    }
    .classy-nav-container{
      background-color:transparent !important;
    }
    .header-area .is-sticky .mag-main-menu{
      background-color: white !important;
    }
    .topSearch::placeholder {
      color: orange;
    }
    .header-area .mag-main-menu .top-search-area form{
      border:none !important;
    }
    .header-area .mag-main-menu .top-search-area form button{
      color:orange !important;
    }
    .breakpoint-on .classynav > ul > li > a{
      background-color: transparent !important;
      border:none !important;
    }
</style>
@endsection
@section('carousel')
<div class="hero-area owl-carousel" style="margin-top:-70px">
    <!-- Single Blog Post -->
    @foreach ($carousel as $element)
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{ asset('/storage/app/'.$element->msc_image) }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-left" >
                        <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">{{ $element->msc_title }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Single Blog Post -->

</div>
{{-- <div class="search_bar">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="search_bar_container">
                    <form action="#" id="search_bar_form" class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-between clearfix">
                        <div style="width: 100%;margin-top: 15px;padding: 10px;">
                            <select class="form-control " style="border-radius: 50px !important;">
                                <option>- Pilih Kategori -</option>
                                @foreach ($category_event as $i => $element)
                                <option value="{{ $element->ce_id }}"><i class="{{ $element->ce_icon }}"></i>&nbsp;&nbsp;{{ $element->ce_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div style="width: 100%;padding: 10px;">
                            <input type="date" class="form-control mt-15 " placeholder="Pilih Tanggal" style="border-radius: 50px !important;">
                        </div>
                        <div class="button_center">
                            <button class="btn mag-btn" type="button" style="background-color: #ff6a00;border-radius: 50px"><i class="fa fa-search"></i> CARI</button>
                        </div>
                    </form>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection @section('content')

<section class="mag-posts-area d-flex flex-wrap" >
    <div class="mag-posts-content mt-30 col-12">
        <div class="feature-video-posts mb-30">
            <div class="section-heading">
                <h5>EVENT</h5>
                <h6>Jelajahi dan Temukan Acara Menarik di Kota Surabaya </h6>
            </div>

            <div class="featured-video-posts">
                <div class="row">
                    <div class="col-12 col-lg-12" style="padding:1px !important">
                        <ul class="nav nav-tabs nav-justified responsive-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#ALL">&nbsp;ALL</a>
                            </li>
                            @foreach ($category_events as $i => $element)
                            <li class="nav-item" class="col-sm-2">
                                <a class="nav-link " data-toggle="tab" href="#{{ $element->ce_href }}" onclick="category_events({{ $element->ce_id }})">&nbsp;{{ $element->ce_name }}</a>
                            </li>
                            @endforeach
                        </ul>
                        <br>
                        <div class="tab-content" style="margin:-10px">
                            <div class="tab-pane container-fluid in active" id="ALL">
                                {{-- <div class="featured-video-posts">
                                    <div class="row">
                                        @foreach ($category_event as $i => $element) 
                                            @foreach ($category_event[$i]->d_event as $i1 => $element1)
                                            <div class="col-12 col-lg-3" style="min-height: 250px">
                                                <div class="single-featured-post">
                                                    <div class="post-thumbnail center-cropped">
                                                        <img src="{{ asset('/storage/app/'.$element1->e_poster) }}" alt="" class="imgg">
                                                    </div>
                                                    <div class="post-content">
                                                         @php
                                                            $link =  preg_replace('/[^A-Za-z0-9\-]/', '', $element1->e_title); 
                                                            $link = str_replace(' ', '-', $element1->e_title);
                                                         @endphp
                                                        <a href="{{ route('event_detail',['name'=>$link,'id'=>$element1->e_id]) }}" class="post-title" style="font-size:20px !important">{{ $element1->e_title }}</a>
                                                        <div class="post-meta" style="margin-bottom: 0px">
                                                            <a href="#">{{ date('d M Y',strtotime($element1->e_start_date)) }}</a>
                                                            <a href="#">{{ $element->ce_name }}</a>
                                                        </div>
                                                        <a href="#">{{ $element1->e_location }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach 
                                        @endforeach
                                    </div>
                                </div> --}}
                                <div class="featured-video-posts">
                                    <div class="row">
                                        @foreach ($category_event as $i => $element) 
                                            @foreach ($category_event[$i]->d_event as $i1 => $element1)
                                            <div class="col-12 col-lg-3 mt-3  pb-4" style="">
                                                <div class="single-featured-post box-shadow">
                                                    <div class="post-thumbnail center-cropped mb-2">
                                                        <img src="{{ asset('/storage/app/'.$element1->e_poster) }}" alt="" class="imgg">
                                                    </div>
                                                    <div class="post-content pl-3" style="min-height: 140px">
                                                        @php
                                                            $link = preg_replace('/[^A-Za-z0-9\-]/','',$element1->e_title); 
                                                            $link = str_replace(' ','-',$element1->e_title);
                                                            $yr = date('Y',strtotime($element1->e_created_at)) ;
                                                            $mt = date('m',strtotime($element1->e_created_at)) ;
                                                            $dy = date('d',strtotime($element1->e_created_at)) ;
                                                        @endphp
                                                        <a href="{{ url('/event/event_detail/'.$yr.'/'.$mt.'/'.$dy.'/'.$element1->e_id.'/'.$link) }}" class="post-title " style="font-size:20px !important">{{ $element1->e_title }}</a>
                                                        <div class="post-meta" style="margin-bottom: 0px">
                                                            <a href="#">{{ date('d M Y',strtotime($element1->e_start_date)) }}</a>
                                                            <a href="archive.html">{{ $element->ce_name }}</a>
                                                        </div>
                                                        @if ( $element1->e_location != null  )
                                                        <a style="color: grey"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ $element1->e_location }}</a>
                                                        @endif
                                                        <br>
                                                        @if (  $element1->e_phone != null )
                                                        <a style="color: grey"><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;{{ $element1->e_phone }}</a>
                                                        @endif
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                            @endforeach
                                         @endforeach
                                    </div>
                                </div>  
                            </div>
                            @foreach ($category_events as $i => $element)
                            <div class="tab-pane container-fluid {{ $element->ce_name }}" id="{{ $element->ce_href }}">
                                <div class="featured-video-posts">
                                    <div class="row drop_remove drop_here_event">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-video-posts">
            <div class="section-heading">
                <h5>EXPLORER</h5>
                <h6>Selamat Berselancar dan Segera Mulai Petualanganmu! </h6>
            </div>

            <div class="drop">
                @include('news_result_render')
            </div>
        </div>
        <div class="feature-video-posts">
            <div class="section-heading">
                <h5>YOUTUBE</h5>
                <h6>Selamat Menikati laksana suara! </h6>
            </div>
            <div class="featured-video-posts">
                <div class="row">
                    <div class="col-12 col-lg-6" style="padding:1px !important">
                        <div class="" style="margin-bottom: 10px">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yTvSVctAJag" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6" style="padding:1px !important">
                        <div class="">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uO5kvfQ-kPQ" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
        @foreach ($puisi as $element)
        <div class="col-12 col-md-6 col-lg-4" style="padding:1px !important">
            <div class="single-blog-post d-flex style-3 mb-30" style="background-color: yellow;padding: 11px;">
                <div class="post-thumbnail center-cropped-tumbnail" style="margin: 0px !important">
                    <img class="imgg" src="{{ asset('/storage/app/'.$element->dp_image) }}" alt="" >
                </div>
                <div class="post-content">
                    <a href="{{ route('puisi_detail',['id'=>$element->dp_id]) }}" style="font-size: 13px;" class="post-title">{{ $element->dp_title }}</a>
                    <h6>Karya : {{ $element->m_mem->m_name }}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
        {{-- <button class="btn btn-warning btn-sm pull-right" ><i class="fa fa-eye"></i> Lihat Lebih </button> --}}
    <br>
    <br>
    <br>
    
</section>        
@endsection

@section('extra_scripts')

<script type="text/javascript">
    
    $(document).ready(function(){
      $('.responsive-tabs').responsiveTabs({
          accordionOn: ['xs','sm'] // xs, sm, md, lg
        });
     $(document).on('click', '.pagination a', function(event){
      event.preventDefault(); 
      var page = $(this).attr('href').split('page=')[1];
      fetch_data(page);
     });

     function fetch_data(page)
     {
      $.ajax({
       url:baseUrl+"/news_render?page="+page,
       success:function(data)
       {
        $('.drop').html(data);
       }
      });
     }
    });

    function category_events(argument) {
       $.ajax({
       url:'{{ route('event_data') }}',
       data:'&id='+argument,
       success:function(data)
       {
        $('.drop_remove').empty();
            $.each(data.hasil, function(k, v) {
                if (v.e_location == null) {
                    var location = '';
                }else{
                    var location = '<a style="color: grey"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;&nbsp;'+v.e_location+'</a>'
                                ;
                }
                if (v.e_phone == null) {
                    var phone = '';
                }else{
                    var phone = '<a style="color: grey"><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;'+v.e_phone+'</a>';
                }
                

                var str = v.e_title;
                var str_regex = str.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
                var str_replace = str_regex.split(' ').join('-');
                var yr = moment(v.e_created_at).format('YYYY');
                var mt = moment(v.e_created_at).format('MM');
                var dy = moment(v.e_created_at).format('DD');
                $('.drop_here_event').append(
                    '<div class="col-12 col-lg-3 mt-3  pb-4" style="">'+
                        '<div class="single-featured-post box-shadow">'+
                            '<div class="post-thumbnail center-cropped mb-2">'+
                                '<img src="'+baseUrl+'/storage/app/'+v.e_poster+'" alt="" class="imgg">'+
                            '</div>'+
                            '<div class="post-content pl-3" style="min-height: 140px">'+
                                '<a href="'+baseUrl+'/event/event_detail/'+yr+'/'+mt+'/'+dy+'/'+v.e_id+'/'+str_replace+'" class="post-title" style="font-size:20px !important">'+v.e_title+'</a>'+
                                '<div class="post-meta" style="margin-bottom: 0px">'+
                                    '<a href="#">'+moment(v.e_start_date).format('LL')+'</a>'+
                                    '<a href="#">'+v.m_category_event.ce_name+'</a>'+
                                '</div>'+location+'<br>'+phone+
                            '</div>'+
                        '</div>'+
                    '</div>'
                );
            });
       }
      });
     }

</script>
@endsection
