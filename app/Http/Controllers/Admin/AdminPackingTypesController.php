<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PackingTypesCreateRequest;
use App\Models\PackingType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPackingTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $packing_types = PackingType::all();
        return view('admin.packing_types.index', compact('packing_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.packing_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackingTypesCreateRequest $request)
    {
        //
        PackingType::create($request->all());
        return redirect('admin/packing_types')->with('success','Packing Type Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $packing_type = PackingType::findOrFail($id);
        return view('admin.packing_types.edit', compact('packing_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $packing_type = PackingType::findOrFail($id);
        $packing_type->update($request->all());

        return redirect('admin/packing_types')->with('success','Packing Type Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
