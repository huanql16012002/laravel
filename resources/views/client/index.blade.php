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
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
	<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

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
				<a href="#" class="logo m-0"><img style="width: 13%;height: 13%" src="images/logo.jpg" alt=""></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					<li class="active"><a href="#">Trang ch???</a></li>
					<li class="has-children">
						<a href="#">Dropdown</a>
						<ul class="dropdown">
							<li><a href="{{ route('route_FrontEnd_Client_Elements') }}">Elements</a></li>
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
					<li><a href="{{ route('route_FrontEnd_Client_About') }}">Gi???i thi???u</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>


	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="intro-wrap">
						<h1 class="mb-4 mt-4"><span class="d-block"> ?????t ti??u chu???n 5 <i class="icon-star"></i> ?????ng c???p </span> Mang phong c??ch thi???t k???: <br> <span class="typed-words"></span></h1>

						<div class="row">
							<div class="col-12">
								<form class="form">
									<div class="row mb-2">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
											<select name="" id="" class="form-control custom-select">
												<option value="">Modern</option>
												<option value="">Nordic</option>
												<option value="">Color Block</option>												
												<option value="">Minimalism</option>
												<option value="">Mid-Century Modern</option>
												<option value="">Luxury</option>
												<option value="">Contemporary</option>
												<option value="">Rustic</option>
												<option value="">Hi-Tech</option>
												<option value="">Industrial</option>
												<option value="">Country</option>
												<option value="">Romanticism</option>
												<option value="">Organic</option>
												<option value="">Hollywood</option>
												<option value="">Funky</option>
												<option value="">Metallic</option>
												<option value="">Brutalism</option>												
												<option value="">Baroque</option>
												<option value="">Neoclassical</option>												
												<option value="">Classic</option>
											</select>
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-6">
											<input type="text" class="form-control" name="daterange">
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-2">
											<input type="text" class="form-control" placeholder="S???">
										</div>

									</div>    
									<div class="row align-items-center">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
											<input type="submit" class="btn btn-primary btn-block" value="T??m ki???m">
										</div>
										<div class="col-lg-8">
											<label class="control control--checkbox mt-3">
												<span class="caption">L??u t??m ki???m</span>
												<input type="checkbox" checked="checked" />
												<div class="control__indicator"></div>
											</label>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="slides">
						@foreach ($list as $item)
							<img src="/img/{{$item->hinh_anh_phong}}" alt="Image" class="img-fluid active">
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="untree_co-section">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2 class="section-title text-center mb-3">D???CH V???</h2>
					<p>Mong mu???n mang ?????n cho kh??ch h??ng nh???ng tr???i nghi???m t???t nh???t.<br>Kh??ch s???n Marvella ?????t ti??u chu???n 4-5 sao mang phong c??ch ho??ng gia Ch??u ??u ?????ng c???p, th???i th?????ng.</p>
				</div>
			</div>
			<div class="row align-items-stretch">
				<div class="col-lg-4 order-lg-1">
					<div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/img.jpg');"></div></div></div>
				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-house display-4 text-primary"></span>
							<h3>Ph??ng 5 sao</h3>
							<p class="mb-0">??i???n t??ch: 100m2, trang thi???t b??? ?????y ?????.<br>H?????ng: m???t ph???.<br>Ph??ng: gi?????ng ????n ho???c gi?????ng ????i.</p>
						</div>
					</div>

					<div class="feature-1 ">
						<div class="align-self-center">
							<span class="flaticon-restaurant display-4 text-primary"></span>
							<h3>Nh?? h??ng & qu???y Bar</h3>
							<p class="mb-0">Nh?? h??ng v?? qu???y Bar ph???c v??? nhu c???u ??n u???ng v?? v?? h???i cho th???c kh??ch.<br>?????u b???p 5 sao ???????c ????o t???o ??? Ch??u ??u.</p>
						</div>
					</div>

				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-mail display-4 text-primary"></span>
							<h3>D??? d??ng li??n l???c</h3>
							<p class="mb-0">H??? th???ng nh??n vi??n t??c tr???c 24/7 th???c hi???n y??u c???u kh??ch h??ng m???i l??c, m???i n??i.<br>H??? tr??? kh??ch h??ng c?? tr???i nghi???m t???t nh???t.</p>
						</div>
					</div>

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-phone-call display-4 text-primary"></span>
							<h3>H??? tr??? 24/7</h3>
							<p class="mb-0">H??? tr??? v?? t?? v???n ?????t ph??ng mi???n ph?? m???i l??c, m???i n??i.<br>Hotline: 0966818546</p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="untree_co-section mtnew">
		<div class="container">
			<div class="row text-center justify-content-center mb-5">
				<div class="col-lg-7"><h2 class="section-title text-center">PH??NG VIP</h2></div>
			</div>

			<div class="owl-carousel owl-3-slider">

				<div class="item">
					<a class="media-thumb trip" href="" data-fancybox="gallery">
						<div class="media-text info">
							<h3 style="color: rgb(22, 22, 22);">Classic Style</h3>
							<span class="location" style="color: white">500k</span>
						</div>
						<img src="img/20.jpg" alt="Image" class="">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb trip" href="" data-fancybox="gallery">
						<div class="media-text info">
							<h3 style="color: rgb(22, 22, 22)">Neoclassical Style</h3>
							<span class="location" style="color: white">490k</span>
						</div>
						<img src="img/19.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb trip" href="" data-fancybox="gallery">
						<div class="media-text info">
							<h3 style="color: rgb(22, 22, 22)">Baroque Style</h3>
							<span class="location" style="color: white">480k</span>
						</div>
						<img src="img/18.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb trip" href="" data-fancybox="gallery">
						<div class="media-text info">
							<h3 style="color: rgb(22, 22, 22)">Classic Style</h3>
							<span class="location" style="color: white">500k</span>
						</div>
						<img src="img/20.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb trip" href="" data-fancybox="gallery">
						<div class="media-text info">
							<h3 style="color: rgb(22, 22, 22)">Neoclassical Style</h3>
							<span class="location" style="color: white">490k</span>
						</div>
						<img src="img/19.jpg" alt="Image" class="box">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb trip" href="" data-fancybox="gallery">
						<div class="media-text info">
							<h3 style="color: rgb(22, 22, 22)">Baroque Style</h3>
							<span class="location" style="color: white">480k</span>
						</div>
						<img src="img/18.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>

			</div>

		</div>
	</div>


	<div class="untree_co-section testimonial-section mtnew">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<h2 class="section-title text-center mb-5">PH???N H???I</h2>

					<div class="owl-single owl-carousel no-nav">
						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="img/denvau.jpg" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">??en V??u</h3>
							<blockquote>
								<p>&ldquo;Kh??ch s???n hi???n ?????i v?? ?????ng c???p. Nh??n vi??n t???n t??nh, chu ????o.&rdquo;</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="img/karik.jpg" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Karik</h3>
							<blockquote>
								<p>&ldquo;Kh??ng c?? g?? ph???i ch??, m???i th??? ?????u sang tr???ng v?? ?????ng c???p.&rdquo;</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="img/midu.jpg" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Midu</h3>
							<blockquote>
								<p>&ldquo;Nh??n vi??n th??n thi???n, ????? ??n ngon v?? ?????p m???t.&rdquo;</p>
							</blockquote>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="untree_co-section mtnew">
		<div class="container">
			<div class="row justify-content-center text-center mb-3">
				<div class="col-lg-6">
					<h2 class="section-title text-center mb-3">DANH S??CH PH??NG</h2>
					<p>T???t c??? c??c ph??ng ???????c c??c thi???t k??? b??i nh???ng nh?? thi???t k??? gi???i nh???t v???i nhi???u phong c??ch v?? n???i th???t ???????c nh???p tr???c ti???p t??? Ch??u ??u. ?????m b???o s??? tr???i nghi???m t???t nh???t cho m???i du kh??ch khi ?????t ch??n t???i kh??ch s???n. </p>
				</div>
			</div>
			<div class="row">
				<div class="owl-carousel owl-3-slider">
				@foreach ($list as $item)
					<div class="item mb-lg-0">
						<div class="media-1">
							<a href="#" class="d-block mb-3"><img src="img/{{$item->hinh_anh_phong}}" alt="Image" class="img-fluid"></a>
							<span class="d-flex align-items-center loc ml-2 mb-2">
								<span class="icon-room mr-3"></span>
								<span>Italy</span>
							</span>
							<div class="d-flex align-items-center ml-2">
								<div>
									<h3><a style="color: rgb(251, 71, 71)" href="#">{{$item->ten_phong}}<span style="color: rgb(28, 28, 90)"> - {{$item->gia_phong}}k</span></a></h3>
									<p>{{$item->mo_ta}}</p>
								</div>
								
							</div>
						</div>
					</div>
								
				@endforeach
				</div>
			</div>
		</div>
	</div>

	<div class="untree_co-section mtnew">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				
				<div class="col-lg-6">
					<figure class="img-play-video">
						<a id="play-video" class="video-play-button" href="https://www.youtube.com/watch?v=mwtbEGNABWU" data-fancybox>
							<span></span>
						</a>
						<img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid rounded-20">
					</figure>
				</div>

				<div class="col-lg-5">
					<h2 class="section-title text-left mb-4">Take a look at Tour Video</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

					<p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

					<ul class="list-unstyled two-col clearfix">
						<li>Outdoor recreation activities</li>
						<li>Airlines</li>
						<li>Car Rentals</li>
						<li>Cruise Lines</li>
						<li>Hotels</li>
						<li>Railways</li>
						<li>Travel Insurance</li>
						<li>Package Tours</li>
						<li>Insurance</li>
						<li>Guide Books</li>
					</ul>

					<p><a href="#" class="btn btn-primary">Get Started</a></p>

					
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
							<h3 class="heading">Li??n h???</h3>
							<ul class="list-unstyled quick-info links">
								<li class="email">huanql16012002@gmail.com</li>
								<li class="phone">0966818546</li>
								<li class="address">S??? 3 ng??ch 6/7 ng?? 7 ph??? Nguy??n X??, Minh Khai, B???c T??? Li??m, H?? N???i</li>
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
	<script>
		$(function() {
			var slides = $('.slides'),
			images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: ["Modern.","Nordic.","Minimalism.","Mid-Century Modern.","Color Block.","Luxury.","Contemporary.","Rustic.","Hi-Tech.","Industrial.","Country.","Romanticism.","Organic.","Hollywood.","Funky.","Metallic.","Brutalism.","Baroque.","Neoclassical.","Classic."
],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true,
				preStringTyped: (arrayPos, self) => {
					arrayPos++;
					console.log(arrayPos);
					$('.slides img').removeClass('active');
					$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
				}

			});
		})
	</script>

	<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
