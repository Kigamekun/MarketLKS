<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\{
    Hash,
    Auth,
    Mail,
    Response
};

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category', [
            'data' => DB::table('category')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            DB::table('category')->insert([
                'name' => $request->name,
            ]);
        return redirect()->back()->with(['message'=>'category berhasil ditambahkan','status'=>'success']);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            DB::table('category')->where('id',$id)->update([
                'name' => $request->name,
            ]);
        return redirect()->back()->with(['message'=>'category berhasil di update','status'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('category')->where('id',$id)->delete();
        return redirect()->route('admin.category.index')->with(['message'=>'category berhasil di delete','status'=>'success']);
    }
}
