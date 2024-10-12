
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terrarium.qu</title>
    <link rel="icon" type="image/png" href="{{ asset('profil/img/logo.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100..900&family=Comfortaa:wght@300..700&family=DM+Sans:wght@100..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="{{ asset('profil/css/style.css?v=1.0') }}">
    <link rel="stylesheet" href="{{ asset('profil/css/nav.css') }}">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }
    .product {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        background-color: #fff;
        margin: 50px auto;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 10px;
        max-width: 1200px;
    }
    .product-display {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .main-image {
        flex: 1;
        text-align: center;
    }
    .main-image img {
        max-width: 100%;
        border-radius: 10px;
        transition: transform 0.3s;
    }
    .main-image:hover img {
        transform: scale(1.05);
    }
    .thumbnails {
        margin-top: 10px;
        display: flex;
        justify-content: center;
        gap: 10px;
    }
    .thumbnails img {
        width: 60px;
        height: 60px;
        border-radius: 5px;
        cursor: pointer;
        border: 2px solid transparent;
        transition: border-color 0.3s;
    }
    .thumbnails img:hover {
        border-color: #007bff;
    }
    .product-details {
        flex: 1;
    }
    .product-details h2 {
        color: #333;
        font-size: 24px;
        margin-bottom: 10px;
    }
    .product-details p {
        color: #555;
        line-height: 1.6;
    }
    .product-details .add-to-cart {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .product-details .add-to-cart:hover {
        background-color: #0056b3;
    }
    .product-details .description {
        margin-top: 20px;
    }
    .product-details ul {
        list-style: disc;
        padding-left: 20px;
    }
    .product-details ul li {
        margin-bottom: 5px;
    }
</style>
<body>
  <!-- Navbar Start -->
  <nav class="navbar1">
    <a href="#">
        <img src="{{ asset('profil/img/logo.png') }}" class="navbar-logo" alt="Terrarium.qu Logo">

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

    <section id="product" class="product">
        <div class="product-display">
            <div class="main-image" id="sticky-image">
                <img src="{{ asset('profil/img/premium-1.png')}}" id="main-img">
                <div class="thumbnails">
                    <img src="{{ asset('profil/img/premium-1.png')}}" alt="Premium Terrarium Substrate Mix Thumbnail" onclick="changeMainImage(this)">
                    <img src="{{ asset('profil/img/kemasan.png')}}" alt="Another Thumbnail" onclick="changeMainImage(this)">
                    <img src="{{ asset('profil/img/gakaca.png')}}" alt="Another Thumbnail" onclick="changeMainImage(this)">
                    <img src="{{ asset('profil/img/kaca.png')}}" alt="Another Thumbnail" onclick="changeMainImage(this)">
                </div>
            </div>
            
            <div class="product-details">
                <p>Terrarium.qu</p>
                <h2>Kit DIY Terrarium Tipe Premium dengan Wadah Fishbowl </h2>
                <p>Rp 85.000 IDR</p><br>
                <!-- <button class="chat" onclick="startWhatsAppChat()"><i class="fab fa-whatsapp"></i> Chat</button> -->
                <a href="{{route('dashboard.beli')}}" class="add-to-cart">Beli Sekarang</a>
            
                <div class="description"><br><br>
                    <label for="description">Deskripsi:</label>
                    <p>
                        Hadirkan keindahan alam ke dalam rumah Anda dengan terrarium kaca yang menawan ini. Didesain dengan elegan, terrarium ini berbentuk mangkuk kaca terbalik yang menampung berbagai lapisan tanah dan tanaman kecil yang subur. Setiap lapisan tanah disusun dengan teliti untuk menciptakan ekosistem mini yang harmonis dan menawan.
                    </p>
                    <p>
                        Terrarium ini didukung oleh potongan kayu alami yang unik, memberikan kesan artistik dan alami pada setiap sudut ruangan Anda. Cocok ditempatkan di ruang tamu, meja kerja, atau bahkan sebagai pusat perhatian di meja makan Anda.
                    </p>
                    <p> Fitur Produk: </p>
                    <ul>
                        <li>Material: Kaca berkualitas tinggi dan kayu alami </li>
                        <li>Dimensi: (Tuliskan dimensi produk jika tersedia) </li>
                        <li>Tanaman: Varietas tanaman kecil yang mudah dirawat</li>
                        <li>Desain: Elegan dan natural, cocok untuk dekorasi interior modern maupun klasik</li>
                    </ul>
                    <p> Manfaat : </p>
                    <ul>
                        <li>Menciptakan suasana alami dan menenangkan di dalam ruangan</li>
                        <li>Memerlukan perawatan minimal, ideal untuk mereka yang sibuk</li>
                        <li>Menjadi hiasan yang menarik dan unik</li>
                    </ul>
                    <p>Tambahkan sentuhan alam ke dalam rumah Anda dengan terrarium kaca yang cantik ini, dan nikmati keindahan tanaman tanpa repot!</p>
                </div>
            </div>
        </div>
    </section>
    
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
        function changeMainImage(src) {
    document.getElementById('main-img').src = src;
}
function changeMainImage(img) {
    var mainImg = document.getElementById('main-img');
    mainImg.src = img.src;
    mainImg.style.width = '50%'; // Mengatur lebar gambar utama sesuai dengan gambar yang dipilih
    mainImg.style.height = '50%'; // Mengatur tinggi gambar utama sesuai dengan gambar yang dipilih
}

        feather.replace();
      </script>
    
      <!-- My JavaScript -->
      <script src="{{ asset('profil/javascript/nav.js') }}"></script>
      <script src="{{ asset('profil/javascript/index.js') }}"></script>
    
    
    </body>
    </html>
    