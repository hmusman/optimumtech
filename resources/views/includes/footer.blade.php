







<div>
     <input type="checkbox" id="click">
    <label for="click">
        <i class="fab fa-facebook-messenger"></i>
        <i class="fas fa-times"></i>
    </label>
    <div class="wrapper">
        <div class="head-text">
            Let's chat? - Online</div>
        <div class="chat-box">
            <div class="desc-text">
                Please fill out the form below to start chatting with the next available agent.</div>
            <form action="#">
                <div class="field">
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="field">
                    <input type="email" placeholder="Email Address" required>
                </div>
                <div class="field textarea">
                    <!-- Due to more textarea fields I got an error so I've changed the textarea name into changeit..Change the tag name to use it -->
                    <changeit cols="30" rows="10" placeholder="Explain your queries.." required></changeit>
                </div>
                <div class="field">
                    <button type="submit">Start Chat</button>
                </div>
            </form>
        </div>
    </div>
</div>

<footer  id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="{{ asset('storage/images/bg/bg2.jpg') }}">
      <div class="container">
        <div class="row border-bottom">
          <div class="col-sm-6 col-md-4">
            <div class="widget dark">
             <a href="http://theoptimumtech.com/" > <img class="mt-5 mb-20" alt="" src="{{ asset('storage/images/logo.png') }} "></a>
              <p style="text-align: justify;">{{ ucwords($contact->address) }}</p>
         <br/>
              <ul class="list-inline mt-5">
              
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a
                    class="text-gray" href="mailto:info@optimumtech.com"> {{ $contact->email }} </a> </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray"
                      href="tel:{{ $contact->phone }}">{{ $contact->phone }} </a> </li>
              </ul>
            </div>
          </div>
          <!-- <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h4 class="widget-title">Products</h4>
              <ul class="list angle-double-right list-border">
              
                @if($products->count()>0)
                  @foreach($products as $product)
                     <li><a href="{{ route('Product.Detail',$product->id) }}">{{ ucwords($product->name) }}</a></li>
                  @endforeach
                @endif
              </ul>
            </div>
          </div> -->
          <div class="col-sm-6 col-md-4">
            <div class="widget dark">
              <h4 class="widget-title">Help</h4>
              <ul class="list angle-double-right list-border">
                <li><a href="#">Live Chat</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Coming Soon</a></li>
                <li><a href="#">Faq</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="widget dark">
              <h4 class="widget-title line-bottom-theme-colored-2">NewsLetter</h4>



              <form id="mailchimp-subscription-form-footer" class="newsletter-form">
                @csrf
                <div class="input-group">
                  <input id="email" type="email" value="" name="email" placeholder="Your Email"
                    class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer" required="">
                  <span class="input-group-btn">
                    <button id="subscribe_me" data-height="45px" class="btn bg-theme-color-2 text-white btn-xs m-0 font-14" type="button">Subscribe</button>
                  </span>
                </div>
              </form>


              <div class="widget dark">
                <h5 class="widget-title mb-10">Connect With Us</h5>
                <ul class="styled-icons icon-bordered icon-sm">
                  <li><a href="https://www.facebook.com/optimumtechofficial/"><i class="fa fa-facebook"></i></a></li>
                  <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                  <!-- <li><a href="#"><i class="fa fa-skype"></i></a></li> -->
                  <li><a href="https://www.youtube.com/channel/UCD_588wMiwVQj7TDCEBHcfw"><i class="fa fa-youtube"></i></a></li>
                  <li><a href="https://www.instagram.com/optimumtech_official/"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="mailto:theoptimumtech@gmail.com"><i class="fa fa-google-plus text-white"></i></a></li>

              
                </ul>
              </div>

            </div>
          </div>
        </div>

      </div>
      <div class="footer-bottom bg-black-333">
        <div class="container pt-20 pb-20 pr-90 pl-90">
          <div class="row">
            <div class="col-md-6">
              <p class="font-11 text-black-777 m-0">Copyright © 2020 Optimum Tech All rights reserved.</p>
            </div>
            <div class="col-md-6 text-right">
              <div class="widget no-border m-0">
                <ul class="list-inline sm-text-center mt-5 font-12">
                  <li>
                    <a href="#">FAQ</a>
                  </li>
                  <li>|</li>
                  <li>
                    <a href="#">Help Desk</a>
                  </li>
                  <li>|</li>
                  <li>
                    <a href="#">Support</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

  <!-- Footer Scripts -->
  <script src="{{ asset('js/jquery-2.2.4.min.js') }} "></script>
  <script src="{{ asset('js/bootstrap.min.js') }} "></script>

  <!-- JS | jquery plugin collection for this theme -->
  <script src="{{ asset('js/jquery-plugin-collection.js') }} "></script>
  
  <!-- JS | Custom script for all pages -->
  <script src="{{ asset('js/custom.js') }} "></script>
  <script>

  function galleryImage(id)
  {
      var imgSrc =$('#image'+id).attr('src');
      var img = $('#img01');
      img.attr("src",imgSrc);
      $('.myModel').css('display','block');
  }
    $(document).ready(function() {

      var sync1 = $("#sync1");
      var slidesPerPage = 4; //globaly define number of elements per page
      var syncedSecondary = true;

      sync1.owlCarousel({
        items : 1,
        slideSpeed : 2000,
        nav: true,
        autoplay: true,
        dots: true,
        loop: true,
        responsiveRefreshRate : 200,
        navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
      }).on('changed.owl.carousel', syncPosition);

      var portfolio = $("#portfolio");
      var slidesPerPage = 4; //globaly define number of elements per page
      var syncedSecondary = true;

      portfolio.owlCarousel({
        items : 1,
        slideSpeed : 2000,
        nav: true,
        autoplay: true,
        dots: true,
        loop: true,
        responsiveRefreshRate : 200,
        navText: ['<svg style ="width:20px;height:20px;" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg style ="width:20px;height:20px;" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
      }).on('changed.owl.carousel', syncPosition);

      function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;
        
        //if you disable loop you have to comment this block
        var count = el.item.count-1;
        var current = Math.round(el.item.index - (el.item.count/2) - .5);
        
        if(current < 0) {
          current = count;
        }
        if(current > count) {
          current = 0;
        }
        
      }

      function syncPosition2(el) {
        if(syncedSecondary) {
          var number = el.item.index;
          sync1.data('owl.carousel').to(number, 100, true);
        }
      }

    });
  </script>



  <script type="text/javascript" src="{{ asset('slick/slick.min.js') }} "></script>
  <!-- <script type="text/javascript" src="slick/jquery3.2.1.js"></script>  -->
  <script type="text/javascript" src="{{ asset('slick/slick.js') }} "></script>
   
  <script>
      $(document).ready(function(){
          $('.autoplay').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,


            dots: true,
           
            // variableWidth: true
          });
      });

      $(document).ready(function(){
          $('.autoplay2').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
          });
      });




      $(document).ready(function(){
          $('.autoplay3').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
          });
      });

      $(document).ready(function(){
        $('.serviceautoplay').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000,
        });
      });

      $(document).ready(function(){
        $('.learningautoplay').slick({
          slidesToShow: 5,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000,


          // variableWidth: true
        });
      });
  </script>

  <script>
    function showalb(){
      document.getElementById('grid').style.display = "block";

      document.getElementById('phot').style.visibility="visible";
      document.getElementById('phot2').style.display="visible";
      document.getElementById('stds').style.display="visible";
    }
  </script>

  <script type="text/javascript">
  
      function filePreview(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $('uploadForm + img').remove();
                  $('#uploadForm').after('<img onclick="selectImg(this)" src="'+e.target.result+'" style="margin-top:10px;" width="200" height="200"/>');
              };
              reader.readAsDataURL(input.files[0]);
          }
      }

    $("#img").change(function () {
      filePreview(this);
    });

    function selectImg(param)
    {
      var imgSrc =$(param).attr('src');
      var img = $('#img01');
      img.attr("src",imgSrc);
      $('.myModel').css('display','block');
    }

    $('.close').click(function(){
      $('.myModel').css('display','none');
    });
        
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script>
  $('#subscribe_me').on('click',function(event){
    event.preventDefault();
    var email = $('#email').val();
    if(email == '' || email == 'undefined'){
        Command: toastr["error"]('Email is required for subscription.');
    }else{
      $.ajax({
        url:'{{route("subscribe_me")}}',
        type:'post',
        data:{'_token':'{{ csrf_token() }}','email':email},
        success:function(data){
          if(data.success){
            Command: toastr["success"](data.success);
            $('#mailchimp-subscription-form-footer').reset();
          }else if(data.error){
            Command: toastr["error"](data.error);
          }
        },
        error:function(e){
          Command: toastr["error"](e);
        }
      });
    }
  })
</script>
<script>
  $('#booking_form').on('submit',function(e){
    // alert('here');
    e.preventDefault();
    // var data = new FormData(this); 
     $.ajax({
        url:'{{route("register_event")}}',
        type:'post',
        processData: false,
        contentType: false,
        data: new FormData(this),
        success:function(data){
          if(data.success){
            Command: toastr["success"](data.success);
            $('#booking_form').reset();
          }else if(data.error){
            Command: toastr["error"](data.error);
          }
        },
        error:function(e){

          Command: toastr["error"](e);
        }

     });
  });
</script>