<?php

namespace App\Http\Controllers;

use App\Models\DataVol;
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
        return response()->json(DataVol::all());
        //dd('index');
    }
    public function show($id) {
        dd($id);
    }
    public function edit($id) {
        dd($id);
        $product = DataVol::findOrFail($id);
        $product->update();
        return response()->json(["message" => "Update id vol successfuly"], 200);
    }
    public function delete($id) {
        $product = DataVol::findOrFail($id);
        $product->delete();
        return response()->json(["message" => "Id vol delete successfully"], 200);
        dd($id);
    }

    //
}
