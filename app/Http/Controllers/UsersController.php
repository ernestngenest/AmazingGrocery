<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Role;
use App\Models\User;
use App\Rules\HasNumber;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function create(){
        return view('auth.register',[
            'roles' => Role::all(),
            'genders' => Gender::all()
        ]);
    }
    public function store(Request $request){
        // dd($request);
        $formfields = $request->validate([
            'first_name' => ['required','max:25','alpha'],
            'last_name' => ['required','max:25','alpha'],
            'email' => ['required','email'],
            'role_id' => ['required','in:1,2'],
            'gender_id' => ['required','in:1,2'],
            'password' => ['required','confirmed',new HasNumber],
            'image' => ['required']
        ]);
        $formfields['password'] = Hash::make($formfields['password']);
        if($request->hasFile('image')){
            $formfields['image'] = $request->file('image')->store('images','public');
        }
        $user = User::create($formfields);
        Auth()->login($user);
        return redirect('/home');
    }
    public function view_login(){
        return view('auth.login');
    }
    public function login(Request $request){
        $formfields = $request->validate([
            'email' =>['required','email'],
            'password' =>['required'],
        ]);
        // dd($formfields);
        if(Auth::attempt($formfields)==true){
            $request->session()->regenerate();
            return redirect('/home');
        }
        return back()->withErrors([
            'email'=> 'Wrong Email/Password Please Try Again'
        ])->onlyInput('email');
    }
    public function logout(Request $request){
        // dd($request->all());
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/logout_succes');
    }
    public function profile(User $user){
        // dd($user);
        // dd($user->roles->name);
        return view ('auth.profile',[
            'genders' => Gender::all(),
            'roles' => Role::all(),
            'user' => $user
        ]);
    }
    public function profile_update(Request $request, User $user){
        // dd($request->all());
        $formfields = $request->validate([
            'first_name' => ['required','max:25','alpha'],
            'last_name' => ['required','max:25','alpha'],
            'email' => ['required','email'],
            'gender_id' => ['required','in:1,2'],
            'password' => ['required','confirmed',new HasNumber],
            'image' => ['required','mimes:jpeg,png,jpg'],
        ]);
        // dd($formfields);
        if($request->hasFile('image')){
            $formfields['image'] = $request->file('image')->store('images','public');
        }
        $data_user = User::find($user->id);
        $data_user->first_name = $formfields['first_name'];
        $data_user->last_name = $formfields['last_name'];
        $data_user->email = $formfields['email'];
        $data_user->gender_id = $formfields['gender_id'];
        $formfields['password'] = Hash::make($formfields['password']);
        $data_user->password = $formfields['password'];
        $data_user->image = $formfields['image'];
        $data_user->save();
        return redirect('/save');
    }  
    public function save(){
        return view ('save');
    }
    public function logout_succes(){
        return view ('logout_succes');
    }
}
