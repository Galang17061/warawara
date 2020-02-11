@extends('layouts_frontend._main')

@section('extra_style')
<style type="text/css">
  body{
    background-color: #ececec !important;
  }
  .red_color {
    color: red;
  }
  .tab-content>.active{
    background-color: white !important;
  }
</style>
@endsection
@section('content')
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/41.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>{{ $data->ds_name }}</h2>
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
                            <li class="breadcrumb-item active" aria-current="page">Toko </li>
                            <li class="breadcrumb-item active" aria-current="page"> {{ $data->ds_name }}</li>
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
                          <div class="col-12 col-lg-12 mb-50">
                              <div class="row">
                                <div class="col-12 col-lg-5 col-md-12 col-sm-12 mb-50" style="  background-color: white;padding: 20px">
                                  <div>
                                      <img class="expandedImg" src="{{ asset('/storage/app/'.$data->d_shop_image[0]->dsi_name) }}" width="400px" height="400px">
                                    </div>
                                  @foreach ($data->d_shop_image as $index => $element)
                                    <img class="list_image" src="{{ asset('/storage/app/'.$element->dsi_name) }}" width="100px" height="100px" onclick="myFunction('{{ asset('/storage/app/'.$element->dsi_name) }}');">
                                  @endforeach
                                  
                                </div>
                                <div class="col-12 col-lg-7 col-md-12 col-sm-12 mb-50">
                                  <h1>
                                    {{ $data->ds_name }}
                                  </h1>
                                  <br>  
                                  <i class="fa fa-star red_color" ></i>
                                  <i class="fa fa-star red_color" ></i>
                                  <i class="fa fa-star red_color" ></i>
                                  <i class="fa fa-star red_color" ></i>
                                  <i class="fa fa-star red_color" ></i>
                                  <br>  
                                  <br>  
                                      <h2>
                                        @if ($data->ds_discount != null || $data->ds_discount != '')
                                        <f class="mr-3" style="text-decoration:line-through;color: red">Rp. {{ number_format($data->ds_price,0,'.',',') }}</f>
                                        <b style="">Rp. {{ number_format($data->ds_discount,0,'.',',') }}</b>
                                        @else
                                        <b class="mr-3" style="">Rp. {{ number_format($data->ds_price,0,'.',',') }}</b>
                                        @endif
                                      </h2>
                                        {{-- <f class="mr-3" style="text-decoration:line-through;color: red">Rp. {{ number_format($data->ds_price,0,'.',',') }}</f> --}}
                                        {{-- <b style="">Rp. {{ number_format($data->ds_discount,0,'.',',') }}</b></h2> --}}
                                    <p>
                                      {{-- Tokoh: Rama & Shinta --}}
                                    </p>
                                  {{-- <p>Gagrag: Surakarta</p>
                                  <p> Wayang-Store berusaha memberikan produk dan pelayanan yang berkualitas. Kepuasan pelanggan adalah prioritas bagi kami. Jika Anda tidak menemukan tokoh atau produk yang Anda cari, silakan menghubungi kami.</p> --}}
                                  <br>
                                  <button class="btn btn-primary">BELI SEKARANG</button>
                                  <a target="_blank" class="btn btn-success" href="https://wa.me/082140644679?text=hai%20admin"><i class="fa fa-phone"></i>&nbsp; Via WhatsApp</a>
                                </div>

                                <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-50">
                                  <ul class="nav nav-tabs nav-justified">
                                      <li class="nav-item">
                                          <a class="nav-link active show" data-toggle="tab" href="#deskripsi"><i class="fa fa-play"></i>  &nbsp;Deskripsi</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" data-toggle="tab" href="#review"><i class="fa fa-play"></i>  &nbsp;Review</a>
                                      </li>
                                  </ul>
                                  <div class="tab-content">
                                    <div class="tab-pane container-fluid fade active show" id="deskripsi" style="min-height: 450px;">
                                        <br>
                                        <h3>Deskripsi</h3>
                                        {!! $data->ds_desc_bottom !!}
                                    </div>
                                    <div class="tab-pane container-fluid fade" id="review" style="min-height: 450px;">

                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>

                      </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_scripts')
<script type="text/javascript">
 function myFunction(imgs) {
  $('.expandedImg').attr("src", imgs);
}
</script>
@endsection