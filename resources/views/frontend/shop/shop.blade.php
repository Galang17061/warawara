@extends('layouts_frontend._main')

@section('extra_style')
<style type="text/css">
  body{
    background-color: #ececec !important;
  }
  .center-cropped {
        height: 150px;
        overflow: hidden;
        margin: 10px;
        position: relative;
        border-radius: 25px;
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
</style>
@endsection
@section('content')
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/41.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Toko</h2>
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
                            <li class="breadcrumb-item active" aria-current="page">Toko</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-12">
                  <div class="featured-video-posts">
                      <div class="row">
                        @foreach ($data as $element)
                          <div class="col-12 col-lg-3 mb-50 hover_change hover_change_{{ $element->ds_id }}" {{-- onmouseover="hovers({{ $element->ds_id }})" --}} style="background-color: white;padding: 15px; margin: 30px">
                              <div class="single-featured-post">
                                  <div class="post-thumbnail center-cropped">
                                      <img src="{{ asset('/storage/app/'.$element->d_shop_image[0]->dsi_name) }}" alt="" class="imgg">
                                  </div>
                                  <div class="post-content">
                                      <br>
                                      <a href="{{ route('shop_detail',['id'=>$element->ds_id]) }}" class="post-title" style="font-size:18px !important">{{ $element->ds_name }}</a>
                                  </div>
                                  <div class="post-meta ">
                                        @if ($element->ds_discount != null || $element->ds_discount != '')
                                        <f class="mr-3" style="font-size: 15px;text-decoration:line-through;color: red">Rp. {{ number_format($element->ds_price,0,'.',',') }}</f>
                                        <b style="font-size: 15px">Rp. {{ number_format($element->ds_discount,0,'.',',') }}</b>
                                        @else
                                        <b class="mr-3" style="font-size: 15px;">Rp. {{ number_format($element->ds_price,0,'.',',') }}</b>
                                        @endif
                                      </b>
                                  </div>
                              </div>
                          </div>
                        @endforeach
                      </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_scripts')
<script type="text/javascript">
 $('.hover_change').mouseout(function (argument) {
    $(this).css('border','5px solid yellow');
 })
 $('.hover_change').mouseleave(function (argument) {
    $(this).css('border','none');
 })
</script>
@endsection