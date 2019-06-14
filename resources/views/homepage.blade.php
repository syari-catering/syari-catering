<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  
<!------ info ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <!-- Custom styles for this template -->  
  <link href="{{asset('client/assets/css/coba.css')}}" rel="stylesheet">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

    <title>Catering by SyariHub</title>
  
    <!-- Bootstrap core CSS -->
    <link href="{{asset('client/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  
    <!-- Custom fonts for this template -->
    <link href="{{asset('client/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  
    <!-- Custom styles for this template -->
    <link href="{{asset('client/assets/css/agency.min.css')}}" rel="stylesheet">


</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand" href="#page-top"><img alt="logo" src="{{asset('client/assets/img/logoc.svg')}}" class="img-responsive" style="width:40px;"/></a>
          <a class="navbar-brand js-scroll-trigger" href="#">Syari Catering</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#paket">Paket</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#deals">Deals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#info">Info</a>
              </li>
  
              {{-- dropdown menu --}}
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Lainnya
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background:#212529;">
                  <a class="dropdown-item" href="" style="color: white; background:#212529; 
                  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';" href="#">Pembayaran</a>
                  <a class="dropdown-item" href="" style="color: white; background:#212529; 
                  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';" href="#">Cek Pesanan</a>
                  <a class="dropdown-item" href="" style="color: white; background:#212529; 
                  font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';" href="#">Menjadi Mitra</a>
              </div>
              </li>
            
  
                
            </ul>
          </div>
        </div>
      </nav>

    <!-- Header -->
    @include('templates.partials._header')


  <!-- PAKET -->
  <section class="page-section" id="paket">
    <div class="container">
       <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Pilihan Paket</h2>
              <h3 class="section-subheading text-muted">  </h3>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-users fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Paket Harian</h4>
              <p class="text-muted">Layanan sarapan dan/atau makan siang keluarga, rekan, atau orang terdekat.
                  <br> (min. order 3 porsi)
                  </p>
            </div>
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-building fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Paket Instansi</h4>
              <p class="text-muted">Jasa boga untuk konsumsi murid, karyawan, tim, dan lainnya. 
                <br> (min. order 50 porsi)</p>
            </div>
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-birthday-cake fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Paket Acara</h4>
              <p class="text-muted">Katering untuk berbagai acara/kegiatan dengan sistem prasmanan maupun paket box.</p>
            </div>
          </div>
        </div>
  </section>
  
  
  
  
    <!-- MENU -->
    <section class="bg-light page-section" id="menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Menu</h2>
            <h3 class="section-subheading text-muted"> Ganti setiap hari, update setiap bulan </h3>
          </div>
        
   
  
        </div> 
      </div>
    </section>
    
    
  
  
  
  
  
  
    <!-- DEALS -->
    <section class="page-section" id="deals">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">DEALS</h2>
            <h3 class="section-subheading text-muted"> Tunggu promo terbaik dari kami</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                      <img src="{{asset('client/assets/img/deals/1.png')}}" class="d-block w-100" alt="Banyak Variasi Menu">
                    </div>
                  
                   
                    <div class="carousel-item">
                      <img src="{{asset('client/assets/img/deals/2.png')}}" class="d-block w-100" alt="Gratis Ongkir">
                    </div>
                  
  
                  
                    <div class="carousel-item">
                      <img src="{{asset('client/assets/img/deals/3.png')}}" class="d-block w-100" alt="Berbagi">
                    </div>
                  
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
          </div>
        </div>
      </div>
    </section>
  
  
  
  
  
    <!-- INFO -->
    <section class="bg-light page-section" id="info">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Tentang</h2>
            <h3 class="section-subheading text-muted">Catering by SyariHub</h3>
          </div>
        </div>
  
        <div class="row">
        <div class="col-md-6">
          <ul class="list-inline about">
            <li> 
              <h3> Syarihub </h3> @include('templates.partials._tl')
            </li>
          </ul>
        </div>

        <div class="col-md-6">
            <ul class="list-inline about">
              <li> 
                <i class="fa fa-chevron-down" style="color:#fed136;"> </i> Memudahkan para orangtua dan instansi untuk menyediakan sarapan dan makan siang bagi keluarga atau kolega <br>
                <i class="fa fa-chevron-down" style="color:#fed136;"> </i> Pilihan jasa katering halal dan amanah untuk berbagai acara <br>
                <i class="fa fa-chevron-down" style="color:#fed136;"> </i> Sarana pemesanan dan distribusi makanan untuk sedekah kepada golongan yang membutuhkan
              </li>

             
              <li class="list-inline-item">
                  <a href="https://www.instagram.com/syaricatering/">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://bit.ly/syaricatering/">
                    <i class="fab fa-whatsapp" style="color:white; background-color:#fed136; size:15px; display:block;"></i>
                  </a>
              </li>
              <br>
              <p class="text-muted small"> Jam operasional admin: Senin s/d Sabtu pukul 05:00 - 21:00 WIB </p> 

            </ul>
        </div>
        </div>
  
      </div>
    </section>

      <!-- FOOTER -->
   @include('templates.partials._footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('client/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('client/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{asset('client/assets/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{asset('client/assets/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('client/assets/js/agency.min.js')}}"></script>
  
</body>

</html>
