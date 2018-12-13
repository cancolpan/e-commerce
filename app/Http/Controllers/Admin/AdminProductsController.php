<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductCreateRequest;
use App\Models\Box;
use App\Models\BoxGroupProduct;
use App\Models\BoxGroups;
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

        $products = Product::orderByDesc('id')->paginate(8);

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
        $box_groups = BoxGroups::all();
        $categories = Category::pluck('name', 'id');
        return view('admin.products.create', compact('categories','box_groups'));
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





        $categories = request('categories');

        $product = Product::create($request->all());
        $product->categories()->attach($categories);


        // Box Groups Inserting

        $items=request('items'); // How many box type on form

        for($i=1;$i<=$items;$i++){

            $box_group_product = new BoxGroupProduct;
            $box_group_product->product_id = $product->id;
            $box_group_product->box_group_id = request('box_group_'.$i);
            $box_group_product->weight = request('weight_'.$i);
            $box_group_product->save();

        }

        // Box Groups Inserting




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
        $box_groups = BoxGroups::whereProductId($id);
        $categories = Category::pluck('name', 'id');
        $product = Product::findOrFail($id);

        return view('admin.products.edit', compact('product', 'categories','box_groups'));
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
            ->orWhere('price', 'LIKE', '%' . $keyword . '%')
            ->paginate(8);

        return view('admin.products.index', compact('products'));
    }
}
