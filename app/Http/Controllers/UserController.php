<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $data['no'] = 1;
        $data['users'] = User::all();
        return view('/user',$data);
    }

    public function insert()
    {
        return view('/add_user');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email'         =>['required', 'string','unique:users'],
            'name'         =>['required', 'string'],
            'password'      =>['required', 'string']
          ]);

        $users = new user;
        $users->name            = $request->name;
        $users->email           = $request->email;
        $users->password        = Hash::make($request->password);
        

        if ($users->save()){
            return redirect('/add_user')->with('success', 'item berhasil ditambahkan');
        }
        else{
            return redirect('/add_user')->with('error', 'item gagal ditambahkan');
        }
    }

    public function edit($email)
    {
        $users = DB::table('users')->where('email',$email)->get();
        return view('/edit',['users' => $users]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findorFail($id);
        $this->validate($request,[
            'email'         =>['required', 'string'],
            'name'         =>['required', 'string'],
            'password'      =>['required', 'string']
        ]);

            $user->email          = $request->email;
            $user->name        = $request->name;
            $user->password          = $request->password;
  
        if ($user->save())
          return redirect()->route('user')->with(['success'=>'edit sukses']);
    }

    public function delete($email)
    {
        
        $user = User::where('email',$email)->delete();
        return redirect()->route('user')->with('success', 'delete sukses');
    }
}
