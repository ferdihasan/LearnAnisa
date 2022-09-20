<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class SantriController extends Controller
{
    public function santri(){
        return view('santri',[
            "title" => "Santri",
            "santri" => Santri::all()
        ]);
    }

    public function tambah(){
        return view('tambah_santri');
    }

    public function tambah_santri(Request $request){
        $tambah = Santri::create([
            'name' => $request->name,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        return redirect('santri');
    }

    public function hapus_santri($id_santri){
        Santri::where('id', $id_santri)->delete();

        return redirect('santri');
    }

    public function edit_santri($id_santri){
        return view('edit_santri',[
            'title' => 'Edit Santri',
            'santri' => Santri::firstWhere('id', $id_santri)
        ]);
    }

    public function actionedit(Request $request){
        $edit = Santri::where('id', $request->id_santri)->update([
            'name' => $request->name,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        return redirect('santri');
    }
}
