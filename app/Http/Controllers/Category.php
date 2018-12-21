<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller
{
    public function index(){
        $data = array();
        return view('category.index', $data);
    }

    public function create(){
        $data = array();
        return view('category.create', $data);
    }

    public function edit($id){
        $data = array();
        $data['id'] = $id;
        return view('category.edit', $data);
    }

    public function delete($id){
        $data = array();
        $data['id'] = $id;
        return view('category.delete', $data);
    }
}
