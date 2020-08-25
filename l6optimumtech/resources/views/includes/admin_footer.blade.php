 <!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
 <!-- dropzone js -->
 <script src="{{ asset('assets/libs/dropzone/min/dropzone.min.js') }}"></script>

<script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

<!-- datepicker -->
<script src="{{ asset('assets/libs/air-datepicker/js/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/air-datepicker/js/i18n/datepicker.en.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script> 

<!-- Jq vector map -->
<script src="{{ asset('assets/libs/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/libs/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

<script src="{{ asset('assets/js/app.js') }}"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    // $('#subMenuTable').DataTable();
	});


</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.status').change(function(){
        	var id = $(this).parent().data('id');
        	var value = $(this).val();
        	$.ajax({
        		url:"{{ route('CourseStatus')}}",
        		type:"get",
        		data:{id:id,status:value },
        		success:function(data)
        		{
        			$('.statusMsg').css('display','block');
        			$('.statusMsg').html("Status Has Been Changed");
        		}
        	});
        });

        $('.appStatus').change(function(){
        	var id = $(this).parent().data('id');
        	if($('.appStatus').is(':checked')){var value = 1;}else{var value = 0;}
        	$.ajax({
        		url:"{{ route('CourseApplicationStatus')}}",
        		type:"get",
        		data:{id:id,status:value },
        		success:function(data)
        		{ 
        			$('.statusMsg').css('display','block');
        			if(value==1){$('.statusMsg').html("Payment Has Been Confirmed"); }
        			else{ $('.statusMsg').html("Payment Has Been Un Confirmed");  }
        			
        		}
        	});
        });

        $('.appImg').click(function(){
        	alert($(this).attr('src'));
        });
    });
</script>
