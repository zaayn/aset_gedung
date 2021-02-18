<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gedung;
use App\Models\Kampus;

class GedungController extends Controller
{

    public function index()
    {
        $data['no'] = 1;
        $data['gedungs'] = Gedung::all();
        return view('gedung/gedung',$data);
    }

    public function insert()
    {
        $data['kampuses'] = Kampus::all();
        return view('gedung/add_gedung',$data);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'g_nama'            =>['required', 'string'],
            'g_lokasi'          =>['required', 'string'],
            ]);

        $gedung = new gedung;
        $gedung->k_id              = $request->k_id;
        $gedung->g_nama            = $request->g_nama;
        $gedung->g_lokasi           = $request->g_lokasi;        

        if ($gedung->save()){
            return redirect('/add_gedung')->with('success', 'item berhasil ditambahkan');
        }
        else{
            return redirect('/add_gedung')->with('error', 'item gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $data['kampuses'] = Kampus::all();
        $gedung = Gedung::where('g_id',$id)->get();
        return view('/gedung/edit_gedung',$data)->with('gedungs',$gedung);
    }

    public function update(Request $request, $id)
    {
        $gedung = Gedung::findorFail($id);
        $this->validate($request,[
            'g_nama'         =>['required', 'string'],
            'g_lokasi'         =>['required', 'string'],
        ]);
            $gedung->k_id          = $request->k_id;
            $gedung->g_nama          = $request->g_nama;
            $gedung->g_lokasi        = $request->g_lokasi;
  
        if ($gedung->save())
          return redirect()->route('gedung')->with(['success'=>'edit sukses']);
    }

    public function delete($g_id)
    {
        $gedung = Gedung::where('g_id',$g_id)->delete();
        return redirect()->route('gedung')->with('success', 'delete sukses');
    }
}
