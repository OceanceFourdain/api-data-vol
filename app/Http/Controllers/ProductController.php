<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        return response()->json(Product::all());
        //dd('index');
    }
    public function store(Request $request) {
        $this->validate($request, [
            "name" => "required|max:255",
            "description" => "",
            "historiqueVol" => "",
        ]);
        return response()->json(Product::create($request->all()));
        //dd('store');
    }
    public function show($id) {
        dd($id);
    }
    public function edit($id) {
        dd($id);
        $product = Product::findOrFail($id);
        $product->update();
        return response()->json(["message" => "Update id vol successfuly"], 200);
    }
    public function delete($id) {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(["message" => "Id vol delete successfully"], 200);
        dd($id);
    }

    //
}
