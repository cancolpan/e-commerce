<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductCreateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::orderByDesc('sku')->paginate(8);

        return view('admin.products.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function create()
    {
        //
        $categories = Category::pluck('name', 'id');
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(ProductCreateRequest $request)
    {
        //

        $categories = request('categories');

        $product = Product::create($request->all());
        $product->categories()->attach($categories);


        // Image Processes

        for ($i = 1; $i <= +8; $i++) { // for 8 images

            if (request()->hasFile('image_' . $i)) {
                $file = $request->file('image_' . $i);
                $extension = $file->extension();
                $file_name = $product->slug . '-' . $i . '-' . time() . "." . $extension;
                $file->move(public_path('uploads/products'), $file_name);

                $product->update(array('image_' . $i => $file_name, 'image_' . $i . '_description' => request('image_' . $i . '_description')));
            }

        }
        // Image Processes


        return redirect('admin/products')->with('success', 'Product Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        //
        $categories = Category::pluck('name', 'id');
        $product = Product::findOrFail($id);

        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {

        $categories = request('categories');

        $product = Product::findOrFail($id);

        $product->update($request->all());

        $product->categories()->sync($categories);


        // Image Processes

        for ($i = 1; $i <= +8; $i++) { // for 8 images

            if (request()->hasFile('image_' . $i)) {
                $file = $request->file('image_' . $i);
                $extension = $file->extension();
                $file_name = $product->slug . '-' . $i . '-' . time() . "." . $extension;
                $file->move(public_path('uploads/products'), $file_name);

                $product->update(array('image_' . $i => $file_name, 'image_' . $i . '_description' => request('image_' . $i . '_description')));
            }

        }
        // Image Processes


        return redirect('admin/products')->with('success', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
        Product::findOrFail($id)->delete();

        return redirect('admin/products')->with('success', 'Product Deleted');

    }


    public function search()
    {
        $keyword = Input::get('keyword');

        # going to next page is not working yet
        $products = Product::where('sku', 'LIKE', '%' . $keyword . '%')
            ->orWhere('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('body', 'LIKE', '%' . $keyword . '%')
            ->orWhere('body_short', 'LIKE', '%' . $keyword . '%')
            ->paginate(8);

        return view('admin.products.index', compact('products'));
    }
}
