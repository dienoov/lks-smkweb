<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|string',
            'description' => 'required|string',
            'image' => 'image:jpeg,png,jpg,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('img'), $fileName);

            unset($input['image']);
            $input['image_path'] = $fileName;
        }

        $product = Product::create($input);

        return response()->json([
            'message' => "Product created successfully",
            'product' => $product,
        ]);
    }

    public function all(Request $request)
    {
        return response([
            'message' => "Success",
            'products' => Product::all(),
        ]);
    }

    public function find(int $id, Request $request)
    {
        return response([
            'message' => "Success",
            'product' => Product::find($id),
        ]);
    }

    public function update(int $id, Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|string',
            'description' => 'required|string',
            'image' => 'image:jpeg,png,jpg,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('img'), $fileName);

            unset($input['image']);
            $input['image_path'] = $fileName;
        }

        $product = Product::where('id', $id)->update($input);

        return response()->json([
            'message' => "Product updated successfully",
            'product' => $product,
        ]);
    }

    public function delete(int $id, Request $request)
    {
        Product::destroy($id);

        return response()->json([
            'message' => "Product deleted successfully",
        ]);
    }
}
