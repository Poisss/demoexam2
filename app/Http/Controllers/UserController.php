<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(StoreRequest $request)
    {
        User::create($request->validated());
        redirect()->route('products.index')->with('data',['success'=>true,'message'=>'Пользователь создан']);
    }

    public function signin(){
        return view('user.signin');
    }

    public function login(LoginRequest $request){
        if(Auth::attempt($request->only(['email','password']))){
            return redirect()->route('info')->with('data',['success'=>true,'message'=>'Вы авторизировались']);
        }
        else{
            return redirect()->route('signin')->with('data',['success'=>false,'message'=>'Не удалось авторизироваться']);
        }
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
        }
        return redirect()->route('info')->with('data',['success'=>true,'message'=>'Вы вышли из системы']);
    }
}
