<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index(){
        $data = DB::table('anggota')->get();

        return view('anggota.index', ['data' => $data]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama'=>'required',
            'alamat'=>'required',
            'telepon'=>'required',
            'email'=>'required'
        ]);

        $anggota = Anggota::create([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'telepon'=>$request->telepon,
            'email'=>$request->email
        ]);

        if($anggota){
            return redirect()
            ->route('anggota.index');
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
        $anggota = Anggota::findOrFail($id);
        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required'
        ]);

        $anggota = Anggota::findOrFail($id);

        $anggota->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
        ]);

        if ($anggota) {
            return redirect()
                ->route('anggota.index');
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
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        if ($anggota) {
            return redirect()
                ->route('anggota.index');
        } else {
            return redirect()
                ->route('anggota.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
