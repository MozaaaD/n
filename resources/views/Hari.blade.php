<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juru Uang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color:rgb(219, 219, 215)">
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
        <li class="nav-item ms-4">
            <a class="nav-link active" aria-current="page" href="/Hari">Harian</a>
        </li>
        <li class="nav-item ms-4">
            <a class="nav-link text-white" aria-current="page" href="/minggu">Mingguan</a>
        </li>
        <li class="nav-item ms-4">
            <a class="nav-link text-white" aria-current="page" href="/bulan">Bulanan</a>
        </li>
    </ul>
    
    @php
    $pemasukan = App\Models\Juang::all()->where('bodoa', 'Pemasukan')->sum('jumlah');
    $peng = App\Models\Juang::all()->where('bodoa', 'Pengeluaran')->sum('jumlah');
    @endphp
    <div style="background-color:rgb(255, 255, 255)" class="text-center">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    Pemasukan
                    <h5 style="color:green">Rp. {{ number_format($pemasukan, 0, ',', '.') }}</h5>
                </div>
                <div class="col">
                    Pengeluaran
                    <h5 style="color:red">Rp. {{ number_format($peng, 0, ',', '.') }}</h5>
                </div>
                <div class="col">
                    Saldo
                    <h5>Rp. {{ number_format($pemasukan - $peng, 0, ',', '.') }}</h5>
                </div>
            </div>
        </div>
    </div>
    @foreach($juangs as $date => $entries)
    <div class="container mt-3">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title text-center" style="color:green">{{ $date }}</h5>
                @foreach($entries as $juang)
                <div class="container mb-2">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>{{ $juang->kategori }}</h5>
                        </div>
                        <div class="col-md-4">
                            <p>{{ $juang->keterangan }}</p>
                        </div>
                        <div class="col-md-4">
                            @if($juang->bodoa == 'Pemasukan')
                                <h5 style="color:green">Rp. {{ number_format($juang->jumlah, 0, ',', '.') }}</h5>
                            @elseif($juang->bodoa == 'Pengeluaran')
                                <h5 style="color:red">Rp. {{ number_format($juang->jumlah, 0, ',', '.') }}</h5>
                            @else
                                <h5>Rp. {{ number_format($juang->jumlah, 0, ',', '.') }}</h5>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
    <a href="/pengeluaran" type="button" class="btn btn-danger btn-bottom-right">+</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
