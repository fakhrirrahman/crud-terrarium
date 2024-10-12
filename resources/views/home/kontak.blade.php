<!-- resources/views/profil/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terrarium.qu</title>
    <link rel="icon" type="image/png" href="{{ asset('profil/img/logo.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Comfortaa:wght@300..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="{{ asset('profil/css/style.css?v=1.0') }}" />
    <link rel="stylesheet" href="{{ asset('profil/css/nav.css') }}">
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar1">
      <a href="{{ url('/') }}">
      <img src="{{ asset('profil/img/logo.png') }}" class="navbar-logo"> </a>
  
      <div class="navbar1-nav">
          <a href="{{route('welcome')}}">HOME</a>
          <a href="{{route('about')}}">TENTANG KAMI</a>
          <a href="{{route('item')}}">PRODUK</a>
          <a href="{{route('foto')}}">GALERI</a>
          <a href="{{route('panduan')}}">PANDUAN</a>
          <a href="{{route('kontak')}}">KONTAK</a>
      </div>
  
      <div class="navbar1-extra">
          <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
  <!-- Navbar End -->

  <!-- Hero Section Start -->
  <section class="hero" id="home">
    <main class="content">
        <p>TERRARIUM.QU</p>
        <h1>Membawa Hutan Kedalam Ruangan</h1>
    </main>
  </section>
  <!-- Hero Section End -->

  
 <!-- location Section Start -->
<section id="location" class="location">
    <h2><span>KONTAK</span></h2>
    <!-- <p>Our Location📍</p> -->
  
    <div class="row">
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.188370743318!2d110.40727397319435!3d-7.769839677068732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5993dcd3a59f%3A0xb4f5bab3a939f52b!2sJl.%20Seturan%20Raya%2C%20Kledokan%2C%20Caturtunggal%2C%20Kec.%20Depok%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1716306678695!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
      </div>
      <div class="contact-form">
        <form action="{{route('pesan.store')}}" method="post">
          @csrf
          <h2>Contact Us</h2>
          <label for="name">Name:</label>
          <input type="text" id="nama" name="nama" required>
          <label for="telp">No. Telp:</label>
          <input type="text" id="telp" name="telp" required>
          <label for="msg">Message:</label>
          <textarea id="msg" name="msg" rows="5" required></textarea>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </section>
  <!-- location Section End -->
  
  <!-- Footer Start -->
  <footer>
    <div class="footer-container">
      <div class="footer-left">
        <img src="{{ asset('profil/img/logo.png') }}" alt="Terrarium.qu Logo" class="footer-logo">
      </div>
      <div class="footer-center">
        <h3>TERRARIUM.QU</h3>
        <p>Membawa Hutan Kedalam Ruangan</p><br>
        <p>© Created and Copyright by Tech Titans. 2024.</p>
      </div>
      <div class="footer-right">
        <div class="social-icons">
            <a href="https://www.instagram.com/terrarium.qu?igsh=MW50ZHpjNTYyb2YxNQ=="><i class="fab fa-instagram"></i></i></a>
            <a href="https://www.tiktok.com/@terrarium.qu?_t=8mamJWuB8St&_r=1"><i class="fab fa-tiktok"></i></a>
            <a href="089608543320"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>

  <!-- My JavaScript -->
  <script src="{{ asset('profil/javascript/nav.js') }}"></script>
  <script src="{{ asset('profil/javascript/index.js') }}"></script>

</body>
</html>
