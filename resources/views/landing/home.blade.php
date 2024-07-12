@extends('landing.layout')
@section('conten')


  <!-- ======= Header ======= -->
  

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slider1.png)">
          <div class="carousel-container">
            <div class="container">
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slider2.jpg)">
          <div class="carousel-container">
            <div class="container">
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slider3.jpg)">
          <div class="carousel-container">
            <div class="container">
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Services Section ======= -->
  
    <section id="services" class="services">
      <h2>Nikmati Keberagaman Berbelanja</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi">
                <img src="assets/img/aicon 1.png" alt="Ikon Toko" class="custom-icon">
            </i>
              <h4><a href="#">Sentra UMKM</a></h4>
              <p>pusat bisnis di sebuah kawasan
                 tertentu dimana terdapat
                 pelaku usaha yang mengunakan
                 bahan baku/sarana yang sama</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi">
                <img src="assets/img/aicon 2.png" alt="Ikon Toko" class="custom-icon">
            </i>
              <h4><a href="#">Harga Bersaing</a></h4>
              <p> kemampuan pelaku usaha dalam menyesuaikan
                  harga produknya dengan harga pasar.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi">
                <img src="assets/img/aicon 3.png" alt="Ikon Toko" class="custom-icon">
            </i>
              <h4><a href="#">Produk Unggulan</a></h4>
              <p>produk yang potensial dikembangkan pada
                suatu wilayah dengan memanfaatkan SDA dan
                SDM lokal yang berorientasi pasar dan ramah
                lingkungan sehingga memiliki keunggulan
                kompetitif dan siap menghadapi persaingan global</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi">
                <img src="assets/img/aicon 4.png" alt="Ikon Toko" class="custom-icon">
            </i>
              <h4><a href="#">Dukungan Pemerintah</a></h4>
              <p>diberikan kepada pelaku usaha untuk membantu
                permodalan para pelaku UMKM. Penyaluran bantuan
                ini tercantum dalam Peraturan Menteri Keuangan
                No.134/2022 tentang Belanja Wajib Dalam Rangka
                Penanganan Dampak Inflasi Tahun Anggaran 2022.</p>
            </div>
          </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Food</li>
              <li data-filter=".filter-card">Elektronik</li>
              <li data-filter=".filter-web">fashions</li>
              <li data-filter=".filter-kc">Kecantikan</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/makanan 1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>FOOD 1</h4>
                <p>FOOD</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/makanan 1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Outpit 1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>fashions 1</h4>
                <p>fashions</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Outpit 1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/makanan 2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>FOOD 2</h4>
                <p>FOOD</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/makanan 2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/makanan 4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>FOOD 3</h4>
                <p>FOOD</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/makanan 4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/makanan 5.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>FOOD 3</h4>
                <p>FOOD</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/makanan 5.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/elektronik 2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

         

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Makanan 3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>FOOD 3</h4>
                <p>FOOD</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Makanan 3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/elektronik 1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/elektronik 1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Outfit 2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>fashions 3</h4>
                <p>fashions</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Outfit 2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Outfit 3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>fashions3</h4>
                <p>fashions</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Outfit 3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Outfit 4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>fashions 3</h4>
                <p>fashions</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Outfit 4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-kc">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kecantikan 1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kecantikan 1</h4>
                <p>kecantikan</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kecantikan 1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-kc">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kecantikan 2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kecantikan 2</h4>
                <p>kecantikan</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kecantikan 2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-kc">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kecantikan 3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kecantikan 3</h4>
                <p>kecantikan</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kecantikan 3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-kc">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kecantikan 4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kecantikan 4</h4>
                <p>kecantikan</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kecantikan 4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  



@endsection