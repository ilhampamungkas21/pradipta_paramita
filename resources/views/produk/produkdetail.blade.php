<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CV.Pradipta Paramita</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/title.ico')}}">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/icons.min.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<header class="header-area header-padding-1 sticky-bar header-res-padding clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-6 col-4">
                <div class="logo">
                    <a href="index.html">
                        <img alt="" width="250px" height="auto" src="{{asset('assets/img/logo/logo.png')}}">
                    </a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li><a href="{{url('produk/pertanian')}}"> Pertanian </a></li>
                            <li><a href="{{url('produk/peternakan')}}"> Peternakan</a></li>
                            <li><a href="{{url('produk/perikanan')}}"> Perikanan</a></li>
                            <li><a href="{{url('produk/dekomposer')}}"> Dekomposer</a></li>
                            <li><a href="{{url('produk/racunlalat')}}"> Racun Lalat </a></li>
                            <li><a href="{{url('produk/burung')}}"> Burung</a></li>

                        </ul>
                    </nav>
                </div>
            </div>

        </div>
        <div class="mobile-menu-area">
            <div class="mobile-menu">
                <nav id="mobile-menu-active">
                    <ul class="menu-overflow">

                            <li><a href="about.html"> Pertanian </a></li>
                            <li><a href="contact.html"> Peternakan</a></li>
                            <li><a href="contact.html"> Perikanan</a></li>
                            <li><a href="contact.html"> Dekomposer</a></li>
                            <li><a href="contact.html"> Racun Lalat </a></li>
                            <li><a href="contact.html"> Burung</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{url('produk.html')}}">Home</a>
                </li>
                <li class="active">Detail Produk </li>
            </ul>
        </div>
    </div>
</div>




<div class="shop-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details">
                    <div class="product-details-img">
                        <div class="tab-content jump"> 
                            <div id="shop-details-1" >
                                <div class="img-popup-wrap">
                                    <a class="img-popup" href="{{asset('assets/img/product-details/large-1.jpg')}}">
                                        <i class="pe-7s-expand1"></i>

                                        <img width="570" height="680" src="{{ asset('img/gambar_barang/' . $detail-> gambar_barang) }}" alt="">
                                    </a>
                                </div>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product-details-content ml-70">
                    <h2>{{$detail -> nama_barang}}</h2>
                    <div class="product-details-price">
                        <span> {{$detail -> harga_barang}} </span>
                    </div>
                    <div class="pro-details-rating-wrap">
                        <div class="pro-details-rating">
                            <i class="fa fa-star yellow"></i>
                            <i class="fa fa-star yellow"></i>
                            <i class="fa fa-star yellow"></i>
                            <i class="fa fa-star yellow"></i>
                            <i class="fa fa-star yellow"></i>
                        
                        </div>
                    </div>
                    <p>{{$detail -> deskripsi_barang_singkat}}</p>
                    <div class="pro-details-list">

                    </div>

                    <div class="pro-details-meta">
                        <span>Categories :</span>
                        <ul>
                            <li><a href="#"> {{$detail -> kategori_barang}} </a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<div class="description-review-area pb-90">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav">
                <a class="active" data-toggle="tab" href="#des-details2">Description</a>
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details2" class="tab-pane active">
                    <div class="product-description-wrapper">
                        <textarea readonly rows="30" cols="auto"> {{$detail -> deskripsi_barang_panjang}}</textarea>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>




<!-- Produk Terkait
<div class="related-product-area pb-95">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>Produk Terkait</h2>
        </div>
        <div class="related-product-active owl-carousel">

        
            <div class="product-wrap">
                <div class="product-img">
                    <a href="#">
                        <img class="default-img" src="assets/img/product/pro-1.jpg" alt="">
                        <img class="hover-img" src="assets/img/product/pro-1-1.jpg" alt="">
                    </a>
                    <span class="pink">-10%</span>
                    <div class="product-action">
                        <div class="pro-same-action pro-wishlist">
                            <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="pro-same-action pro-cart">
                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                        </div>
                        <div class="pro-same-action pro-quickview">
                            <a title="Quick View" href="#" data-toggle="modal" data-target="#exampleModal"><i class="pe-7s-look"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-content text-center">
                    <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="product-price">
                        <span>$ 60.00</span>
                        <span class="old">$ 60.00</span>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
-->




<footer class="footer-area bg-gray pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">

            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget mb-30 ml-75">
                    <div class="footer-title">
                        <h3>FOLLOW US</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="https://www.youtube.com/channel/UCZemvr3rpweLTj3Tr-h7n5g">Youtube</a></li>
                            <li><p>© 2019 <a href="">Pradipta Paramita</a>.<br> All Rights Reserved</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>











<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Ajax Mail -->
<script src="{{asset('assets/js/ajax-mail.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>