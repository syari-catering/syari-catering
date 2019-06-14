  <!-- HEADER -->
  
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
      </div>

    </div>
  </section>




  <!-- FOOTER -->
   @include('templates.partials._footer')

  
