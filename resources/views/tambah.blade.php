<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Form tambah</h1>
    <div class="container">
        <div class="card-body">
            <form action="/" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kd_barang</label>
                    <input type="number" class="form-control" id="kd_barang" name="kd_barang"> @error('kd_barang')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nm_barang</label>
                    <input type="text" class="form-control" id="nm_barang" name="nm_barang"> @error('nm_barang')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div div class="mb-3">
                    <label class="form-label">Tipe barang</label>
                    <select type="text" class="form-select" id="tipe_barang" name="tipe_barang">
                    <option selected disabled>Pilih tipe</option>
                    <option value="box">box</option>
                    <option value="pcs">pcs</option>
                    <option value="pack">pack</option>
                    <option value="slop">slop</option>
                    </select>
                    @error('tipe_barang')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah"> @error('jumlah')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Distributor</label>
                    <input type="text" class="form-control" id="distributor" name="distributor"> @error('distributor')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal masuk</label>
                    <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk"> @error('tgl_masuk')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal keluar</label>
                    <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar"> @error('tgl_keluar')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</body>

</html>
