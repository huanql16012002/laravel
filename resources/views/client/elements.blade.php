<!-- /*
* Template Name: Tour
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css')}}">
	<link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">
	<link rel="stylesheet" href="{{ asset('css/daterangepicker.css')}}">
	<link rel="stylesheet" href="{{ asset('css/aos.css')}}">
	<link rel="stylesheet" href="{{ asset('css/style.css')}}">

  <title>{{$tieude}}</title>
</head>
<body>


  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav">
    <div class="container">
      <div class="site-navigation">
        <a href="index.html" class="logo m-0">Tour <span class="text-primary">.</span></a>

        <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
          <li class="active"><a href="index.html">Home</a></li>
          <li class="has-children">
            <a href="#">Dropdown</a>
            <ul class="dropdown">
              <li class="active"><a href="elements.html">Elements</a></li>
              <li><a href="#">Menu One</a></li>
              <li class="has-children">
                <a href="#">Menu Two</a>
                <ul class="dropdown">
                  <li><a href="#">Sub Menu One</a></li>
                  <li><a href="#">Sub Menu Two</a></li>
                  <li><a href="#">Sub Menu Three</a></li>
                </ul>
              </li>
              <li><a href="#">Menu Three</a></li>
            </ul>
          </li>
          <li><a href="services.html">Services</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>

        <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      </div>
    </div>
  </nav>


  <div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">Elements</h1>
            <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  
  <div class="untree_co-section">
    <div class="container my-5">
      <div class="mb-5">
        <div class="owl-single dots-absolute owl-carousel">
          <img style="height: 650px;" src="images/1.jpg" alt="Free HTML Template by Untree.co" class="img-fluid">
          <img style="height: 650px;" src="images/2.jpg" alt="Free HTML Template by Untree.co" class="img-fluid">
          <img style="height: 650px;" src="images/3.jpg" alt="Free HTML Template by Untree.co" class="img-fluid">
          <img style="height: 650px;" src="images/4.jpg" alt="Free HTML Template by Untree.co" class="img-fluid">
          <img style="height: 650px;" src="images/5.jpg" alt="Free HTML Template by Untree.co" class="img-fluid">
          <img style="height: 650px;" src="images/6.jpg" alt="Free HTML Template by Untree.co" class="img-fluid">
        </div>
      </div>

      <div class="row justify-content-center">

        <div class="col-lg-6">
          <div class="custom-block" data-aos="fade-up">
            <h2 class="section-title new">Accordion</h2>
            <div class="custom-accordion" id="accordion_1">
              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How to download and register?</button>
                </h2>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                  <div class="accordion-body">
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How to create your paypal account?</button>
                </h2>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                  <div class="accordion-body">
                    A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How to link your paypal and bank account?</button>
                </h2>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                  <div class="accordion-body">
                    When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
                  </div>
                </div>

              </div> <!-- .accordion-item -->

            </div>
          </div> <!-- END .custom-block -->
          <div class="custom-block" data-aos="fade-up">
            <h2 class="section-title new">Gallery</h2>
            <div class="row gutter-v2 gallery">
              <div class="col-4">
                <a href="images/gal_1.jpg" class="gal-item" data-fancybox="gal"><img src="images/gal_1.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="images/gal_2.jpg" class="gal-item" data-fancybox="gal"><img src="images/gal_2.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="images/gal_3.jpg" class="gal-item" data-fancybox="gal"><img src="images/gal_3.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="images/gal_4.jpg" class="gal-item" data-fancybox="gal"><img src="images/gal_4.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="images/gal_5.jpg" class="gal-item" data-fancybox="gal"><img src="images/gal_5.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="images/gal_6.jpg" class="gal-item" data-fancybox="gal"><img src="images/gal_6.jpg" alt="Image" class="img-fluid"></a>
              </div>
            </div>
          </div> <!-- END .custom-block -->

          <div class="custom-block" data-aos="fade-up">
            <h2 class="section-title new">Video</h2>

            <a href="https://vimeo.com/342333493" data-fancybox class="video-wrap">
              <span class="play-wrap"><span class="icon-play"></span></span>
              <img src="images/bg_1.jpg" alt="Image" class="img-fluid rounded">
            </a>
          </div> <!-- END .custom-block -->
        </div>
        <div class="col-lg-4">
          <div class="custom-block" data-aos="fade-up" data-aos-delay="100">
            <h2 class="section-title new">Form</h2>
            <form class="contact-form bg-white" action="" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-9">
                  <div class="form-group">
                    <label class="text-black">H??? v?? t??n</label>
                    <input type="text" name="ten_khach_hang" class="form-control" value="@isset($request['ten_khach_hang']){{ $request['ten_khach_hang'] }}@endisset">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="text-black">Tu???i</label>
                    <input type="number" name="tuoi" class="form-control" value="@isset($request['tuoi']){{ $request['tuoi'] }}@endisset">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="text-black">?????a ch???</label>
                <input type="text" name="dia_chi" class="form-control" aria-describedby="mess" value="@isset($request['dia_chi']){{ $request['dia_chi'] }}@endisset">
                <small id="mess" class="form-text text-muted">Ch??ng t??i s??? kh??ng chia s??? n???i dung n??y cho b???t k??? ai kh??c.</small>
              </div>              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-black">S??? ??i???n tho???i</label>
                    <input type="text" name="sdt" class="form-control" value="@isset($request['sdt']){{ $request['sdt'] }}@endisset">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-black">Th??? c??n c?????c</label>
                    <input type="number" name="scmt" class="form-control" value="@isset($request['scmt']){{ $request['scmt'] }}@endisset">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-black">Ng??y thu??</label>
                    <input type="date" name="ngay_thue" class="form-control" value="@isset($request['ngay_thue']){{ $request['ngay_thue'] }}@endisset">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-black">Ng??y tr???</label>
                    <input type="date" name="ngay_tra" class="form-control" value="@isset($request['ngay_tra']){{ $request['ngay_tra'] }}@endisset">
                  </div>
                </div>
              </div>              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-black" for="select">Ch???n ph??ng</label>
                    <select name="" id="select" class="custom-select">
                      <option value="">Untree.co</option>
                      <option value="">Offers high quality free template</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-black" for="select">Ch???n d???ch v???</label>
                    <select name="" id="select" class="custom-select">
                      <option value="">Untree.co</option>
                      <option value="">Offers high quality free template</option>
                    </select>

                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="text-black" for="message">Ghi ch??</label>
                <textarea name="ghi_chu" class="form-control" id="message" cols="30" rows="5" value="@isset($request['ghi_chu']){{ $request['ghi_chu'] }}@endisset"></textarea>
              </div>
              <div class="form-group">
                <label class="control control--checkbox">
                  <span class="caption">T??i ?????ng ?? v???i ??i???u kho???n tr??n!</span>
                  <input type="checkbox" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
              </div>
              <button type="submit" class="btn btn-primary">G???i</button>
            </form>
          </div>

          <div class="custom-block" data-aos="fade-up">
            <h2 class="section-title new">Social Icons</h2>
            <ul class="list-unstyled social-icons light">
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-google"></span></a></li>
              <li><a href="#"><span class="icon-play"></span></a></li>
            </ul>
          </div> <!-- END .custom-block -->


        </div>
      </div>

      <div class="row justify-content-center mt-5 section">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-md-6 text-center">
              <h2 class="section-title mb-3 text-center">Team</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
          </div>
    
          <div class="owl-carousel owl-4-slider">
            @foreach ($listUsers as $item)
              <div class="item">
                <div class="team">
                  <img src="img/{{$item->hinh_anh_nv}}" alt="Image" class="img-fluid mb-4 rounded-30">
                  <div class="px-3">
                    <h3 class="mb-0">{{$item->ten_nhan_vien}}</h3>
                    <p>{{$item->chuc_vu}}</p>
                  </div>
                </div>
              </div>            
            @endforeach
    
          </div>
    
        </div>
      </div>
    </div>
  </div>

  <div class="py-5 cta-section">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>
          <p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit?</p>
          <p class="mb-0"><a href="booking.html" class="btn btn-outline-white text-white btn-md font-weight-bold">Get in touch</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-footer">
    <div class="inner first">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="widget">
              <h3 class="heading">About Tour</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            <div class="widget">
              <ul class="list-unstyled social">
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-dribbble"></span></a></li>
                <li><a href="#"><span class="icon-pinterest"></span></a></li>
                <li><a href="#"><span class="icon-apple"></span></a></li>
                <li><a href="#"><span class="icon-google"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2 pl-lg-5">
            <div class="widget">
              <h3 class="heading">Pages</h3>
              <ul class="links list-unstyled">
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="widget">
              <h3 class="heading">Resources</h3>
              <ul class="links list-unstyled">
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="widget">
              <h3 class="heading">Contact</h3>
              <ul class="list-unstyled quick-info links">
                <li class="email"><a href="#">mail@example.com</a></li>
                <li class="phone"><a href="#">+1 222 212 3819</a></li>
                <li class="address"><a href="#">43 Raymouth Rd. Baltemoer, London 3910</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="inner dark">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-8 mb-3 mb-md-0 mx-auto">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co" class="link-highlight">Untree.co</a> <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
          
        </div>
      </div>
    </div>
  </div>

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


	<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
	<script src="{{ asset('js/aos.js') }}"></script>
	<script src="{{ asset('js/moment.min.js') }}"></script>
	<script src="{{ asset('js/daterangepicker.js') }}"></script>

	<script src="{{ asset('js/typed.js') }}"></script>
  
	<script src="{{ asset('js/custom.js') }}"></script>
  @section('script')
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
  @endsection
</body>

</html>
