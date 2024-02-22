<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class  SclassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sclass = DB::table('sclasses')->get();
        return response()->json($sclass);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
           'class_name' => 'required|unique:sclasses|max:25'
        ]);

            $data = array();
            $data['class_name'] = $request->class_name;
            $insert = DB::table('sclasses')->insert($data);
            return response('Inserted Successfuly');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = DB::table('sclasses')->where('id', $id)->first();
        return response()->json($show);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['class_name'] = $request->class_name;
        $insert = DB::table('sclasses')->where('id', $id)->update(  $data);
        return response('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('sclasses')->where('id', $id)->delete();
        return response('Deleted Successfully');
    }
}
