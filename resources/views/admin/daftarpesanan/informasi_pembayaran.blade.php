
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Payment :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //font-awesome icons -->

<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>

<body>
<!-- header -->
<div class="agileits_header">
	<div class="w3l_offers">
		<a href="products.html">Kapan Lagi Belanja Murah !</a>
	</div>

	<div class="w3l_header_right">
		<ul>
			<li class="dropdown profile_details_drop">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
				<div class="mega-dropdown-menu">
					<div class="w3ls_vegetables">
						<ul class="dropdown-menu drp-mnu">
							<li><a href="#">Masih Kosong</a></li>
							<li><a href="registerpembeli.html">Login/Daftar</a></li>
							<li>
												 @if(Auth::user())
													<a href="daftarpesanan.html">daftarpesanan</a>
												 @endif

												 @if(Auth::guest())
														<a href="/">belum ada pesanan</a>
												 @endif
											</li>

						</ul>
					</div>
				</div>
			</li>
		</ul>
	</div>

	<div class="w3l_header_right1">
		<h2>
			<a href="">
				 @if(Auth::user())
					{{ Auth::user()->name }}
				 @endif

				 @if(Auth::guest())
						Belum Login
				 @endif
			</a>
		</h2>
	</div>
	<div class="clearfix"> </div>
</div>

	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="/"><span>Toko</span>Beras</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="daftarproduk.html">Daftar Beras</a></li>
					<li></li>
					<li><a href="tentang.html">Tentang Kami</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				<li>Informasi Pembayaran</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div>
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="daftarproduk.html">Daftar Beras</a></li>
						<li><a href="tentang.html">Tentang Kami</a></li>


					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- payment -->
		<div class="privacy about">
			<h3>Pay<span>mentt</span></h3>











      <!------ Include the above in your HEAD tag ---------->

              <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                  <div class="row">
                      <div class="col-xs-6 col-sm-6 col-md-6">
                          <address>
                              <strong>Nama Penerima : {{$pesanan -> nama_penerima}}</strong>
                              <br>
                              <strong>Alamat Penerima : {{$pesanan -> alamat_penerima }}</strong>
                              <br>
                              <strong>Telepon Pembeli : {{$pesanan -> telepon_pemesan}}</strong>
															<br>
															<strong>Telepon Penjual : {{$pesanan ->telepon_penjual}} </strong>
                              <br>
                          </address>
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                          <p>
                              <em>Tanggal Pemesan : {{$pesanan -> created_at}}</em>
                          </p>
                          <p>
                              <em>Id Pesanan : {{$pesanan -> id}}</em>
                          </p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="text-center">
                          <h1>Receipt</h1>
                      </div>
                      </span>
                      <table class="table table-hover">
                          <thead>
                              <tr>
                                  <th>Product</th>
                                  <th>ID Barang</th>
                                  <th class="text-center">Total Pembayaran</th>
																	<th class="text-center">Harga Beras Per Kg</th>
                                  <th class="text-center">-</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td class="col-md-9"><em>{{$pesanan -> nama_barang}}</em></h4></td>
                                  <td class="col-md-1" style="text-align: center"> {{$pesanan -> id}} </td>
                                  <td class="col-md-1 text-center" >{{$pesanan -> harga_total}}</td>
																	<td class="col-md-1 text-center" >{{$pesanan -> barang -> harga_barang}}</td>
                                  <td class="col-md-1 text-center">-</td>
                              </tr>

															<thead>

		                          </thead>
                              <tr>
                                  <td> <p>Jumlah Pesanan :</p> </td>
                                  <td> <p id="jumlahpesanan">   </p>  </td>



                              </tr>
                              <tr>
                                  <td>   </td>
                                  <td>   </td>
                                  <td class="text-right"><h4><strong>Total: </strong></h4></td>
                                  <td class="text-center text-danger"><h4><strong> Rp {{$pesanan -> harga_total}}</strong></h4></td>
                              </tr>

                          </tbody>




                      </table>
										<!--	<a  href="kirimemailadmin.html">

												<button type="button" class="btn btn-success btn-lg btn-block">
														Lanjut Hubungi Admin untuk pemesanan  <span class="glyphicon glyphicon-chevron-right"></span>
												</button>

											</a>
										-->



											<a  href="https://wa.me/{{$pesanan->telepon_penjual}}?text=Halo,Saya%20{{Auth::user()->name}}%0ASaya%20Bermaksud%20untuk%20membeli
												%3A%0ANama%20Barang%3A{{$pesanan -> nama_barang}}%0ATotal%20Harga%3A{{$pesanan -> harga_total}}">
												<button type="button" class="btn btn-success btn-lg btn-block">
														Hubungi Penjual untuk pemesanan <span class="glyphicon glyphicon-chevron-right"></span>
												</button>
											</a>


											</td>
                  </div>
              </div>


























		</div>
<!-- //payment -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->


<!-- newsletter -->

<!-- //newsletter -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 w3_footer_grid">
			<h3>information</h3>
			<ul class="w3_footer_grid_list">
				<li><a href="about.html">About Us</a></li>
				<li><a href="products.html">Best Deals</a></li>
			</ul>
		</div>

		<div class="clearfix"> </div>

		<div class="wthree_footer_copy">
			<p>© 2016 Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
</div>
<!-- //footer -->
<!-- js -->
<script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
<!-- easy-responsive-tabs -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/easy-responsive-tabs.css')}}" />
<script src="{{asset('frontend/js/easyResponsiveTabs.js')}}"></script>
<!-- //easy-responsive-tabs -->
	<script type="text/javascript">
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
<!-- credit-card -->
		<script type="text/javascript" src="{{asset('frontend/js/creditly.js')}}"></script>
        <link rel="stylesheet" href="{{asset('frontend/css/creditly.css')}}" type="text/css" media="all" />

		<script type="text/javascript">
			$(function() {
			  var creditly = Creditly.initialize(
				  '.creditly-wrapper .expiration-month-and-year',
				  '.creditly-wrapper .credit-card-number',
				  '.creditly-wrapper .security-code',
				  '.creditly-wrapper .card-type');

			  $(".creditly-card-form .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
				  // Your validated credit card output
				  console.log(output);
				}
			  });
			});
		</script>
	<!-- //credit-card -->

<!-- //js -->
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop();
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });

	});
	</script>
<!-- //script-for sticky-nav -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('frontend/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/easing.js  ')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
<script src="{{asset('frontend/js/minicart.js')}}"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>
