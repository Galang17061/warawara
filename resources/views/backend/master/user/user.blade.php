@extends('layouts_backend._main')

@section('content')
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Master</span>
                            <span class="breadcrumb-item active">User</span>
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
                        Master User
                    </h6>
                    <span class="text-muted d-block">Menambah data user</span>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card border-teal-400">
                            <div class="card-header bg-teal-400 text-white header-elements-inline">
                                <h6 class="card-title">List User</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <button class="list-icons-item btn btn-sm btn-info add_button pt-7" data-toggle="modal" data-target="#modal" onclick="tambah()"><i class="fas fa-plus-circle"></i> Tambah</button>
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body table-responsive">
                                <table class="table table_datatable">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Gambar</th>
                                            <th>Data</th>
                                            <th>Aksi</th>
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
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="modal-header bg-teal-300">
                           <h5 class="modal-title">Form Data</h5>
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">

                          <div class="card-body">
                            <form action="#">
                              <div class="row">
                                <div class="col-md-6">
                                  <fieldset>
                                      <input type="hidden" class="form-control  m_id" name="m_id" placeholder="Nama">

                                    <div class="form-group">
                                      <label>Nama:</label>
                                      <input type="text" class="form-control  m_name" name="m_name" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                      <label>Username:</label>
                                      <input type="text" class="form-control  m_username" name="m_username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                      <label>Password:</label>
                                      <input type="password" class="form-control  m_password" required="" name="m_password" placeholder="Password">
                                    </div>
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="form-group">
                                          <label>Email:</label>
                                          <input type="text" name="m_email" placeholder="email" class="form-control  m_email">
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Telp:</label>
                                          <input type="text" name="m_phone" placeholder="Ring street 12" class="form-control  m_phone">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Kota:</label>
                                          <input type="text" name="m_city" placeholder="Munich" class="form-control  m_city">
                                        </div>
                                      </div>
                                      <div class="col-md-8">
                                        <div class="form-group">
                                          <label>Alamat:</label>
                                          <input type="text" name="m_address" placeholder="Ring street 12" class="form-control  m_address">
                                        </div>
                                      </div>
                                    </div>
                                  </fieldset>
                                </div>

                                <div class="col-md-6">
                                  <fieldset>
                                    <div class="form-group">
                                      <label>Password:</label>
                                      <input type="file" class="dropify m_image" name="m_image"/>
                                    </div>
                                    
                                    <div class="form-group">
                                      <label>Deskripsi:</label>
                                      <textarea rows="5" cols="5" class="form-control  m_desc" name="m_desc" placeholder="Enter your message here"></textarea>
                                    </div>
                                  </fieldset>
                                </div>
                              </div>
                            </form>
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
  $('.dropify').dropify();
    var table = $('.table_datatable');
  $(document).ready(function() {
    table.DataTable({
      processing: true,
      serverSide: true,
      ajax: {
          url:'{{ route('user_datatable') }}',
          error:function(){
            table.DataTable().ajax.reload();
          }
      },
      columns: [
        // HIDDEN DATA
        {data: 'm_id', name: 'm_id',class:'id_td'},
        // SHOWING DATA
        {data: 'm_name', name: 'm_name',class:'name_td'},
        {data: 'm_username', name: 'm_username',class:'username_td'},
        {data: 'm_email', name: 'm_email',class:'email_td'},
        {data: 'm_phone', name: 'm_phone',class:'phone_td'},
        {
          class:'center',
          sortable: false,
          "render": function ( data, type, full, meta ) {
            var image = full.m_image;
            return '<img src="'+baseUrl+'/storage/app/'+image+'" height="100" >';
          },
        },
        {
          sortable: false,
          "render": function ( data, type, full, meta ) {
            var login  = moment(full.m_lastlogin).format('LLL');
            if (login == 'Invalid date') {
              login = '';
            }else{
              login = login;
            }
            var logout = moment(full.m_lastlogout).format('LLL');
            if (logout == 'Invalid date') {
              logout = '';
            }else{
              logout = logout;
            }
            return '<table>'+
                      '<tr>'+
                        '<th>Login Terakir</th>'+
                        '<th>Out Terakir</th>'+
                      '</tr>'+
                      '<tr>'+
                        '<td>'+login+'</td>'+
                        '<td>'+logout+'</td>'+
                      '</tr>'+
                   '</table>';
          }
        },
      ],
      columnDefs:[{
         targets:0, 
         visible:false
        },{
         targets: 7, 
         defaultContent : "<button type='button' class='btn btn-info rounded-round edit_button' style='width: 35px;padding-left: 8px;'><i class='fas fa-pen fa-lg'></i></button> <button type='button' class='btn btn-danger rounded-round mr-2 delete_button' style='width: 35px;padding-left: 8px;'><i class='fas fa-trash'></i></button>"
        },]
    });

      $('.table_datatable tbody').on( 'click', '.edit_button', function () {
          var parent   = $(this).closest("tr");
          var data     = table.DataTable().row(parent).data();
          $('.m_id').val(data['m_id']);
          $('.m_name').val(data['m_name']);
          $('.m_username').val(data['m_username']);
          $('.m_email').val(data['m_email']);
          $('.m_phone').val(data['m_phone']);
          $('.m_city').val(data['m_city']);
          $('.m_address').val(data['m_address']);
          $(".m_image").attr("data-height", 300);
           var drEvent = $('.m_image').dropify();
          drEvent = drEvent.data('dropify');
          drEvent.resetPreview();
          drEvent.clearElement();
          drEvent.settings.defaultFile = baseUrl+'/storage/app/'+data['m_image'];
          drEvent.destroy();
          drEvent.init();
          $('.dropify.m_image').dropify({
            defaultFile: baseUrl+'/storage/app/'+data['m_image'],
          });
          $('.m_desc').val(data['m_desc']);
          $('.btn_replace').html('<button type="button" class="btn bg-teal-600" onclick="update()">Update changes</button>');
          $('#modal').modal('show');
      });

      $('.table_datatable tbody').on( 'click', '.delete_button', function () {
          var parent   = $(this).closest("tr");
          var data = table.DataTable().row(parent).data();
          $.ajax({
              type: "get",
              url:"{{ route('user_delete') }}",
              data: {'id':data['m_id']},
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

    $('.add_button').click(function(){
        $('.remove_value').val('');
        $('.btn_replace').html('<button type="button" onclick="save()" class="btn bg-teal-600">Save changes</button>');
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
            url:"{{ route('user_save') }}",
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
      if ($('.m_password').val() == null || $('.m_password').val() == '') {
          iziToast.warning({position: 'topRight',title: 'Password Kosong'});
         return false;
      }
      var form   = $('.form-save');
        formdata = new FormData(form[0]);
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
         $.ajax({
            type: "post",
            url:"{{ route('user_update') }}",
             data: formdata ? formdata : form.serialize(),
              processData: false,
              contentType: false,
            success:function(data){
              if (data.status == 'sukses') {
                    $('#modal').modal('hide');
                    table.DataTable().ajax.reload();
                    iziToast.success({position: 'topRight',title: 'Data Telah Diperbarui'});
              }
            }
        });
    }
    function tambah(){
      $('.form-control').val('');
          var drEvent = $('.m_image').dropify();
drEvent = drEvent.data('dropify');
drEvent.resetPreview();
drEvent.clearElement();
        }
</script>
@endsection