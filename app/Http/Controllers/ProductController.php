<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function showAddProduct()
    {
        $role = 'guest';
        if(Auth::check()) $role = 'admin';

        // return view('addProduct', [
        //     'role' => $role,
        // ]);
        return view('admin.addProduct');
    }

    public function addProduct(Request $request)
    {
        $rules = [
            'name'              => 'required|string',
            'category'          => 'required|string',
            'price'             => 'required|integer|min:100',
            'stock'             => 'required|integer|min:1',
            'description'       => 'required',
            'image'             => 'mimes:jpeg,jpg,png,gif',
        ];

        $messages = [
            'name.required'              => 'Nama produk harus diisi.',
            'name.string'                => 'Nama produk harus string.',
            'category.required'          => 'Kategori produk harus diisi.',
            'category.string'            => 'Kategori produk harus string.',
            'price.required'             => 'Harga produk harus diisi.',
            'price.integer'              => 'Harga produk harus angka.',
            'price.min'                  => 'Harga produk tidak boleh kurang dari 100.',
            'stock.required'             => 'Stok produk harus diisi.',
            'stock.integer'              => 'Stok produk harus angka.',
            'stock.min'                  => 'Stok produk tidak boleh kurang dari 1.',
            'description.required'       => 'Deskripsi produk harus diisi.',
            'image.mimes'                => 'File gambar produk image harus antara jpeg, jpg, png, atau gif.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        // throw message alert if the required inputs are not according to the rules
        if($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput($request->all);

        // add image to assets
        $extension = $request->file('image')->getClientOriginalExtension();
        $path = $request->name.'.'.$extension;
        Storage::disk('public')->put($path, file_get_contents($request->image));

        // add new product
        // $product = new Product;
        // $product->name = $product->name;
        // $product->price = $product->price;
        // $product->description = $product->description;
        // $product->image = $path;
        // $save = $product->save();

        // if($save) return redirect('/');
        // else return redirect()->back();
    }
}
