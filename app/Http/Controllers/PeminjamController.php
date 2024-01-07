<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Peminjam;

class PeminjamController extends Controller
{
    public function index(){
        $data = DB::table('peminjam')->get();

        return view('peminjam.index', ['data' => $data]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'namapeminjam'=>'required',
            'bukuyangdipinjam'=>'required',
            'alamat'=>'required',
            'telepon'=>'required',
            'tanggalpengembalian'=>'required',
        ]);

        $peminjam = Peminjam::create([
            'namapeminjam'=>$request->namapeminjam,
            'bukuyangdipinjam'=>$request->bukuyangdipinjam,
            'alamat'=>$request->alamat,
            'telepon'=>$request->telepon,
            'tanggalpengembalian'=>$request->tanggalpengembalian,
        ]);

        if($peminjam){
            return redirect()
            ->route('peminjam.index');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    public function edit($id){
        $peminjam = Peminjam::findOrFail($id);
        return view('peminjam.edit', compact('peminjam'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'namapeminjam' => 'required',
            'bukuyangdipinjam' => 'required',
            'alamat' => 'required',
            'telepon'=>'required',
            'tanggalpengembalian'=>'required',
        ]);

        $peminjam = Peminjam::findOrFail($id);

        $peminjam->update([
            'namapeminjam' => $request->namapeminjam,
            'bukuyangdipinjam' => $request->bukuyangdipinjam,
            'alamat' => $request->alamat,
            'telepon'=>$request->telepon,
            'tanggalpengembalian'=>$request->tanggalpengembalian,
        ]);

        if ($peminjam) {
            return redirect()
                ->route('peminjam.index');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    public function destroy($id)
    {
        $peminjam = Peminjam::findOrFail($id);
        $peminjam->delete();

        if ($peminjam) {
            return redirect()
                ->route('peminjam.index');
        } else {
            return redirect()
                ->route('peminjam.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
