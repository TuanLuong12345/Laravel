<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\UserRequest;

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
    public function store(UserRequest $request)
    {
        try{
            $users = DB::table('users')->insert([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'password'=>Hash::make($request->password),
                'role'=>$request->role
            ]);
            return redirect()->route('users.index')->with('Thông báo','Thêm người dùng thành công');
        }catch (\Exception $exception){
            DB::rollBack();
            Log::error('Messege:'.$exception->getMessage().'----Line:' .$exception->getLine());

        }

    }
    public function edit($id)
    {
        $users = DB::table('users')->find($id);
        return view('admin.users.edit',compact('users'));
    }
    public function update(UserRequest $request,User $user,$id)
    {
        try{
            $user->find($id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'password'=>Hash::make($request->password),
                'role'=>$request->role
            ]);
            return redirect()->route('users.index')->with('Thông báo','Cập nhật thông tin thành công');
        }catch (\Exception $exception){
            DB::rollBack();
            Log::error('Messege:'.$exception->getMessage().'----Line:' .$exception->getLine());

        }
    }
    public  function delete($id,Request $request,User $user)
    {
        $user->find($id)->delete();
        return redirect()->route('users.index');
    }
}
