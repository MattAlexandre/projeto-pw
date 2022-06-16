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

        $product->nome = $request->input('name');
        $product->desc_produto = $request->input("discount");
        $product->valor_produto = $request->input("price");
        $product->barCode_produto = $request->input("barCode");
        $product->validade_produto = $request->input("validate");
        $product->marca = $request->input("brand");
        $product->id_acesso = $request->input("access_id");

        $product->save();

        return response("", 201);
    }

    public function update() {

    }

    public function destroy(int $id) {
        $product = Product::findOrFail($id);
        $product->delete();

        return response("", 200);
    }
}
