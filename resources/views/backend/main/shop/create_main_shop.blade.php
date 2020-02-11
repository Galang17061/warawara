@extends('layouts_backend._main')
@section('content')
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Main</span>
                            <span class="breadcrumb-item active">Tambahkan Barang</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <div class="content">
              <div class="card">
                <div class="card-header bg-white header-elements-inline">
                  <h6 class="card-title">Form Barang</h6>
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
                      <input type="hidden" name="form_create" class="form_create" value="shop">

                    <h6>Informasi Utama</h6>
                    <fieldset>
                      <div class="form-group row">
                        <div class="col-lg-12">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Kode Barang:</label>
                                <input type="text" name="ds_code" class="form-control" placeholder="Kode Barang">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Nama Barang:</label>
                                <input type="text" name="ds_name" class="form-control" placeholder="Nama Barang">
                              </div>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Harga:</label>
                                <input type="text" name="ds_price" class="form-control" placeholder="Harga">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Diskon:</label>
                                <input type="text" name="ds_discount" class="form-control" placeholder="Diskon">
                              </div>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>No Whatsapp:</label>
                                <input type="text" name="ds_phone" class="form-control" placeholder="No Whatsapp">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Kategori:</label>
                                <select class="form-control" name="ds_category">
                                <option selected="" value="">- Pilih -</option>
                                @foreach ($category as $element)
                                <option value="{{ $element->cs_id }}">{{ $element->cs_name }}</option>
                                @endforeach
                                </select>
                              </div>
                            </div>
                          </div>
                          <br>
                        </div>
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Deskripsi Bawah:</label>
                                <div id="example"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </fieldset>

                    <h6>Gambar</h6>
                    <fieldset>
                      <div class="row">
                       <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Gambar Utama:</label>
                                    <input type="file" class="dsi_image dropify" data-height="300" name="dsi_image[]"/>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Gambar 1:</label>
                                    <input type="file" class="dsi_image dropify" data-height="300" name="dsi_image[]"/>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Gambar 2:</label>
                                    <input type="file" class="dsi_image dropify" data-height="300" name="dsi_image[]"/>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Gambar 3:</label>
                                    <input type="file" class="dsi_image dropify" data-height="300" name="dsi_image[]"/>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>

                    <h6>Informasi Tambahan</h6>
                    <fieldset>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Stok QTY:</label>
                            <input type="text" class="form-control" name="ds_stock">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Stok Status:</label>
                            <input type="text" class="form-control" name="ds_stock_status">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Weight:</label>
                            <input type="text" class="form-control" name="ds_weight">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Dimensions:</label>
                            <input type="text" class="form-control" name="ds_height">
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
      height: 150
    });
    $('.datepicker').datepicker({
      format: 'dd-MM-yyyy',
      autoclose:true,
      language:'id',
    });
  $('.dropify').dropify();
  });
</script>
@endsection