<?php

namespace App\Http\Controllers;

use App\Http\Requests\Apllication\StoreRequest;
use App\Http\Requests\Apllication\UpdateRequest;
use App\Models\Apllication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApllicationController extends Controller
{
    public function index()
    {
        $apllication=Apllication::query()->where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
        return view('application.index')->with('data',$apllication);
    }

    public function indexadmin()
    {
        $apllication=Apllication::query()->orderBy('id','DESC')->get();
        return view('application.indexadmin')->with('data',$apllication);
    }

    public function create()
    {
        return view('application.create');
    }

    public function store(StoreRequest $request)
    {
        Apllication::create(['user_id'=>Auth::user()->id]+$request->validated());
        return redirect()->route('index')->with('message','Заявление создано');
    }

    public function edit(Apllication $apllication)
    {
        return view('application.edit')->with('data',$apllication);
    }

    public function update(UpdateRequest $request, Apllication $apllication)
    {
        $apllication->update($request->validated());
        return  redirect()->route('indexadmin')->with('message','Заявление отредактировано');
    }

}
