@extends('layouts_frontend._main')

@section('content')
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url({{ asset('../storage/app/'.$data->e_poster ) }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>{{ $data->e_title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Event</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $data->e_title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->

                <div class="col-12 col-xl-8">       
                    <div class="post-details-content bg-white  mb-30 p-30 box-shadow">
                        <div class="blog-content ">
                            <h4 class="post-title">{{ $data->e_title }}</h4>
                            
                            <div class="single-video-area bg-white">
                                <div class="video-meta-data d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('../storage/app/'.$data->e_poster ) }}" alt="">
                                </div>
                                <div class="video-meta-data d-flex align-items-center justify-content-between">
                                    <h6 class="total-views">{{ $data->e_views }} Views</h6>
                                    <div class="like-dislike d-flex align-items-center">
                                        <button type="button" onclick="button_like()"
                                            @if (Auth::user() != null)
                                                @if ($cek_like_user == 1)
                                                    style="color: #f1c40f"
                                                @endif
                                            @endif>
                                            <i class="color_like fa fa-thumbs-o-up" aria-hidden="true"></i> 
                                            <j class="color_like drop_total_like">{{ $total_like }}</j>
                                        </button>
                                        <button type="button" onclick="button_interest()"
                                            @if (Auth::user() != null)
                                                @if ($cek_interest_user == 1)
                                                    style="color: #f1c40f"
                                                @endif
                                            @endif>
                                            <i class="color_interest fa fa-star-o" aria-hidden="true"></i> 
                                            <j class="color_interest drop_total_interest">{{ $total_interest }}</j>
                                        </button>
                                        <p><i class="fa fa-comments-o" aria-hidden="true"></i> {{ $total_comment }}</p>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                        <div class="blog-content">
                            <div class="post-meta">
                                <a href="#"><span style="color: black">Dipublikasikan Oleh</span> {{ $data->m_mem->m_name }} </a>
                                <a href="archive.html">Diskusi</a>
                            </div>
                            <div class="post-meta-2">
                            </div>
                            <table class="table"> 
                                <tr>
                                    <td>
                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle base_color fa-stack-2x"></i>
                                      <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                                    </span> Tanggal
                                    </td>
                                    <td style="vertical-align: inherit;">
                                        <span style="padding: 0px 20px 0px 0px"> {{ date('d F Y',strtotime($data->e_start_date)) }}</span>  
                                        @if ($data->e_start_date == $data->e_end_date)@else
                                            s/d 
                                            <span style="padding: 0px 20px 0px 20px">{{ date('d F Y',strtotime($data->e_end_date)) }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle base_color fa-stack-2x"></i>
                                      <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                                    </span> Waktu
                                    </td>
                                    <td style="vertical-align: inherit;">
                                        <span style="padding: 0px 20px 0px 0px"> {{ $data->e_start_time }} </span>  
                                        s/d 
                                        <span style="padding: 0px 20px 0px 20px">{{ strtoupper($data->e_end_time    ) }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle base_color fa-stack-2x"></i>
                                      <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                    </span> Lokasi
                                    </td>
                                    <td style="vertical-align: inherit;">
                                        {{ $data->e_location }}
                                        <br>
                                        {{ $data->e_location_desc }}
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p>
                                          
                                          <button class="btn btn-secondary btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Lihat Map
                                          </button>
                                        </p>
                                        <div class="collapse" id="collapseExample">
                                          <div class="card card-body" style="padding: 0px !important">
                                            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{ urlencode($data->e_location)  }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:620px;}</style></div>
                                          </div>
                                        </div>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #dee2e6">
                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle base_color fa-stack-2x"  style="margin-top: -1px;"></i>
                                      <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                    </span> Kontak
                                    </td >
                                    <td style="vertical-align: inherit;border-bottom: 1px solid #dee2e6">{{ $data->e_phone }}
                                        <a target="_blank" href="https://wa.me/{{ str_replace(' ', '', $data->e_phone) }}?text=hai%20admin">
                                            <span class="fa-stack fa-lg" >
                                              <i class="fa fa-circle base_color fa-stack-2x" style="margin-top: -1px;color: #01E675;"></i>
                                              <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #dee2e6">
                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle base_color fa-stack-2x"></i>
                                      <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
                                    </span> Web
                                    </td >
                                    <td style="vertical-align: inherit;border-bottom: 1px solid #dee2e6">
                                        <a target="_blank" href="https://{{ $data->e_web }}">{{ $data->e_web }}</a>
                                    </td>
                                </tr>
                             
                            </table>
                            {!! $data->e_desc !!}
                            {{-- <div class="like-dislike-share my-5">
                                <h4 class="share">240<span>Share</span></h4>
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Share on Facebook</a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Share on Twitter</a>
                            </div> --}}
                            <div class="post-author d-flex align-items-center">
                                <div class="post-author-thumb">
                                    <img 
                                        @if ($data->m_mem->m_image == null || $data->m_mem->m_image == '')
                                            src="{{ asset('assets_frontend/img/core-img/img_kosong.jpg') }}"
                                        @else
                                            src="{{ asset('storage/app/'.$data->m_mem->m_image ) }}"
                                        @endif 
                                    >
                                </div>
                                <div class="post-author-desc pl-4">
                                    <a href="#" class="author-name">{{ $data->m_mem->m_name }}</a>
                                    <p>{{ $data->m_mem->m_desc }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post A Comment Area -->
                    <div class="post-a-comment-area bg-white mb-30 p-30 box-shadow clearfix">
                        @if (Auth::user() != null)
                        <div class="section-heading">
                            <h5>Tinggalkan Komentar</h5>
                        </div>
                        <div class="contact-form-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <textarea name="message" class="form-control comment_message" id="message" cols="30" rows="10" placeholder="Message*" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn mag-btn" type="button" onclick="comments()">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @else
                        <h4 class="text-center">Silahkan Login Untuk Komen</h4> 
                        @endif
                    </div>
                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix bg-white mb-30 p-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>COMMENTS</h5>
                        </div>
                        <ol>
                         <li class="single_comment_area drop_comment">
                                <div class="comment-content d-flex">
                                </div>
                            </li>
                        </ol>
                        @foreach ($comment as $element)
                        <ol>
                            <li class="single_comment_area">
                                <div class="comment-content d-flex">
                                    <div class="comment-author">
                                        <img 
                                            @if ($element->comment_user->m_image == null || $element->comment_user->m_image == '')
                                                src="{{ asset('../assets_frontend/img/core-img/img_kosong.jpg') }}"
                                            @else
                                                src="{{ asset('../storage/app/'.$element->comment_user->m_image ) }}"
                                            @endif>
                                    </div>
                                    <div class="comment-meta">
                                        <a href="#" class="comment-date">{{ date('d F Y',strtotime($element->dec_created_at)) }}</a>
                                        <h6>{{ $element->comment_user->m_name }}</h6>
                                        <p>{{ $element->dec_comment_text }}</p>
                                        @if (Auth::user() != null)
                                        {{-- <div class="d-flex align-items-center">
                                            <a href="#" class="reply">Reply</a>
                                        </div> --}}
                                        @endif
                                    </div>
                                </div>

                            @foreach ($element->d_event_comment_dt as $element1)
                                <ol class="children">
                                    <li class="single_comment_area">
                                        <div class="comment-content d-flex">
                                            <div class="comment-author">
                                                <img 
                                                    @if ($element->comment_user->m_image == null || $element->comment_user->m_image == '')
                                                        src="{{ asset('../assets_frontend/img/core-img/img_kosong.jpg') }}"
                                                    @else
                                                        src="{{ asset('../storage/app/'.$element->comment_user->m_image ) }}"
                                                    @endif>
                                            </div>
                                            <div class="comment-meta">
                                                <a href="#" class="comment-date">{{ date('d F Y',strtotime($element1->dect_created_at)) }}</a>
                                                <h6>{{ $element1->comment_user->m_name }}</h6>
                                                <p>{{ $element1->dect_comment_text }}</p>
                                                @if (Auth::user() != null)
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="reply">Reply</a>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                             @endforeach
                            </li>
                        </ol>
                        @endforeach
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                        <div class="single-sidebar-widget">
                            <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
                        </div>
                        <div class="single-sidebar-widget p-30">
                            <div class="section-heading">
                                <h5>Newsletter</h5>
                            </div>
                            <div class="newsletter-form">
                                <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                                <form action="#" method="get">
                                    <input type="search" name="widget-search" placeholder="Enter your email">
                                    <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('extra_scripts')
<script type="text/javascript">
    $( window ).load(function() {
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
         $.ajax({
            type       : "post",
            processData: false,
            contentType: false,
            url        :baseUrl+'/event/event_detail/viewer_update?&id='+('{{ $data->e_id }}'),
            success:function(data){
                
            }
        });
    });
    function button_like(argument) {
        if (cek_akses == null || cek_akses == ''){
            alert('harap login terlebih dahulu');
            return false;
        }
        $.ajax({
            type: "get",
            url :'{{ route('event_detail_like') }}',
            data: '&event='+('{{ $data->e_id }}')+'&creator='+('{{ $data->e_created_by }}'),
            success:function(data){
            if (data.status_like == 'plus') {
                $('.color_like').css('color','#f1c40f');
            }else{
                $('.color_like').css('color','#777777');
            }
            $('.drop_total_like').html(data.total_like);
          }
        });
    }
    function button_interest(argument) {
        if (cek_akses == null || cek_akses == ''){
            alert('harap login terlebih dahulu');
            return false;
        }
        $.ajax({
            type: "get",
            url :'{{ route('event_detail_interest') }}',
            data: '&event='+('{{ $data->e_id }}')+'&creator='+('{{ $data->e_created_by }}'),
            success:function(data){
            if (data.status_interest == 'plus') {
                $('.color_interest').css('color','#f1c40f');
            }else{
                $('.color_interest').css('color','#777777');
            }
            $('.drop_total_interest').html(data.total_interest);
          }
        });
    }
    function comments(argument) {
        var message = $('.comment_message').val();
        if (message == '') {
            alert('Komentar tidak boleh kosong')
            return false;
        }
        $.ajax({
            type:"get",
            url :'{{ route('event_detail_comment') }}',
            data:'&event='+('{{ $data->e_id }}')+'&creator='+('{{ $data->e_created_by }}')+'&message='+message,
            processData: false,
            contentType: false,
            success:function(data){

                if (data.comment_user.m_image == '' || data.comment_user.m_image == null ) {
                    var image = baseUrl+'/../assets_frontend/img/core-img/img_kosong.jpg'; 
                }else{
                    var image = baseUrl+'/../storage/app/'+data.comment_user.m_image;
                }

                $('.drop_comment').append(
                    '<div class="comment-content d-flex">'+
                        '<div class="comment-author">'+
                            '<img src="'+image+'">'+
                        '</div>'+
                        '<div class="comment-meta">'+
                            '<a href="#" class="comment-date">'+data.comment_date+'</a>'+
                            '<h6>'+data.comment_user.m_name+'</h6>'+
                            '<p>'+data.comment_text+'</p>'+
                            '<div class="d-flex align-items-center">'+
                                '<a href="#" class="reply">Reply</a>'+
                            '</div>'+
                        '</div>'+
                    '</div>'
                );
                $('.comment_message').val('');
            }
        });
    }
    function comment_form(argument) {
        $('.drop_comment').html(
        '<br>'+
        '<textarea class="form-control" name="drdt_message_'+argument+'" id="drdt_message_'+argument+'" placeholder="Write your response ..."></textarea>'+
        '<br>'+
        '<button type="button" class="btn btn-sm btn-primary reply_comment_'+argument+'" onclick="reply_data('+argument+')"><i class="fas fa-share"></i> Reply</button>');  
    }
    function reply_comment(argument) {
        var message = $('#drdt_message_'+argument).val();
        var dr_rated_by = $('.dr_rated_by').val();
        // alert(argument);
        if (message == '') {
            iziToast.warning({
                    icon: 'fa fa-info-circle',
                    position:'topRight',
                    title: 'Warning!',
                    message: 'Response Tidak Boleh Kosong!',
                });
            return false;
        }
        $.ajax({
            type: "get",
            url:'{{ route('event_detail_comment') }}',
            processData: false,
            contentType: false,
          success:function(data){
            $('.drop_here').html(data);
          }
        });
    }
</script>
@endsection
