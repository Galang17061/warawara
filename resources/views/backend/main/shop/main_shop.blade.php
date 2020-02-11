@extends('layouts_backend._main')

@section('extra_style')
<style type="text/css">
  
  .center{
    text-align: center;
  }  

</style>
@endsection

@section('content')
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Main</span>
                            <span class="breadcrumb-item active">Main Toko</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
            </div>
            <!-- Content area -->
            <div class="content">
                <div class="mb-3">
                    <h6 class="mb-0 font-weight-semibold">
                        Main Toko
                    </h6>
                    <span class="text-muted d-block">Menambah data Toko</span>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card border-teal-400">
                            <div class="card-header bg-teal-400 text-white header-elements-inline">
                                <h6 class="card-title">List Toko</h6>
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
                                            <th>Barang</th>
                                            <th>Harga</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
            
@endsection

@section('extra_script')
<script type="text/javascript">
  $(document).ready(function() {
    var table = $('.table_datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
          url:'{{ route('main_shop_datatable') }}',
          error:function(){
            table.DataTable().ajax.reload();
          }
      },
      columns: [
        {data: 'ds_name', name: 'ds_name'},
        // {data: 'ds_price', name: 'ds_price'},
        {
          sortable: false,
          "render": function ( data, type, full, meta ) {
            var harga_awal     = full.ds_price;
            if (full.ds_discount_status == 'YA') {
              var harga_diskon = full.ds_discount;
            }else{
              var harga_diskon = '-';
            }
            return '<table>'+
                      '<tr>'+
                        '<th>Harga Awal</th>'+
                        '<td>'+harga_awal+'</td>'+
                      '</tr>'+
                      '<tr>'+
                        '<th>Harga Diskon</th>'+
                        '<td>'+harga_diskon+'</td>'+
                      '</tr>'+
                   '</table>';
          }
        },
      ],
      columnDefs:[{
         targets: 2, 
         defaultContent : "<button type='button' class='btn btn-info rounded-round edit_button' style='width: 35px;padding-left: 8px;'><i class='fas fa-pen fa-lg'></i></button> <button type='button' class='btn btn-danger rounded-round mr-2 delete_button' style='width: 35px;padding-left: 8px;'><i class='fas fa-trash'></i></button>"
        },]
    });

      $('.table_datatable tbody').on( 'click', '.edit_button', function () {
          var parent   = $(this).closest("tr");
          var data = $('.table_datatable').DataTable().row(parent).data();
          location.href=baseUrl+'/main/main_news/edit?&id='+data['n_id']+'&time='+('{{ time() }}');

      });

      $('.table_datatable tbody').on( 'click', '.delete_button', function () {
          var parent   = $(this).closest("tr");
          var data = $('.table_datatable').DataTable().row(parent).data();
          $.ajax({
              url:"{{ route('main_shop_delete') }}",
              data: {'id':data['n_id']},
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
      location.href='{{ route('main_shop_create') }}';
    }
</script>
@endsection