<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact(var_name: 'products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {

        $product = new Product;
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'qty' => 'required|integer',
            'image' => 'nullable|image|max:2048',
            'status' => 'required|boolean',
        ]);


        $fileName = $request->title . "-" . time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $fileName);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->image = $fileName;
        $product->status = $request->status;

        $product->save();


        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'qty' => 'required|integer',
            'image' => 'nullable|image|max:2048',
            'status' => 'required|boolean',
        ]);

        $product = $product->where('id', $id)->fist();

        $fileName = $request->title . "-" . time() . '.' . $request->img->extension();
        File::delete(public_path('uploads/' . $product->img));
        $request->img->move(public_path('uploads'), $fileName);
        $product::where('id', $id)
            ->update([
                'img' => $fileName,
            ]);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->status = $request->status;

        $product->update();

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = new Product;
        $product = $product->where('id', $id)->first();
        File::delete(public_path('uploads/' . $product->image));
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
