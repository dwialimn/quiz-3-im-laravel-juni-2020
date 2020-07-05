<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikel;
use App\Models\user;

class ArtikelController extends Controller
{
    
    public function index()
    {
        $data = Artikel::get_data();
        return view('content.index', compact('data'));
    }
    
    public function create()
    {
        // $data_user = User::get_data();
        // print_r($data_user);
        // die();
        return view('content.create');
    }
    
    public function store()
    {
        
        return redirect('artikel');
    }
    
    public function show($id)
    {
        $get = Artikel::get_id($id);
        return view('content.detail', compact('get'));
    }
    
    public function edit($id)
    {
        return view('content.edit');
    }
    
    public function update($id)
    {
        return redirect('artikel');
    }
    
    public function destroy($id)
    {
        $destroy = Artikel::destroy($id);
        return redirect('artikel');
    }

    public function user(){
        $data = User::get_data();
        return view('user.index', compact('data'));
    }

    public function buat(){
        return view('user.create');
    }

    public function simpan(Request $request){
        $simpan = User::save($request->all());
        return redirect('/user');
    }
}