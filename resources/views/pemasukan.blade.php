<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-danger">
        <div class="container-fluid">
            <a href="/Hari" class="btn btn-danger text-white" type="submit">Kembali</a>
            <h5 style="color:white">Buat Transaksi</h5>
            <form class="d-flex" role="search">
                <div class="text-white">{{ \Carbon\Carbon::now()->locale('id')->isoFormat(' D MMMM Y')}}</div>
          </form>
        </div>
      </nav>
      <ul class="nav mt-2 nav-pills justify-content-center">
        <li class="nav-item">
          <a class="nav-link text-light bg-secondary" aria-current="page" href="/pengeluaran">Pengeluaran</a>
        </li>
        <li class="nav-item">
          <a class="ms-1 nav-link bg-success text-white active" href="/pemasukan">Pemasukan</a>
        </li>
        <li class="nav-item">
        </li>
      </ul>
      <form class="mt-4" method="POST" action="/input">
        @csrf
        <input type="text" value="Pemasukan" name="bodoa" style="visibility: hidden">

        <div class="container">
          <div class="row card">
              <div class="card-header">
              <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" name="tanggal" class="form-control" id="tanggal">
              </div>
              <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                
                <select class="form-select" id="kategori" name="kategori" aria-label="Select example">
                  <option selected>Gaji</option>
                  <option value="Deposito">Deposito</option>
                  <option value="Dividen">Dividen</option>
                  <option value="Hibah">Hibah</option>
                  <option value="Inventasi">Inventasi</option>
                  <option value="Kupon">Kupon</option>
                  <option value="Pengembalian Dana">Pengembalian Dana</option>
                  <option value="Penghargaan">Penghargaan</option>
                  <option value="Penjualan">Penjualan</option>
                  <option value="Penyewaan">Penyewaan</option>
                  <option value="Tabungan">Tabungan</option>
                  <option value="Lain-lain">Lain-lain</option>
                </select></div>
              <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="text" name="jumlah"  class="form-control" x-data x-mask:dynamic="$money($input, ',')" id="jumlah" >
              </div>
              <div class="mb-3">
                <label for="Keterangan" class="form-label">Keterangan</label>
                <input type="text" name="keterangan"  class="form-control" id="keterangan" >
              </div>
              <div>
                
              </div>
              <button type="submit" class="btn btn-danger mt-2 mb-2 justify-content-center items-center">Simpan</button>
              </div>
              </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>