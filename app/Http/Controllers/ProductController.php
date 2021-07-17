<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class Controller extends Controller
{
    public function showAll()
    {
       $result =  Product::all();
        dd($result);
    }

    public function show($id)
    {
        # code...
    }
    public function save(Request $request,$id)
    {
        # code...
    }
    public function update($id)
    {
        # code...
    }
    public function delete($id)
    {
        # code...
    }
}
