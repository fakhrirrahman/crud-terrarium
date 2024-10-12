<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card img {
            max-width: 100%;
            height: auto;
        }
        .btn-back {
            margin-top: 20px;
        }
        .form-group img {
            max-width: 150px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Data Pembelian</h4>
                        <form class="forms-sample" action="{{ route('buy.update', $buy->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $buy->nama }}" placeholder="Nama" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $buy->alamat }}" placeholder="Alamat" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="telp">Telp</label>
                                <input type="text" class="form-control" id="telp" name="telp" value="{{ $buy->telp }}" placeholder="Telp" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="produk">Pilih Produk</label>
                                <select class="form-select" id="produk" name="produk" required>
                                    <option value="premium-1" {{ $buy->produk == 'premium-1' ? 'selected' : '' }}>Set DIY Terrarium Tipe Premium dengan Wadah Fishbowl (Rp. 85.000,-)</option>
                                    <option value="premium-2" {{ $buy->produk == 'premium-2' ? 'selected' : '' }}>Set DIY Terrarium Tipe Premium dengan Wadah Fishbowl Versi 2 (Rp. 80.000,-)</option>
                                    <option value="medium-1" {{ $buy->produk == 'medium-1' ? 'selected' : '' }}>Set DIY Terrarium Tipe Medium dengan Bell Jar (Rp. 50.000,-)</option>
                                    <option value="medium-2" {{ $buy->produk == 'medium-2' ? 'selected' : '' }}>Set DIY Terrarium Tipe Medium dengan Wadah Cylinder Glass Jar (Rp. 50.000,-)</option>
                                    <option value="medium-3" {{ $buy->produk == 'medium-3' ? 'selected' : '' }}>Set DIY Terrarium Tipe Medium dengan Wadah Fishbowl (Rp. 50.000,-)</option>
                                    <option value="standard-1" {{ $buy->produk == 'standard-1' ? 'selected' : '' }}>Set DIY Terrarium Tipe Standar dengan Hexagonal glass jar (Rp. 30.000,-)</option>
                                    <option value="standard-2" {{ $buy->produk == 'standard-2' ? 'selected' : '' }}>Set DIY Terrarium Tipe Standar dengan Cylinder Glass Vase (Rp. 30.000,-)</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="jumlah">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $buy->jumlah }}" placeholder="Jumlah" min="1" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="foto">Bukti Bayar</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                                @if ($buy->foto)
                                    <div class="mt-3">
                                        <img src="{{ asset('foto_bukti/' . $buy->foto) }}" alt="Bukti Bayar">
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <a href="{{ route('buy.index') }}" class="btn btn-light">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
