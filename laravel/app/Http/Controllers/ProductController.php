<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $product = Product::all();

        return response($product, 200);
    }

    public function show(int $id) {
        $product = Product::findOrFail($id);

        return response($product, 200);

    }

    public function store(Request $request) {
        $product = new Product();

        $product->name = $request->input('name');
        $product->description = $request->input("discount");
        $product->price = $request->input("price");
        $product->bar_code = $request->input("barCode");
        $product->brand = $request->input("brand");

        $product->save();

        return response("", 201);
    }

    public function update() {

        $product->name = $request->input('name');
        $product->description = $request->input("discount");
        $product->price = $request->input("price");
        $product->bar_code = $request->input("barCode");
        $product->brand = $request->input("brand");

        $product->save();

        return response("", 201);
    }

    public function destroy(int $id) {
        $product = Product::findOrFail($id);
        $product->delete();

        return response("", 200);
    }
}
