<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function view_manage(){
        return view('admin.manage',['users' => User::all()]);
    }
    public function edit_role(User $user){
        return view('admin.update_role', ['curr' => $user,'roles' => Role::all()]);
    }
    public function update_role (Request $request,User $user){
        // dd($request->role_id);
        $curr_user = User::find($user->id);
        $curr_user->role_id = $request->role_id;
        $curr_user->save();
        return  redirect()->back()->with('success','berhasil update role');
    }
    public function delete_user(User $user){
        if ($user->id == auth()->user()->id){
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
            $user->delete();
            return redirect('/');
        }else{
            $user->delete();
        }
        return redirect('/')->with('success','berhasil delete role');
    }
}
