<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Pembelian</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Pesan</h4>
                       
                        <form action="{{ route('pesan.update', $pesan->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ $pesan->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">telp</label>
                                <input type="text" class="form-control" id="telp" name="telp" placeholder="telp" value="{{ $pesan->telp }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="msg" name="msg" placeholder="msg" value="{{ $pesan->msg }}" required>
                            </div>
                          
                            <br>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <a href="{{ route('pesan.index') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
