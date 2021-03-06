 <!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
 <!-- dropzone js -->
 <!-- <script src="{{ asset('assets/libs/dropzone/min/dropzone.min.js') }}"></script> -->

<script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

<!-- datepicker -->
<!-- <script src="{{ asset('assets/libs/air-datepicker/js/datepicker.min.js') }}"></script> -->
<!-- <script src="{{ asset('assets/libs/air-datepicker/js/i18n/datepicker.en.js') }}"></script> -->

<!-- apexcharts -->
<!-- <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script> -->

<!-- <script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>  -->

<!-- Jq vector map -->
<!-- <script src="{{ asset('assets/libs//qvmap/jquery.vmap.min.js') }}"></script> -->
<!-- <script src="{{ asset('assets/libs/jqvmap/maps/jquery.vmap.usa.js') }}"></script> -->

<!-- <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script> -->

<script src="{{ asset('assets/js/app.js') }}"></script>
<!-- <script src="{{ asset('assets/libs/') }}"></script> -->
<script src="{{ asset('assets/tinymce/tinymce/tinymce.js') }}"></script>
<script src="{{ asset('assets/tinymce/editor-tinymce.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets\libs/sweetalert2/sweetalert2.min.js') }}"></script>


<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script> -->
<script type="text/javascript">
	$(document).ready(function() {
	    // $('#subMenuTable').DataTable();
	});


</script>

<script type="text/javascript">

    function notificationFun()
    {
        $.ajax({
            url:"{{ route('Notification') }}",
            type:"get",
            data:{notification:"notification"},
            success:function(data)
            {
                $('.notification').html(data);
            }

        });
    }

   

    $(document).ready(function(){

        // notificationFun();

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
        	if($(this).is(':checked')){var value = 1;}else{var value = 0;}
        	$.ajax({
        		url:"{{ route('CourseApplicationStatus')}}",
        		type:"get",
        		data:{id:id,status:value },
        		success:function(data)
        		{ 
        			$('.statusMsg').css('display','block');
        			if(value==1){$('.statusMsg').html("Payment Has Been Confirmed"); }
        			else if(value==0){ $('.statusMsg').html("Payment Has Been Un Confirmed");  }
        			
        		}
        	});
        });

        $('.appImg').click(function(){
            var imgSrc =$(this).attr('src');
            var img = $('#img01');
            img.attr("src",imgSrc);
            $('.myModel').css('display','block');
        });

        $('.close').click(function(){
            $('.myModel').css('display','none');
        });
        

        $('.unconfirm').click(function(){
            if($('.changeStatusBox:checkbox').is(":checked"))
            {
                $('.changeStatus').attr('action',"{{ route('CourseApplicationUnConfirmStatus') }}");
                $('.changeStatus').submit();
            }
        });

        $('.confirm').click(function(){
            if($('.changeStatusBox:checkbox').is(":checked"))
            {
                $('.changeStatus').attr('action',"{{ route('CourseApplicationConfirmStatus') }}");
                $('.changeStatus').submit();
            }
        });

         $('.c_active').click(function(){
            if($('.changeStatusBox:checkbox').is(":checked"))
            {
                $('.changeStatus').attr('action',"{{ route('CourseActive') }}");
                $('.changeStatus').submit();
            }
        });

         $('.blocked').click(function(){
            if($('.changeStatusBox:checkbox').is(":checked"))
            {
                $('.changeStatus').attr('action',"{{ route('CourseBlocked') }}");
                $('.changeStatus').submit();
            }
        }); 
       
       $('#main').change(function(){
            var title_html = '<input class="form-control" name="title" id="title" type="text" placeholder="Enter Title"/>';  
            var route_html = '<input class="form-control" name="route" id="route" type="text" placeholder="Enter Route"/>';  
            var value = ($('#main option:selected').html()).toLowerCase();
            if(value=="products" || value=="courses" || value=="services" || value=="service" || value=="course" || value=="product")
            {
                $.ajax({
                    url:"{{ route('SubMenuAuto') }}",
                    type:'get',
                    data:{ tbl:value },
                    success:function(data){
                        $('.sub_title').html(data);
                    }
                });

                $.ajax({
                    url:"{{ route('SubMenuAutoRoute') }}",
                    type:'get',
                    data:{ tbl:value },
                    success:function(data){
                        $('.sub_route').html(data);
                    }
                });

            }
            else
            {
                $('.sub_title').html(title_html);
                $('.sub_route').html(route_html);
            }
            
       }); 

        function subAutoLoad(value,title)
        {   
            var title_html = '<input class="form-control" name="title" id="title" type="text" placeholder="Enter Title"/>';  
            var route_html = '<input class="form-control" name="route" id="route" type="text" placeholder="Enter Route"/>';   
            if(value=="products" || value=="courses" || value=="services" || value=="service" || value=="course" || value=="product")
            {
                $.ajax({
                    url:"{{ route('SubMenuAuto') }}",
                    type:'get',
                    data:{ tbl:value,title:title },
                    success:function(data){
                        $('.sub_title').html(data);
                    }
                });

                $.ajax({
                    url:"{{ route('SubMenuAutoRoute') }}",
                    type:'get',
                    data:{ tbl:value,title:title },
                    success:function(data){
                        $('.sub_route').html(data);
                    }
                });

            }
            else
            {
                $('.sub_title').html(title_html);
                $('.sub_route').html(route_html);
            }
        }

        $('.item_delete_btn').click(function(){
            var id  = $(this).data('id');
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.value) {
                $('#'+id).submit();
              }
            });

        });

        $('.anchor_delete_btn').click(function(){
            var id  = $(this).data('id');
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.value) {
                var route = $('#route'+id).val();
                window.location = route;
              }
            });

        });

        subAutoLoad(($('#main option:selected').html()).toLowerCase(),$('#hidden_title').val());
       
    });
</script>
