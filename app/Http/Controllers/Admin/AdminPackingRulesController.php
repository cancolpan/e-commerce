<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PackingRulesCreateRequest;
use App\Models\Box;
use App\Models\PackingRule;
use App\Models\PackingType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPackingRulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $packing_rules = PackingRule::all();
        $packing_types = PackingType::pluck('name','id')->all();
        $boxes = Box::pluck('name','id')->all();

        return view('admin.packing_rules.index',compact('packing_rules','packing_types','boxes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackingRulesCreateRequest $request)
    {
        //
       // return $request->all();
       PackingRule::create($request->all());
       return redirect('/admin/packing_rules')->with('success','Packing Rule added');

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
        $packing_rules = PackingRule::all();
        $packing_types = PackingType::pluck('name','id')->all();
        $boxes = Box::pluck('name','id')->all();
        $packing_one = PackingRule::findOrFail($id);

        return view('admin.packing_rules.edit', compact('packing_one', 'packing_rules', 'packing_types','boxes'));
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
        $packing_rule = PackingRule::findOrFail($id);
        $packing_rule->update($request->all());
        return redirect('/admin/packing_rules');
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
