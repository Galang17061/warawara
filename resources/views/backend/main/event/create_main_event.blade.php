@extends('layouts_backend._main')
@section('content')
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Main</span>
                            <span class="breadcrumb-item active">Tambahkan Event</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <div class="content">
              <div class="card">
                <div class="card-header bg-white header-elements-inline">
                  <h6 class="card-title">Form Event</h6>
                    <div class="header-elements">
                      <div class="list-icons">
                          <a class="list-icons-item" data-action="collapse"></a>
                          <a class="list-icons-item" data-action="reload"></a>
                          <a class="list-icons-item" data-action="remove"></a>
                        </div>
                      </div>
                </div>

            <form class="wizard-form steps-basic save_form save" data-fouc>
              @csrf

              <input type="hidden" name="type" class="type" value="create">
              <input type="hidden" name="form_create" class="form_create" value="event">

            <h6>Informasi Utama</h6>
            <fieldset>
              <div class="form-group row">
                <div class="col-lg-3">
                  <label>Poster:</label>
                  <input type="file" class="dropify" data-height="300" name="e_poster"/>
                </div>
                <div class="col-lg-9">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Event:</label>
                        <input type="text" name="e_title" class="form-control e_title" placeholder="Nama Event">
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tipe Event:</label>
                        <select class="form-control e_type" name="e_type">
                          <option value="" selected="">- Pilih -</option>
                          <option value="PUBLISH">PUBLISH</option>
                          <option value="DRAFT">DRAFT</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Kategori Event:</label>
                        <select class="form-control e_category" name="e_category"> 
                          <option value="" selected="">- Pilih -</option>
                          @foreach ($kategori as $element)
                            <option value="{{ $element->ce_id }}">{{ $element->ce_name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Deskripsi Event:</label>
                    <div id="example"></div>
                  </div>
                </div>
              </div>
            </fieldset>

            <h6>Waktu & Tempat</h6>
            <fieldset>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tanggal Dimulai:</label>
                    <input type="text" class="form-control datepicker e_start_date" name="e_start_date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tanggal Berakir:</label>
                    <input type="text" class="form-control datepicker e_end_date" name="e_end_date">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jam Mulai:</label>
                    <input type="text" class="form-control e_start_time" name="e_start_time">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jam Berakir:</label>
                    <input type="text" class="form-control e_end_time" name="e_end_time">
                  </div>
                </div>
              </div>
            </fieldset>

            <h6>Informasi Tambahan</h6>
            <fieldset>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Kontak:</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->m_phone }}" name="e_phone">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email:</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->m_email }}" name="e_email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Website:</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->m_web }}" name="e_web">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Lokasi:</label>
                    <input type="text" class="form-control" name="e_location">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Lokasi detail:</label>
                    <textarea name="e_location_desc" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
              </div>
            </div>
      
            
@endsection

@section('extra_script')
<script type="text/javascript">
  $(document).ready(function() {
    var editor = new FroalaEditor('#example',{
      height: 300
    });
    $('.datepicker').datepicker({
      format: 'dd-MM-yyyy',
      autoclose:true
    });
  $('.dropify').dropify();
  });
</script>
@endsection