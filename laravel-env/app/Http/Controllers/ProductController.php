<?php

namespace App\Http\Controllers;

use App\Models\Product as ModelProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        return ModelProduct::all();
    }

    /**
     * Display a listing of the resource.
     */
    public function listApp()
    {
        $products = ModelProduct::all();
        return view('list')->with(['products' => $products]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $model = ModelProduct::find($id);
        return $model->delete();
        
    }
}
