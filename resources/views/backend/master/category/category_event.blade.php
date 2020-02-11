@extends('layouts_backend._main')

@section('content')
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Master</span>
                            <span class="breadcrumb-item active">Kategori event</span>
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
                        Master Kategori Event
                    </h6>
                    <span class="text-muted d-block">Menambah data kategori pada event</span>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card border-teal-400">
                            <div class="card-header bg-teal-400 text-white header-elements-inline">
                                <h6 class="card-title">List Kategori event</h6>
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
                                            <th></th>
                                            <th></th>
                                            <th>Nama</th>
                                            <th>Icon</th>
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

                          <input type="hidden" name="ce_id" class="ce_id">


                           <div class="form-group">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <label>Nama</label>
                                    <input type="text" name="ce_name" placeholder="nama kategori" class="form-control remove_value ce_name">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <label>Ikon</label>
                                    <input type="text" name="ce_icon" placeholder="ikon kategori" class="form-control remove_value ce_icon">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <label>Link kategori</label>
                                    <input type="text" name="ce_href" placeholder="href/link kategori" class="form-control remove_value ce_href">
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
    // var tables = ;
  $(document).ready(function() {
    var table = $('.table_datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
          url:'{{ route('category_event_datatable') }}',
          error:function(){
            table.DataTable().ajax.reload();
          }
      },
      columns: [
        // HIDDEN DATA
        {data: 'ce_id', name: 'ce_id',class:'id_td'},
        {data: 'ce_icon', name: 'ce_icon',class:'ce_icon_td'},
        {data: 'ce_href', name: 'ce_href',class:'ce_href_td'},
        // SHOWING DATA
        {data: 'ce_name', name: 'ce_name',class:'name_td'},
        {
          sortable: false,
          "render": function ( data, type, full, meta ) {
            var buttonID = full.ce_icon;
            return '<i class="'+buttonID+'"></i>';
          }
        },
      ],
      columnDefs:[{
         targets:0, 
         visible:false
        },{
         targets:1, 
         visible:false
        },{
         targets:2, 
         visible:false
        },{
         targets: 5, 
         defaultContent : "<button type='button' class='btn btn-info rounded-round edit_button' style='width: 35px;padding-left: 8px;'><i class='fas fa-pen fa-lg'></i></button> <button type='button' class='btn btn-danger rounded-round mr-2 delete_button' style='width: 35px;padding-left: 8px;'><i class='fas fa-trash'></i></button>"
        },]
    });

      $('.table_datatable tbody').on( 'click', '.edit_button', function () {
          var parent   = $(this).closest("tr");
          var data = $('.table_datatable').DataTable().row(parent).data();
          $('.ce_id').val(data['ce_id']);
          $('.ce_name').val(data['ce_name']);
          $('.ce_icon').val(data['ce_icon']);
          $('.ce_href').val(data['ce_href']);
          $('.btn_replace').html('<button type="button" class="btn bg-teal-600" onclick="update()">Update changes</button>');
          $('#modal').modal('show');
      });

      $('.table_datatable tbody').on( 'click', '.delete_button', function () {
          var parent   = $(this).closest("tr");
          var data = $('.table_datatable').DataTable().row(parent).data();
          $.ajax({
              url:"{{ route('category_event_delete') }}",
              data: {'id':data['ce_id']},
              success:function(data){
                if (data.status == 'sukses') {
                    $('#modal').modal('hide');
                    $('.table_datatable').DataTable().ajax.reload();
                    iziToast.error({position: 'topRight',title: 'Data Telah Terhapus'});
                }
              }
          });
      });

    });

    $('.add_button').click(function(){
        $('.remove_value').val('');
        $('.btn_replace').html('<button type="button" onclick="save()" class="btn bg-teal-600">Save changes</button>');
    })

    function save(argument) {
         $.ajax({
            type: "get",
            url:"{{ route('category_event_save') }}",
            data: $('.form-save').serialize(),
            success:function(data){
              if (data.status == 'sukses') {
                    $('#modal').modal('hide');
                    $('.table_datatable').DataTable().ajax.reload();
                    iziToast.success({position: 'topRight',title: 'Data Telah Tersimpan'});
              }
            }
        });
    }
    function update(argument) {
         $.ajax({
            type: "get",
            url:"{{ route('category_event_update') }}",
            data: $('.form-save').serialize(),
            success:function(data){
              if (data.status == 'sukses') {
                    $('#modal').modal('hide');
                    $('.table_datatable').DataTable().ajax.reload();
                    iziToast.success({position: 'topRight',title: 'Data Telah Diperbarui'});
              }
            }
        });
    }
</script>
@endsection