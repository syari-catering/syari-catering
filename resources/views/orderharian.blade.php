<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>Syari Catering - Harian</title>
  
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{asset('assets/client/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  
    <!-- Custom fonts for this template -->
    <link href="{{asset('assets/client/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


    <!-- Icons font CSS-->
    <link href="{{asset('assets/client/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('assets/client/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/client/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets/client/css/main.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/client/css/agency.min.css')}}" rel="stylesheet">
    
</head>

<body>

        <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
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

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Order Katering Harian</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Subject</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   <!-- FOOTER -->
   @include('templates.partials._footer')


    <!-- Jquery JS-->
    <script src="{{asset('assets/client/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('assets/client/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/client/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/client/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('assets/client/js/global.js')}}"></script>

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
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
