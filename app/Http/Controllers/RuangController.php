<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gedung;
use App\Models\Kampus;
use App\Models\Ruang;

class RuangController extends Controller
{

    public function index()
    {
        $data['no'] = 1;
        $data['ruangs'] = Ruang::all();
        return view('ruang/ruang',$data);
    }

    public function insert()
    {
        $data['gedungs'] = Gedung::all();
        return view('ruang/add_ruang',$data);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'r_nama'            =>['required', 'string'],
            'r_lokasi'          =>['required', 'string'],
            ]);

        $ruang = new ruang;
        $ruang->g_id              = $request->g_id;
        $ruang->r_nama            = $request->r_nama;
        $ruang->r_lokasi           = $request->r_lokasi;        

        if ($ruang->save()){
            return redirect('/add_ruang')->with('success', 'item berhasil ditambahkan');
        }
        else{
            return redirect('/add_ruang')->with('error', 'item gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $data['gedungs'] = Gedung::all();
        $ruang = Ruang::where('r_id',$id)->get();
        return view('/ruang/edit_ruang',$data)->with('ruangs',$ruang);
    }

    public function update(Request $request, $id)
    {
        $ruang = Ruang::findorFail($id);
        $this->validate($request,[
            'r_nama'         =>['required', 'string'],
            'r_lokasi'         =>['required', 'string'],
        ]);
            $ruang->g_id          = $request->g_id;
            $ruang->r_nama          = $request->r_nama;
            $ruang->r_lokasi        = $request->r_lokasi;
  
        if ($ruang->save())
          return redirect()->route('ruang')->with(['success'=>'edit sukses']);
    }

    public function delete($r_id)
    {
        $ruang = Ruang::where('r_id',$r_id)->delete();
        return redirect()->route('ruang')->with('success', 'delete sukses');
    }
}
