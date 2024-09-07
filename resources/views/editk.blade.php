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
            <h5 style="color:white">Edit Pengeluaran</h5>
            <form class="d-flex" role="search">
                <div class="text-white">{{ \Carbon\Carbon::now()->locale('id')->isoFormat(' D MMMM Y')}}</div>
          </form>
        </div>
      </nav>
      <ul class="nav mt-2 nav-pills justify-content-center">
        <li class="nav-item">
        </li>
        <li class="nav-item">
        </li>
        <li class="nav-item">
        </li>
      </ul>
      <form class="mt-4" method="POST" action="/updtk/{{$datas->id}}">
        @csrf
        
        <div class="container">
          <div class="row card">
              <div class="card-header">
              <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="Date" name="tanggal"  value="{{$datas->tanggal}}" class="form-control" id="tanggal" >
              </div>
              <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                
                <select class="form-select" id="kategori" name="kategori" aria-label="Select example">
                  <option selected>Makanan</option>
                  <option value="1">Mobil</option>
                  <option value="2">Motor</option>
                  <option value="3">Olahraga</option>
                  <option value="4">Pajak</option>
                  <option value="5">Pakaian</option>
                  <option value="6">Pendidikan</option>
                  <option value="7">Pulsa</option>
                  <option value="8">Rokok</option>
                  <option value="9">Rumah</option>
                  <option value="10">Sosial</option>
                  <option value="11">Tagihan</option>
                  <option value="12">Taksi</option>
                  <option value="13">Transportasi</option>
                  <option value="14">Lain-lain</option>
                </select></div>
              <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" value="{{$datas->jumlah}}" class="form-control" id="jumlah" >
              </div>
              <div class="mb-3">
                <label for="Keterangan" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" value="{{$datas->keterangan}}" class="form-control" id="keterangan" >
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