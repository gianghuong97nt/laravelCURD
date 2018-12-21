<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function index(){
        $data = array();
        return view('product.index', $data);
    }

    public function create(){
        $data = array();
        return view('product.create', $data);
    }

    public function edit($id){
        $data = array();
        $data['id'] = $id;
        return view('product.edit', $data);
    }

    public function delete($id){
        $data = array();
        $data['id'] = $id;
        return view('product.delete', $data);
    }
}
