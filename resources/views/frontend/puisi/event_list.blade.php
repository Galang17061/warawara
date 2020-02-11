@extends('layouts_frontend._main')
@section('extra_style')
<style type="text/css">
    .center-cropped {
        height: 150px;
        overflow: hidden;
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
    .datepicker{
        font-size: small !important;
    }
</style>
@endsection
@section('content')
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/41.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Event List</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            {{-- <li class="breadcrumb-item"><a href="#">Daftar Event</a></li> --}}
                            <li class="breadcrumb-item active" aria-current="page">Daftar Event </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="featured-video-posts">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow" style="padding: 30px">
                            <h5>Cari Bedasarkan :</h5>
                            <select class="form-control value_cari kategori">
                                <option value="">- Pilih Kategori -</option>
                                @foreach ($category as $element)
                                    <option value="{{ $element->ce_id }}">{{ $element->ce_name }}</option>
                                @endforeach
                            </select>
                            <input type="text" style="padding: 25px !important" placeholder="Dari Tanggal" class="form-control tgl_awal datepicker value_cari" name="">
                            <input type="text" style="padding: 25px !important" placeholder="Sampai Tanggal" class="form-control tgl_akir datepicker value_cari" name="">
                    </div>
                </div>
                <div class="col-12 col-xl-8">
                    <div class="drop">
                        @include('frontend.event.event_list_result_render')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_scripts')
<script type="text/javascript">
    $(document).ready(function(){

     $(document).on('click', '.pagination a', function(event){
      event.preventDefault(); 
      var page = $(this).attr('href').split('page=')[1];
      fetch_data(page);
     });

     function fetch_data(page)
     {
        var kategori = $('.kategori').val();
        var tgl_awal = $('.tgl_awal').val();
        var tgl_akir = $('.tgl_akir').val();
      $.ajax({
       url:baseUrl+"/event/event_list/fetch_data?page="+page+'&kategori='+kategori+'&tgl_awal='+tgl_awal+'&tgl_akir='+tgl_akir,
       success:function(data)
       {
        $('.drop').html(data);
       }
      });
     }
     
    });

    $('.value_cari').change(function (argument) {
        var kategori = $('.kategori').val();
        var tgl_awal = $('.tgl_awal').val();
        var tgl_akir = $('.tgl_akir').val();
        $.ajax({
            type : "get",
            url  : '{{ route('event_list_search') }}',
            data : '&kategori='+kategori+'&tgl_awal='+tgl_awal+'&tgl_akir='+tgl_akir,
            processData: false,
            contentType: false,
            success:function(data){
                $('.drop').html(data);
            }
        });
    })
</script>
@endsection

