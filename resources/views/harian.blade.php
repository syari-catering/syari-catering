<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


  <!-- Custom styles for this template -->  
    <link href="{{asset('client/assets/css/coba.css')}}" rel="stylesheet">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

    <title>Catering by SyariHub</title>
  
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/client/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  
    <!-- Custom fonts for this template -->
    <link href="{{asset('assets/client/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/client/css/agency.min.css')}}" rel="stylesheet">


</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand" href="#page-top"><img alt="logo" src="{{asset('assets/client/img/logoc.svg')}}" class="img-responsive" style="width:40px;"/></a>
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

      <section class="page-section" id="form">
            <h3 class="text-center"> Formulir Pemesanan Katering Harian </h3> <br>
      <form>
            <div class="container">
            <div class="form-row">
              <div class="form-group col-md-6">
                    <div class="form-group">
                         <label for="name">Nama Lengkap</label>
                         <input type="text" class="form-control" id="name" placeholder="Nama pemesan">
                        </div>
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Alamat email">
              </div>
              <div class="form-group col-md-6">
                <label for="number">Nomor HP</label>
                <input type="number" class="form-control" id="number" placeholder="Nomor telepon aktif atau Whatsapp">

                <label for="number">Jumlah Pesanan</label>
                <input type="number" class="form-control" id="number" placeholder="Besar porsi yang dipesan">
              </div>
            </div>

            <div class="form-group">
              <label for="inputAddress">Alamat Lengkap</label>
              <input type="text" class="form-control" id="address" placeholder="Alamat pengiriman">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">

                <label for="city">Kota</label>
                    <select id="city" class="form-control">
                    <option selected>Pilih kota...</option>
                    <option>Surabaya</option>
                    <option>Sidoarjo</option>
                </select>
                      
                <label for="kec">Kecamatan</label>
                <select id="kec" class="form-control">
                  <option selected>Pilih kecamatan...</option>
                  <option>...</option>
                </select>
            
              </div>
            </div>  
              
            <div class="form-group">
                    <label for="inputAddress">Catatan</label>
                    <input type="text" class="form-control" id="note" placeholder="Instruksi khusus">
            </div>


              <button type="submit" class="btn btn-primary">Buat Pesanan</button>

            </div>
          </div>
        </form>
    </section>

     <!-- Footer -->
  <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <span class="copyright">Copyright &copy; SyariHub 2019
              </span>           
              <br>
            </div>
            <div class="col-md-4">
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/syarihub.id/">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://wa.me/6287751111282">
                    <i class="fab fa-whatsapp"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://facebook.com/OJESYIndonesia/">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
              </ul>
              <br>
              <p class="text-muted" style="font-size:75%;"> <i> Jl. Taman AIS Nasution No. 21, Kec. Genteng <br> Kota Surabaya - Jawa Timur <br> 60271 </i> <p>
            </div>
            <div class="col-md-4">
              <ul class="list-inline quicklinks">
                <li class="list-inline-item">
                  <a href="#">Privacy Policy</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Terms of Use</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">FAQ</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('assets/client/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/client/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('assets/client/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{asset('assets/client/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{asset('assets/client/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('assets/client/js/agency.min.js')}}"></script>
  
</body>

</html>
