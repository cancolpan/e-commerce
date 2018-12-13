<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BoxesCreateRequest;
use App\Models\Box;
use App\Models\BoxGroups;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBoxesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $boxes = Box::all();
        return view('admin.boxes.index', compact('boxes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $box_groups = BoxGroups::pluck('name', 'id')->all();
        return view('admin.boxes.create', compact('box_groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BoxesCreateRequest $request)
    {
        //
        Box::create($request->all());
        return redirect('/admin/boxes')->with('success', 'Packing Box Added');


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $box_groups = BoxGroups::pluck('name', 'id')->all();
        $box = Box::findOrFail($id);

        return view('admin.boxes.edit', compact('box', 'box_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //
        $user = Box::findOrFail($id);
        $user->update($request->all());

        return redirect('/admin/boxes')->with('success', 'Packing Box Updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = Box::findOrFail($id);
        $user->delete();

        return redirect('/admin/boxes')->with('success', 'Packing Box Deleted');
    }

    public function search()
    {
        $keyword = Input::get('keyword');

        # going to next page is not working yet
        $boxes = Box::where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('width', 'LIKE', '%' . $keyword . '%')
            ->orWhere('height', 'LIKE', '%' . $keyword . '%')
            ->orWhere('length', 'LIKE', '%' . $keyword . '%')
            ->paginate(8);

        return view('admin.boxes.index', compact('boxes'));
    }
}
