<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index(){
        $data = DB::table('buku')->get();

        return view('buku.index', ['data' => $data]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'judul'=>'required',
            'penulis'=>'required',
            'tahun'=>'required',
        ]);

        $buku = Buku::create([
            'judul'=>$request->judul,
            'penulis'=>$request->penulis,
            'tahun'=>$request->tahun,
        ]);

        if($buku){
            return redirect()
            ->route('buku.index');
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
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'penulis' => 'required',
            'tahun' => 'required',
        ]);

        $buku = Buku::findOrFail($id);

        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
        ]);

        if ($buku) {
            return redirect()
                ->route('buku.index');
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
        $buku = Buku::findOrFail($id);
        $buku->delete();

        if ($buku) {
            return redirect()
                ->route('buku.index');
        } else {
            return redirect()
                ->route('buku.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
