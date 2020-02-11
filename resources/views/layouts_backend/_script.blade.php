<script src="{{ asset('assets_backend/js/main/jquery.min.js') }}"></script>
<script src="{{ asset('assets_backend/js/main/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets_backend/js/plugins/loaders/blockui.min.js') }}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="{{ asset('assets_backend/js/plugins/visualization/d3/d3.min.js') }}"></script>
<script src="{{ asset('assets_backend/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
<script src="{{ asset('assets_backend/js/plugins/forms/styling/switchery.min.js') }}"></script>
<script src="{{ asset('assets_backend/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
<script src="{{ asset('assets_backend/js/plugins/ui/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets_backend/js/plugins/pickers/daterangepicker.js') }}"></script>

<script src="{{ asset('assets_backend/assets/js/app.js') }}"></script>
<script src="{{ asset('assets_backend/js/demo_pages/dashboard.js') }}"></script>

<script src="{{ asset('assets_backend/js/plugins/tables/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets_backend/js/plugins/forms/selects/select2.min.js') }}"></script>
<script src="{{ asset('assets_backend/js/demo_pages/datatables_basic.js') }}"></script>

<script src="{{ asset('node_modules/izitoast/dist/js/iziToast.js') }}"></script>

<script src="{{ asset('assets_backend/js/plugins/forms/styling/uniform.min.js') }}"></script>

<script src="{{ asset('assets_backend/js/demo_pages/form_layouts.js') }}"></script>

<script src="{{ asset('assets_backend/js/plugins/forms/wizards/steps.min.js') }}"></script>
<script src="{{ asset('assets_backend/js/plugins/forms/selects/select2.min.js') }}"></script>
<script src="{{ asset('assets_backend/js/plugins/forms/styling/uniform.min.js') }}"></script>
<script src="{{ asset('assets_backend/js/plugins/forms/inputs/inputmask.js') }}"></script>
<script src="{{ asset('assets_backend/js/plugins/forms/validation/validate.min.js') }}"></script>
<script src="{{ asset('assets_backend/js/plugins/extensions/cookie.js') }}"></script>

<script src="{{ asset('assets_backend/js/demo_pages/form_wizard.js') }}"></script>
<script src="{{ asset('node_modules/froala-editor/js/froala_editor.pkgd.min.js') }}"></script>
<script src="{{ asset('node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.id.min.js') }}"></script>

<script src="{{ asset('node_modules/dropify/dist/js/dropify.js') }}"></script>
<script src="{{ asset('node_modules/moment/min/moment-with-locales.min.js') }}"></script>
<script type="text/javascript">
	var baseUrl = '{{ url('/') }}';
	$(document).ready(function() {
	  clockUpdate();
	  setInterval(clockUpdate, 1000);
	})

	function clockUpdate() {
	  var date = new Date();
	  function addZero(x) {
	    if (x < 10) {
	      return x = '0' + x;
	    } else {
	      return x;
	    }
	  }

	  function twelveHour(x) {
	    if (x > 12) {
	      return x = x - 12;
	    } else if (x == 0) {
	      return x = 12;
	    } else {
	      return x;
	    }
	  }

	  var h = addZero(twelveHour(date.getHours()));
	  var m = addZero(date.getMinutes());
	  var s = addZero(date.getSeconds());

	  $('.digital-clock').text(h + ':' + m + ':' + s)
	}
	function notifications(){
		$.ajax({
          type: "get",
          url: '{{ route('notification') }}',
          success:function(data){
          	$('.media-list').empty();
          	$.each(data.notif, function (index, value) {
          		if (data.notif[index].gambar != null) {
	          		var images = baseUrl+'/../storage/app/'+data.notif[index].gambar;
          		}else{
	          		var images = '{{ asset('../assets_frontend/img/core-img/img_kosong.jpg') }}';
          		}
          		if (data.notif[index].tipe == 'comment' ) {
          			var tipe 	 = 'mengomentari ';
          			var	comment  = '<b>'+data.notif[index].events+'</b>'+' <br> "'+data.notif[index].texts+'"';
          		}else if (data.notif[index].tipe == 'like') {
          			var tipe 	 = 'menyukai ';
          			var	comment  = '<b>'+data.notif[index].texts+'</b>';
          		}else{
          			var tipe 	 = 'tertarik pada ';
          			var	comment  = '<b>'+data.notif[index].texts+'</b>';
          		}
          		if (data.notif[index].status == 'N') {
          			var status = '#dcffe4';
          		}else{
          			var status = '#fff';
          		}
				$('.media-list').append(
	          		'<li class="media" style="background-color:'+status+';margin-top:0px !important;padding-left:10px;padding-right:10px;padding-top:10px;">'+
	                    '<div class="mr-3 position-relative">'+
	                        '<img src="'+images+'" width="36" height="36" class="rounded-circle" alt="">'+
	                    '</div>'+

	                    '<div class="media-body">'+
	                        '<div class="media-title">'+
	                            '<a href="#">'+
	                                '<span class="font-weight-semibold">'+data.notif[index].user+'</span>'+
	                                '<span class="text-muted float-right font-size-sm">'+data.notif[index].tgl_notif+'</span>'+
	                            '</a>'+
	                        '</div>'+

	                        '<span class="text-muted">'+tipe+comment+'</span>'+
	                    '</div>'+
	                '</li>'
	          	);
			});
          	
          }
        });
    }
</script>


