<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pradipta Paramita</title>
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
                        <img alt="" width="250px" height="auto" src="assets/img/logo/logo.png">
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
                    <a href="{{url('/')}}">Beranda</a>
                </li>
                <li class="active">Daftar Barang </li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-area pt-95 pb-100">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="shop-top-bar">
                    <div class="select-shoing-wrap">
                        <div class="shop-select">
                        </div>
                        <p>Menampilkan Hasil : {{$totalproduk}}</p>
                    </div>
                    <div class="shop-tab nav">
                        <a class="active" href="#shop-1" data-toggle="tab">
                            <i class="fa fa-table"></i>
                        </a>
                        <a href="#shop-2" data-toggle="tab">
                            <i class="fa fa-list-ul"></i>
                        </a>
                    </div>
                </div>
                <div class="shop-bottom-area mt-35">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">




                                @foreach($daftarproduk as $dataproduk)
                                <div class="col-xl-4 col-md-4 col-lg-4 col-sm-6">
                                    <div class="product-wrap mb-25 scroll-zoom">
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="default-img" src="{{ asset('img/gambar_barang/' . $dataproduk->gambar_barang) }}" alt="">
                                                <img class="hover-img" src="{{ asset('img/gambar_barang/' . $dataproduk->gambar_barang) }}" alt="">
                                            </a>
                                            <div class="product-action">

                                                <div class="pro-same-action pro-cart">
                                                    <a title="Add To Cart" href="{{url('produkdetail/'. $dataproduk -> id )}}"><i class="pe-7s-cart"></i> Lihat </a>
                                                </div>
                                                <div class="pro-same-action pro-quickview">
                                                    <a title="Quick View" href="#" data-toggle="modal" data-target="#modal{{$dataproduk->id}}"><i class="pe-7s-look"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h3><a href="product-details.html"> {{$dataproduk -> nama_barang}}</a></h3>
                                            <div class="product-rating">
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               





                            </div>
                        </div>
                        <div id="shop-2" class="tab-pane">




                            @foreach($daftarproduk as $dataproduk)
                            <div class="shop-list-wrap mb-30 scroll-zoom">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                        <div class="product-wrap">
                                            <div class="product-img">
                                                <a href="#">
                                                <img class="default-img" src="{{ asset('img/gambar_barang/' . $dataproduk->gambar_barang) }}" alt="">
                                                <img class="hover-img" src="{{ asset('img/gambar_barang/' . $dataproduk->gambar_barang) }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6">
                                        <div class="shop-list-content">
                                            <h3><a href="#">{{$dataproduk -> nama_barang}}</a></h3>
                                            <div class="product-list-price">
                                            </div>
                                            <div class="rating-review">
                                                <div class="product-list-rating">
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>

                                                </div>
                                            </div>
                                            <p>{{$dataproduk -> deskripsi_barang_singkat}} </p>
                                            <div class="shop-list-btn btn-hover">
                                                <a href="{{url('produkdetail/'. $dataproduk -> id )}}">Detail Produk</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach








                        </div>
                    </div>
                    <div >
                        <ul>
                            <li><{{ $daftarproduk -> render() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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



<!-- Modal -->
@foreach( $daftarproduk as $dataproduk )
<div class="modal fade" id="modal{{$dataproduk->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="tab-content quickview-big-img">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="{{ asset('img/gambar_barang/' . $dataproduk->gambar_barang) }}" alt="">
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2>{{$dataproduk -> nama_barang}}</h2>

                            <div class="pro-details-rating-wrap">
                                <div class="pro-details-rating">
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>

                                </div>
                            </div>
                            <p>{{$dataproduk -> deskripsi_barang_singkat}}</p>
                            <div class="pro-details-list">
                                <a href="{{url('produkdetail/'.$dataproduk -> id)}}">
                                    <button type="button" class="btn btn-primary">Cek Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- Modal end -->









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