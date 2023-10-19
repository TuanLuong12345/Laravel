<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{

    public function  __construct()
    {

    }

    public function index()
    {
        $users = User::paginate(5);
        return view('admin.users.index',compact('users'));
    }
    public function create()
    {
        return view('admin.users.add');

    }
    public function store(Request $request)
    {

        $users = DB::table('users')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
            'role'=>$request->role
        ]);
        return redirect()->route('users.index');
    }
}
