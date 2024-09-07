<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juru uang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body  style="background-color:rgb(219, 219, 215)">
    <nav class="navbar bg-danger">
        <div class="container-fluid">
          <div class="text-white">
            <img src="/logo/27.png" width="50px" height="auto" class="mb-2">
             Juru Uang
          </div>
            <form class="d-flex" role="search">
            <style>
              .btn-bottom-right {
                position: fixed;
                bottom: 20px;
                right: 20px;
              }
              </style>
          </form>
          <div class="text-white">{{ \Carbon\Carbon::now()->locale('id')->isoFormat(' D MMMM Y')}}</div>
        </div>
      </nav>
      <ul class="nav nav-tabs bg-danger">
        <li class="nav-item ms-4 ">
          <a class="nav-link text-white" aria-current="page" href="/Hari">Harian</a>
        </li>
        <li class="nav-item ms-4 ">
          <a class="nav-link text-white " aria-current="page" href="/minggu">Mingguan</a>
        </li>
        <li class="nav-item ms-4">
          <a class="nav-link active" aria-current="page" href="/bulan">Bulanan</a>
        </li>
      </ul>
      @php
      $pemasukan = App\Models\Juang::all()->where('bodoa', 'Pemasukan')->sum('jumlah');
      $peng = App\Models\Juang::all()->where('bodoa', 'Pengeluaran')->sum('jumlah');
      @endphp
  
      <div  style="background-color:rgb(255, 255, 255)" class=" text-center ">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <h5 class="bg-warning rounded  p-2 mt-2" style="color:rgb(255, 255, 255)">September</h5>
            </div>
            <div class="col mt-3">
              <h5 style="color:green">Rp. {{ number_format($pemasukan, 0, ',', '.') }}</h5>
            </div>
            <div class="col mt-3">
              <h5 style="color:red">Rp. {{ number_format($peng, 0, ',', '.') }}</h5>
            </div>
          </div>
        </div>
      </div>
      <div  style="background-color:rgb(255, 255, 255)" class=" text-center ">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <h5 class="bg-secondary rounded  p-2 mt-2" style="color:rgb(255, 255, 255)">Oktober</h5>
            </div>
            <div class="col">
              <h5 style="color:green" class="mt-3" >Rp.0</h5>
            </div>
            <div class="col">
              <h5  class="mt-3" style="color:red">Rp.0</h5>
            </div>
          </div>
        </div>
      </div>
      <div  style="background-color:rgb(255, 255, 255)" class=" text-center ">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <h5 class="bg-secondary rounded  p-2 mt-2" style="color:rgb(255, 255, 255)">November</h5>
            </div>
            <div class="col">
              <h5 style="color:green" class="mt-3" >Rp.0</h5>
            </div>
            <div class="col">
              <h5  class="mt-3" style="color:red">Rp.0</h5>
            </div>
          </div>
        </div>
      </div>
      <div  style="background-color:rgb(255, 255, 255)" class=" text-center ">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <h5 class="bg-secondary rounded  p-2 mt-2" style="color:rgb(255, 255, 255)">Desember</h5>
            </div>
            <div class="col">
              <h5 style="color:green" class="mt-3" >Rp.0</h5>
            </div>
            <div class="col">
              <h5  class="mt-3" style="color:red">Rp.0</h5>
            </div>
          </div>
        </div>
      </div>
      <div  style="background-color:rgb(255, 255, 255)" class=" text-center ">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <h5 class="bg-secondary rounded  p-2 mt-2" style="color:rgb(255, 255, 255)">Januari</h5>
            </div>
            <div class="col">
              <h5 style="color:green" class="mt-3" >Rp.0</h5>
            </div>
            <div class="col">
              <h5  class="mt-3" style="color:red">Rp.0</h5>
            </div>
          </div>
        </div>
      </div>
      <div  style="background-color:rgb(255, 255, 255)" class=" text-center ">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <h5 class="bg-secondary rounded  p-2 mt-2" style="color:rgb(255, 255, 255)">Febuari</h5>
            </div>
            <div class="col">
              <h5 style="color:green" class="mt-3" >Rp.0</h5>
            </div>
            <div class="col">
              <h5  class="mt-3" style="color:red">Rp.0</h5>
            </div>
          </div>
        </div>
      </div>
      <div  style="background-color:rgb(255, 255, 255)" class=" text-center ">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <h5 class="bg-secondary rounded  p-2 mt-2" style="color:rgb(255, 255, 255)">Maret</h5>
            </div>
            <div class="col">
              <h5 style="color:green" class="mt-3" >Rp.0</h5>
            </div>
            <div class="col">
              <h5  class="mt-3" style="color:red">Rp.0</h5>
            </div>
          </div>
        </div>
      </div>
      <div  style="background-color:rgb(255, 255, 255)" class=" text-center ">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <h5 class="bg-secondary rounded  p-2 mt-2" style="color:rgb(255, 255, 255)">April</h5>
            </div>
            <div class="col">
              <h5 style="color:green" class="mt-3" >Rp.0</h5>
            </div>
            <div class="col">
              <h5  class="mt-3" style="color:red">Rp.0</h5>
            </div>
          </div>
        </div>
      </div>
      <div  style="background-color:rgb(255, 255, 255)" class=" text-center ">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <h5 class="bg-secondary rounded  p-2 mt-2" style="color:rgb(255, 255, 255)">Mei</h5>
            </div>
            <div class="col">
              <h5 style="color:green" class="mt-3" >Rp.0</h5>
            </div>
            <div class="col">
              <h5  class="mt-3" style="color:red">Rp.0</h5>
            </div>
          </div>
        </div>
      </div>
      <div  style="background-color:rgb(255, 255, 255)" class=" text-center ">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <h5 class="bg-secondary rounded  p-2 mt-2" style="color:rgb(255, 255, 255)">Juni</h5>
            </div>
            <div class="col">
              <h5 style="color:green" class="mt-3" >Rp.0</h5>
            </div>
            <div class="col">
              <h5  class="mt-3" style="color:red">Rp.0</h5>
            </div>
          </div>
        </div>
      </div>
      <div  style="background-color:rgb(255, 255, 255)" class=" text-center ">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <h5 class="bg-secondary rounded  p-2 mt-2" style="color:rgb(255, 255, 255)">Juli</h5>
            </div>
            <div class="col">
              <h5 style="color:green" class="mt-3" >Rp.0</h5>
            </div>
            <div class="col">
              <h5  class="mt-3" style="color:red">Rp.0</h5>
            </div>
          </div>
        </div>
      </div>
      <div  style="background-color:rgb(255, 255, 255)" class=" text-center ">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <h5 class="bg-secondary rounded  p-2 mt-2" style="color:rgb(255, 255, 255)">Agustus</h5>
            </div>
            <div class="col">
              <h5 style="color:green" class="mt-3" >Rp.0</h5>
            </div>
            <div class="col">
              <h5  class="mt-3" style="color:red">Rp.0</h5>
            </div>
          </div>
        </div>
      </div>
      <a href="/pengeluaran" type="button" class="btn btn-danger btn-bottom-right">+</a>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html