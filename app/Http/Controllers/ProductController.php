<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function showAddProduct()
    {
        $role = 'guest';
        if(Auth::check()) $role = 'admin';

        return view('admin.addProduct', [
            'role' => $role,
        ]);
        // return view('admin.addProduct');
    }

    public function addProduct(Request $request)
    {
        $rules = [
            'name'              => 'required|string',
            'category'          => 'required|string',
            'price'             => 'required|integer|min:100',
            'stock'             => 'required|integer|min:1',
            'description'       => 'required',
            'image'             => 'required|mimes:jpeg,jpg,png,gif',
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
            'image.required'             => 'Gambar produk harus diunggah.',
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

        // find category id
        $category_id = Category::where('name', '=', "$request->category");

        // add new product
        $product = new Product;
        $product->name = $request->name;
        $product->category = $category_id;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->image = $path;
        $save = $product->save();

        if($save) return redirect('/');
        else return redirect()->back();
    }

    public function showEditProduct($id)
    {
        $role = 'guest';
        if(Auth::check()) $role = 'admin';

        $product = Product::find($id);

        return view('editProduct', [
            'role' => $role,
            'product' => $product,
        ]);
        
    }

    public function editProduct(Request $request, $id)
    {
        $rules = [
            'name'              => 'required|string',
            'category'          => 'required|string',
            'price'             => 'required|integer|min:100',
            'stock'             => 'required|integer',
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
            'description.required'       => 'Deskripsi produk harus diisi.',
            'image.mimes'                => 'File gambar produk image harus antara jpeg, jpg, png, atau gif.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        // throw message alert if the required inputs are not according to the rules
        if($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        
        // find category id
        $category_id = Category::where('name', '=', "$request->category");

        // update all columns except image
        $product = Product::find($id);
        $product->name = $request->name;
        $product->category = $category_id;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->description = $request->description;

        // update image if an image is uploaded
        if($request->hasFile('image')){
            // delete original image
            $ori_path = $product->image;
            File::delete('assets/'.$ori_path);

            // add new image
            $extension = $request->file('image')->getClientOriginalExtension();
            $path = $request->name.'.'.$extension;
            Storage::disk('public')->put($path, file_get_contents($request->image));

            // update in database
            $product->image = $path;
        }

        // save update
        $save = $product->save();

        if($save) return redirect('/');
        else return redirect()->back();
    }
}
