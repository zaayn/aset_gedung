<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampus;
use App\Models\User;

class KampusController extends Controller
{

    public function index()
    {
        $data['no'] = 1;
        $data['kampuses'] = Kampus::all();
        return view('kampus/kampus',$data);
    }

    public function insert()
    {
        $data['users'] = User::all();
        return view('kampus/add_kampus',$data);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'k_nama'            =>['required', 'string'],
            'k_lokasi'          =>['required', 'string'],
            ]);

        $kampus = new kampus;
        $kampus->email              = $request->email;
        $kampus->k_nama            = $request->k_nama;
        $kampus->k_lokasi           = $request->k_lokasi;        

        if ($kampus->save()){
            return redirect('/add_kampus')->with('success', 'item berhasil ditambahkan');
        }
        else{
            return redirect('/add_kampus')->with('error', 'item gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $data['users'] = User::all();
        $kampus = Kampus::where('k_id',$id)->get();
        return view('/kampus/edit_kampus',$data)->with('kampus',$kampus);
    }

    public function update(Request $request, $id)
    {
        $kampus = Kampus::findorFail($id);
        $this->validate($request,[
            'k_nama'         =>['required', 'string'],
            'k_lokasi'         =>['required', 'string'],
        ]);
            $kampus->email          = $request->email;
            $kampus->k_nama          = $request->k_nama;
            $kampus->k_lokasi        = $request->k_lokasi;
  
        if ($kampus->save())
          return redirect()->route('kampus')->with(['success'=>'edit sukses']);
    }

    public function delete($k_id)
    {
        $kampus = Kampus::where('k_id',$k_id)->delete();
        return redirect()->route('kampus')->with('success', 'delete sukses');
    }
}
