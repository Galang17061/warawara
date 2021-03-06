@extends('layouts_backend._main')
@section('content')
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Main</span>
                            <span class="breadcrumb-item active">Tambahkan puisi</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <div class="content">
              <div class="row">
                  <div class="col-md-12">

                    <!-- Basic layout-->
                    <div class="card">
                      <div class="card-header header-elements-inline">
                        <h5 class="card-title">Tambah puisi</h5>
                        <div class="header-elements">
                          <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <form class="save" >
                          @csrf
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Judul</label>
                            <div class="col-lg-9">
                              <input type="text" class="form-control" name="dp_title">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Karya Oleh</label>
                            <div class="col-lg-9">
                              <input type="text" class="form-control" name="dp_karya">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Gambar</label>
                            <div class="col-lg-9">
                              <input type="file" class="dropify" name="dp_image"/>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Isi puisi:</label>
                                <div id="example"></div>
                              </div>
                            </div>
                          </div>
                          <div class="text-right">
                            <button type="button" onclick="save()" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- /basic layout -->

                  </div>
              </div>
            </div>
      
            
@endsection

@section('extra_script')
<script type="text/javascript">
  $(document).ready(function() {
    var editor = new FroalaEditor('#example',{
      height: 300
    });
  });
  $(document).ready(function() {
    $('.datepicker').datepicker({
      format: 'dd-MM-yyyy',
      autoclose:true,
      language:'id',
    });
  });
  $('.dropify').dropify();
  function save(argument) {
    var text = $('.fr-element').html();
    var form   = $('.save');
    formdata = new FormData(form[0]);
    formdata.append('n_content',text);

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.ajax({
          type: "post",
          url: '{{ route('main_puisi_save') }}',
          data: formdata ? formdata : form.serialize(),
          processData: false,
          contentType: false,
          success:function(data){
            if (data.status == 'sukses') {
                iziToast.success({
                    icon: 'fa fa-save',
                    position:'topRight',
                    title: 'Success!',
                    message: 'Data Berhasil Disimpan!',
                });
                location.reload();

            }
          }
      });
  }
                  
</script>
@endsection