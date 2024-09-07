<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Juang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function input(Request $request){
        $request->validate([
            'tanggal' => 'required|date',
            'kategori' => 'required|string',
            'jumlah' => 'required|numeric',
            'keterangan' => 'nullable|string',
            'bodoa' => 'required'
           ]);
       
       Juang::create([
        'tanggal' => carbon::parse($request->tanggal)->format('Y-m-d'),'kategori' => $request ->kategori,
           'jumlah' => $request ->jumlah,
           'keterangan'=> $request ->keterangan,
           'bodoa' => $request -> bodoa,
       ]);
       return redirect()->route('Hari');
    }
    public function editm($id){   
        $datas = Juang::find($id);
        return view('editm',compact('datas'));
    }
    public function editk($id){   
        $datas = Juang::find($id);
        return view('editk',compact('datas'));
    }
    public function updtm(Request $request, $id){   
        $datas = Juang::find($id);
        $datas->update($request->all());
    return redirect()->route('Hari');
    }
    public function updtk(Request $request, $id){   
        $datas = Juang::find($id);
        $datas->update($request->all());
    return redirect()->route('Hari');
    }
    public function hapus($id){
        $datas = juang::find($id);
        $datas->delete();
        return redirect()->route('Hari');
    }
}