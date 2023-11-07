<!-- Tambahkan CSS khusus untuk mengatur tampilan slide pada mode mobile -->
<style>
  .wrapper-img-banner {
    max-width: 100%;
    height: 400px;
    overflow: hidden;
  }

  .img-banner {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(50%);
    /* Ubah angka ini untuk mengatur tingkat kegelapan gambar */
  }

  .carousel-caption p {
    color: white;
    /* Ubah warna teks agar terlihat jelas di atas latar belakang gelap */
  }

  /* Ukuran teks untuk perangkat seluler */
  @media (max-width: 600px) {
    .carousel-caption h1 {
      font-size: 25px;
      /* Ukuran font untuk perangkat seluler */
    }

    .carousel-caption p {
      font-size: 13px;
      /* Ukuran font untuk perangkat seluler */
    }

    /* Ukuran teks di bidang perusahaan */
    .name h1 {
      font-size: 40px;
      /* Ukuran font untuk perangkat seluler */
    }

    .name h3 {
      font-size: 18px;
      /* Ukuran font untuk perangkat seluler */
    }

    .name p {
      font-size: 14px;
      /* Ukuran font untuk perangkat seluler */
    }

    .btn {
      font-size: 14px;
      padding: 10px 15px;
    }
  }
</style>

<!-- Slide otomatis -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">

    <!-- Slide Pertama -->
    <div class="carousel-item active">
      <div class="wrapper-img-banner">
        <img src="https://png.pngtree.com/background/20230527/original/pngtree-modern-office-building-with-reflective-glass-walls-picture-image_2758459.jpg" class="img-banner">
      </div>

      <div class="container">
        <div class="carousel-caption text-start" style="bottom: 60px;" >
          <h1>Tentang Kami</h1>
          <p>PT Karunia Cipta Qinsani adalah perusahaan yang bergerak dalam bidang konsultasi, pelatihan, dan coaching. Kami dapat menjadi mitra strategis Anda dalam mengembangkan potensi dan mencapai keunggulan kompetitif. 
            Untuk mengetahui lebih dalam, jelajahi visi, misi, dan nilai-nilai perusahaan kami, yang akan memberikan wawasan tentang cara kami berusaha mencapai tujuan bersama dengan Anda. </p>
          <a class="btn btn-lg btn-primary" href='/About Us'>Pelajari Lebih Lanjut</a></p>
        </div>
      </div>
    </div>

    <!-- Slide Kedua -->
    <div class="carousel-item">
      <div class="wrapper-img-banner">
        <img src="https://images.unsplash.com/photo-1579389083078-4e7018379f7e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="img-banner">
      </div>

      <div class="container">
        <div class="carousel-caption" style="bottom: 60px;">
          <h1>Layanan Kami</h1>
          <p>Kami menyediakan layanan jasa yang berkualitas tinggi untuk membantu Anda mencapai potensi penuh dalam pengembangan profesional dan organisasi Anda.
          <p>Memberikan layanan konsultasi yang tepat, pelatihan yang terfokus, dan pembinaan pribadi untuk membantu mencapai potensi penuh Anda.
          <p><a class="btn btn-lg btn-primary" href='/Our Service'>Telusuri Layanan Kami</a></p>
        </div>
      </div>
    </div>

    <!-- Slide Ketiga -->
    <div class="carousel-item">
      <div class="wrapper-img-banner">
        <img src="https://images.unsplash.com/photo-1521898284481-a5ec348cb555?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" class="img-banner">
      </div>

      <div class="container">
        <div class="carousel-caption text-end" style="bottom: 80px;">
          <h1>Kontak Kami</h1>
          <p>Kami selalu siap untuk mendengarkan informasi tambahan atau menjawab pertanyaan lebih lanjut dari Anda. Jangan ragu untuk menghubungi kami. Tim kami yang berpengalaman siap membantu Anda dalam hal apa pun yang Anda butuhkan. Kami percaya dalam memberikan pelayanan yang berkualitas dan solusi yang relevan untuk memenuhi kebutuhan Anda </p>
          <a class="btn btn-lg btn-primary" href='/Contact Us'>Hubungi Kami</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Button Selanjutnya dan sebelumnya -->
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="transparent-container" style="  background-color: rgba(255, 255, 255, 0.5); padding: 10px;"></div>

<!-- Bidang Perusahaan -->
<div class="container name">
  <div class="col-lg-8 mx-auto p-3 py-md-5 text-center">
    <h1 style="color: #f7a600; font-weight: bolder;">PT. Karunia Cipta Qinsani</h1>
    <h3>Fokus Bidang:</h3>
  </div>

  <!-- Isi Layanan -->
  <div class="row text-center">

    <!-- Training -->
    <div class="col-lg-4">
      <div class="container">
        <img src="{{ asset('images/training.png') }}" alt="Gambar Anda" width="150" height="130" style="margin-right: 20px; margin-left: 20px;">
      </div>

      <div class="transparent-container" style="  background-color: rgba(255, 255, 255, 0.5); padding: 10px;"></div>
      <h2>Training</h2>
      <p>Melatih peserta untuk mengembangkan dan meningkatkan keterampilan, pengetahuan atau kemampuan dalam suatu bidang tertentu.</p>
    </div><!-- /.col-lg-4 -->

    <!-- Coaching -->
    <div class="col-lg-4">
      <div class="container">
        <img src="{{ asset('images/coaching.png') }}" alt="Gambar Anda" width="150" height="130" style="margin-right: 20px; margin-left: 20px;">
      </div>

      <div class="transparent-container" style="  background-color: rgba(255, 255, 255, 0.5); padding: 10px;"></div>
      <h2>Coaching</h2>
      <p>Melatih peserta untuk menghasilkan kinerja dengan lebih baik, mengatasi hambatan, dan mengembangkan keterampilan peserta.</p>
    </div><!-- /.col-lg-4 -->

    <!-- Consulting -->
    <div class="col-lg-4">
      <div class="container">
        <img src="{{ asset('images/consultation.png') }}" alt="Gambar Anda" width="150" height="130" style="margin-right: 20px; margin-left: 20px;">
      </div>

      <div class="transparent-container" style="  background-color: rgba(255, 255, 255, 0.5); padding: 10px;"></div>
      <h2>Consulting</h2>
      <p>Membantu peserta atau sebuah organisasi dalam memecahkan masalah, meningkatkan efisiensi, mengidentifikasi peluang untuk menjadi strategi, dan memberikan saran dan solusi untuk mengatasi tantangan tertentu.</p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
</div><!-- /.container -->