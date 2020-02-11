@extends('layouts_backend._main')

@section('content')
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Master</span>
                            <span class="breadcrumb-item active">Setting Carousel</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">
                <div class="mb-3">
                    <h6 class="mb-0 font-weight-semibold">
                        Master Setting Carousel
                    </h6>
                    <span class="text-muted d-block">Menambah data Slider</span>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card border-teal-400">
                            <div class="card-header bg-teal-400 text-white header-elements-inline">
                                <h6 class="card-title">List Setting Carousel</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <button class="list-icons-item btn btn-sm btn-info add_button pt-7" data-toggle="modal" data-target="#modal"><i class="fas fa-plus-circle"></i> Tambah</button>
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <table class="table table_datatable">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Judul</th>
                                            <th>Posisi</th>
                                            <th>Gambar</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /dashboard content -->

            </div>
            <!-- /content area -->
            <form class="form-save">
               <div id="modal" class="modal fade" tabindex="-1">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header bg-teal-300">
                           <h5 class="modal-title">Form Data</h5>
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">

                          <input type="hidden" name="cn_id" class="cn_id">


                           <div class="form-group">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <label>Judul</label>
                                    <input type="text" name="msc_title" placeholder="nama kategori" class="form-control remove_value msc_title">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <label>Posisi</label>
                                    <input type="text" name="msc_position" placeholder="nama kategori" class="form-control remove_value msc_position">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-lg-12">
                                  <label>Gambar:</label>
                                  <input type="file" class="msc_image" data-height="300" name="msc_image"/>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-link text-primary" data-dismiss="modal">Close</button>
                           <div class="btn_replace">
                           </div>
                           {{-- <button type="button" class="btn bg-teal-600">Save changes</button> --}}
                        </div>
                     </div>
                  </div>
               </div>
            </form>
            
@endsection

@section('extra_script')
<script type="text/javascript">
    var table = $('.table_datatable');
  $(document).ready(function() {
    table.DataTable({
      processing: true,
      serverSide: true,
      ajax: {
          url:'{{ route('setting_carousel_datatable') }}',
          error:function(){
            table.DataTable().ajax.reload();
          }
      },
      columns: [
        // HIDDEN DATA
        {data: 'msc_id', name: 'msc_id',class:'id_td'},
        // SHOWING DATA
        {data: 'msc_title', name: 'msc_title',class:'name_td'},
        {data: 'msc_position', name: 'msc_position',class:'name_td'},
        {
          class:'center',
          sortable: false,
          "render": function ( data, type, full, meta ) {
            var image = full.msc_image+'?'+('{{ time() }}');
            return '<img src="'+baseUrl+'/storage/app/'+image+'" height="100" >';
          },
        },
      ],
      columnDefs:[{
         targets:0, 
         visible:false
        },{
         targets: 4, 
         defaultContent : "<button type='button' class='btn btn-info rounded-round edit_button' style='width: 35px;padding-left: 8px;'><i class='fas fa-pen fa-lg'></i></button> <button type='button' class='btn btn-danger rounded-round mr-2 delete_button' style='width: 35px;padding-left: 8px;' onclick='delete_button()'><i class='fas fa-trash'></i></button>"
        },]
    });

      $('.table_datatable tbody').on( 'click', '.edit_button', function () {
          var parent   = $(this).closest("tr");
          var data     = table.DataTable().row(parent).data();
          $('.msc_title').val(data['msc_title']);
          $('.msc_position').val(data['msc_position']);
         //  $(".msc_image").addClass('dropify');
          $(".msc_image").attr("data-height", 300);
         //  $('.msc_image').attr("data-default-file",baseUrl+'/storage/app/'+data['msc_image']);
         // var drEvent = $('.msc_image').dropify();
         var drEvent = $('.msc_image').dropify();
          drEvent = drEvent.data('dropify');
          drEvent.resetPreview();
          drEvent.clearElement();
          drEvent.settings.defaultFile = baseUrl+'/storage/app/'+data['msc_image'];
          drEvent.destroy();
          drEvent.init();
          $('.dropify.msc_image').dropify({
          defaultFile: baseUrl+'/storage/app/'+data['msc_image'],
          });
          $('.btn_replace').html('<button type="button" class="btn bg-teal-600" onclick="update()">Update changes</button>');
          $('#modal').modal('show');
      });

      $('.table_datatable tbody').on( 'click', '.delete_button', function () {
          var parent   = $(this).closest("tr");
          var data = table.DataTable().row(parent).data();
          $.ajax({
              url:"{{ route('setting_carousel_delete') }}",
              data: {'id':data['msc_id']},
              success:function(data){
                if (data.status == 'sukses') {
                    $('#modal').modal('hide');
                    table.DataTable().ajax.reload();
                    iziToast.error({position: 'topRight',title: 'Data Telah Terhapus'});
                }
              }
          });
      });

    });
  $(document).ready(function() {
    $('.add_button').click(function(){
         var drEvent = $('.msc_image').dropify();
          drEvent = drEvent.data('dropify');
          drEvent.resetPreview();
          drEvent.clearElement();
          drEvent.settings.defaultFile = '';
          drEvent.destroy();
          drEvent.init();
          $('.dropify.msc_image').dropify({
          defaultFile: '',
          });
     
        $('.remove_value').val('');
        $('.btn_replace').html('<button type="button" onclick="save()" class="btn bg-teal-600">Save changes</button>');
    })
    })

    function save(argument) {
        var form   = $('.form-save');
        formdata = new FormData(form[0]);
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          
          $.ajax({
              type: "post",
              url: "{{ route('setting_carousel_save') }}",
              data: formdata ? formdata : form.serialize(),
              processData: false,
              contentType: false,
              success:function(data){
                if (data.status == 'sukses') {
                      $('#modal').modal('hide');
                      table.DataTable().ajax.reload();
                      iziToast.success({position: 'topRight',title: 'Data Telah Tersimpan'});
                }
              }
          });

    }
    function update(argument) {
         $.ajax({
            type: "get",
            url:"{{ route('setting_carousel_update') }}",
            data: $('.form-save').serialize(),
            success:function(data){
              if (data.status == 'sukses') {
                    $('#modal').modal('hide');
                    table.DataTable().ajax.reload();
                    iziToast.success({position: 'topRight',title: 'Data Telah Diperbarui'});
              }
            }
        });
    }
    function update(argument) {
         $.ajax({
            type: "get",
            url:"{{ route('setting_carousel_delete') }}",
            data: $('.form-save').serialize(),
            success:function(data){
              if (data.status == 'sukses') {
                    $('#modal').modal('hide');
                    table.DataTable().ajax.reload();
                    iziToast.error({position: 'topRight',title: 'Data Telah Terhapus'});
              }
            }
        });
    }
</script>
@endsection