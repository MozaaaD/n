<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Juang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JuangController extends Controller
{
    public function index()
    {
        $juangs = Juang::all()->groupBy('formatted_date');
        $pemasukan = Juang::where('kategori', 'Pemasukan')->sum('jumlah');
        $pengeluaran = Juang::where('kategori', 'Pengeluaran')->sum('jumlah');
        $saldo = $pemasukan - $pengeluaran;

        $juangs = Juang::all()->map(function ($juang) {
            $juang->formatted_date = carbon::parse($juang->tanggal)->locale('id')->isoFormat('dddd, D-MMMM-YYYY');
            return $juang;
        })->sortByDesc(function ($juang) {
            return \Carbon\Carbon::parse($juang->tanggal);
        })->groupBy(function ($juang) {
            return $juang->formatted_date;
        });

        return view('Hari', [
            'juangs' => $juangs,
            'pemasukan' => $pemasukan,
            'pengeluaran' => $pengeluaran,
            'saldo' => $saldo
        ]);
        
    }
    
    
    public function bulan(){
       
        return view("bulan");
    }
    public function minggu(){
       
        return view("minggu");
    }
    public function pengeluaran(){
       
        return view("pengeluaran");
    }
    public function Pemasukan(){
       
        return view("pemasukan");
    }
}
