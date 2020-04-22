<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CV.Pradipta Paramita</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('blog/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('blog/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{asset('blog/css/clean-blog.min.css')}}" rel="stylesheet">
  <link href="{{asset('blog/css/terkait.css')}}" rel="stylesheet">
 
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">Beranda</a>>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{url('artikelperikanan.html')}}">Perikanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('artikelpertanian.html')}}">Pertanian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('artikelpeternakan.html')}}">Peternakan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('artikeldekomposer.html')}}">Dekomposer</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('artikelracunlalat.html')}}l">Racun Lalat</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('artikelburung.html')}}">Burung</a>
          </li>


        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image:url({{url('img/isi_pertanian.jpg')}})  ">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{$artikell -> judul_artikel}}</h1>
            <h2 class="subheading">Bisnis itu dimulai dari apa yang anda cinta, mulai dari yang anda bisa, dan mulai dari yang anda punya</h2>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>{{$artikell -> isi_artikel}}</p>

          

          <a href="#">
            <img class="img-fluid" src="{{ asset('img/gambar_artikel/' . $artikell->gambar_artikel) }}" alt="">
          </a>
        
        </div>
      </div>
    </div>
  </article>

  <hr>



<div class="container">
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Produk Terkait</h1>
    <p class="lead">Produk Pradipta Paramita telah menjadi produk idaman bagi pelaku pengusaha dalam meningkatkan jumlah
    omset dan meingkatkan kualitas produk</p>
  </div>
</div>


        <div class="row">

            @foreach($produkterkaitt as $terkait)
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-primary ">
                    <a href="{{url('produkdetail/'.$terkait ->id)}}">
                      
                         
                                          <img src="{{asset('img/gambar_barang/'. $terkait -> gambar_barang)}}" class="img" alt="Responsive image">


                    </a>
                    <blockquote class="card-blockquote p-3">
                        <p>{{$terkait -> nama_barang}}</p>
                        
                    </blockquote>

                </div>
            </div>
            @endforeach

        </div>
</div>









  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p class="copyright text-muted">Copyright &copy; CV.Pradipta Paramita</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('blog/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('blog/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('blog/js/clean-blog.min.js')}}"></script>

</body>

</html>
