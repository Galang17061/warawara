@extends('layouts_backend._main')

@section('content')
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Main</span>
                            <span class="breadcrumb-item active">Main Event</span>
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
                        Main Event
                    </h6>
                    <span class="text-muted d-block">Menambah data event</span>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card border-teal-400">
                            <div class="card-header bg-teal-400 text-white header-elements-inline">
                                <h6 class="card-title">List event</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <button class="list-icons-item btn btn-sm btn-info add_button pt-7" onclick="tambah()"><i class="fas fa-plus-circle"></i> Tambah</button>
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <table class="table table_datatable">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Jam & Tanggal</th>
                                            <th>Advance Information</th>
                                            <th>Poster</th>
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
      
            
@endsection

@section('extra_script')
<script type="text/javascript">
    // var tables = ;
  $(document).ready(function() {
    var table = $('.table_datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
          url:'{{ route('main_event_datatable') }}',
          error:function(){
            table.DataTable().ajax.reload();
          }
      },
      columns: [
        {data: 'e_title', name: 'e_title'},
        {
          sortable: false,
          "render": function ( data, type, full, meta ) {
            var start_date = full.e_start_date;
            var end_date   = full.e_end_date;
            var start_time = full.e_start_time;
            var end_time   = full.e_end_time;
            return '<table class="table table-striped">'+
                      '<tr>'+
                        '<td colspan="2">Tanggal Pelaksanaan</td>'+
                      '</tr>'+
                      '<tr>'+
                        '<td colspan="2"><b>'+moment(start_date).format('LL')+'</b> s/d <b>'+moment(end_date).format('LL')+'</b></td>'+
                      '</tr>'+
                      '<tr>'+
                        '<td colspan="2">Jam Pelaksanaan</td>'+
                      '</tr>'+
                      '<tr>'+
                        '<td><b>'+start_time+'</b> S/d <b>'+end_time+'</b></td>'+
                      '</tr>'+
                   '</table>';
          }
        },
          {
          "render": function ( data, type, full, meta ) {
            var status = full.e_type;
            var location = full.e_location;
            var a;
            var category = full.m_category_event.ce_name;
            if (status == 'PUBLISH') {
              a = '<span class="badge bg-blue">TERPUBLISH</span><br>';
            }else{
              a = '<span class="badge bg-orange">DRAFT</span><br>';
            }
            return '<table class="table table-striped">'+
                      '<tr>'+
                        '<th>Status</th>'+
                        '<th>Kategori</th>'+
                      '</tr>'+
                      '<tr>'+
                        '<td>'+a+'</td>'+
                        '<td>'+category+'</td>'+
                      '</tr>'+
                      '<tr>'+
                        '<th colspan="2">Lokasi</th>'+
                      '</tr>'+
                      '<tr>'+
                        '<td colspan="2">'+location+'</td>'+
                      '</tr>'+
                   '</table>';
          }
        },
        {
          class:'center',
          sortable: false,
          "render": function ( data, type, full, meta ) {
            var image = full.e_poster+'?'+('{{ time() }}');
            return '<img src="'+baseUrl+'/storage/app/'+image+'?'+{{ time() }}+'" height="100" >';
          },
        },
        
      ],
      columnDefs:[{
         targets: 4, 
         defaultContent : "<button type='button' class='btn btn-info rounded-round edit_button' style='width: 35px;padding-left: 8px;'><i class='fas fa-pen fa-lg'></i></button> <button type='button' class='btn btn-danger rounded-round mr-2 delete_button' style='width: 35px;padding-left: 8px;'><i class='fas fa-trash'></i></button>"
        },]
    });

      $('.table_datatable tbody').on( 'click', '.edit_button', function () {
          var parent   = $(this).closest("tr");
          var data = $('.table_datatable').DataTable().row(parent).data();
          // data['e_id'];
          location.href=baseUrl+'/main/main_event/edit?&id='+data['e_id'];

      });

      $('.table_datatable tbody').on( 'click', '.delete_button', function () {
          var parent   = $(this).closest("tr");
          var data = $('.table_datatable').DataTable().row(parent).data();
          $.ajax({
              url:"{{ route('main_event_delete') }}",
              data: {'id':data['e_id']},
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

   
    function tambah() {
      location.href=baseUrl+'/main/main_event/create';
    }
</script>
@endsection