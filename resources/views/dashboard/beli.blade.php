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
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100..900&family=Comfortaa:wght@300..700&family=DM+Sans:wght@100..1000&family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    
    <link rel="stylesheet" href="{{ asset('profil/css/style.css?v=1.0') }}">
    <link rel="stylesheet" href="{{ asset('profil/css/nav.css') }}">
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar1">
        <a href="index.html">
            <img src="{{ asset('profil/img/logo.png') }}" class="navbar-logo" alt="Terrarium.qu Logo">
        </a>
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Beli Sekarang</h4>
                        <p class="card-description">Form pembelian produk</p>
                        @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        <form class="forms-sample" action="{{route('buy.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input type="text" class="form-control" id="Nama" placeholder="Nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="telp">Telp</label>
                                <input type="text" class="form-control" id="telp" name="telp" placeholder="Telp" required>
                            </div>
                            <div class="form-group">
                                <label for="produk">Pilih Produk</label>
                                <select name="produk" class="form-select" id="produk" required>
                                    <option value="" disabled selected>Pilih Produk</option>
                                    <option value="premium-1">Kit DIY Terrarium Tipe Premium (Rp. 85.000)</option>
                                    <option value="premium-2">Kit DIY Terrarium Tipe Premium Tanpa wadah kaca (Rp. 85.000)</option>
                                    <option value="medium-1">Kit DIY Terrarium Tipe Medium (Rp. 70.000)</option>
                                    <option value="medium-2">Kit DIY Terrarium Tipe Medium Tanpa wadah kaca (Rp. 70.000)</option>
                                    <option value="standard-1">Kit DIY Terrarium Tipe Standard (Rp. 50.000)</option>
                                    <option value="standard-2">Kit DIY Terrarium Tipe Standard Tanpa wadah kaca (Rp. 50.000)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah produk</label>
                                <input type="number" class="form-control" id="jumlah" placeholder="Jumlah" min="1" name="jumlah" required>
                            </div>
                            <div class="form-group">
                                <img src="{{asset('profil/img/qris.png')}}" alt="QRIS Screenshot" width="200">
                            </div>
                            <div class="form-group">
                                <label for="foto">Bukti Bayar jpg/png</label><br>
                                <input type="file" class="form-control" id="foto" name="foto" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <a href="{{route('dashboard.galeri')}}" class="btn btn-light">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                <a href="https://wa.me/+6289611334305"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
      </footer>
    <!-- Footer End -->

    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="{{ asset('profil/javascript/nav.js') }}"></script>
</body>
</html>
