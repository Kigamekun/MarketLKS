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

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.transaction', [
            'data' => DB::table('transaction')->get()
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
        if ($request->hasFile('thumb')) {
            $file = $request->file('thumb');
            $thumbname = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/thumb' . '/', $thumbname);
            DB::table('transaction')->insert([
                'name' => $request->name,
                'price' => $request->price,
                'stock' => $request->stock,
                'description' => $request->description,
                'category' => $request->category,
                'thumb' => $thumbname,

            ]);
        }else {
            DB::table('transaction')->insert([
                'name' => $request->name,
                'price' => $request->price,
                'stock' => $request->stock,
                'description' => $request->description,
                'category' => $request->category,
            ]);
        }





        return redirect()->back()->with(['message'=>'transaction berhasil ditambahkan','status'=>'success']);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaction  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        if ($request->hasFile('thumb')) {
            $file = $request->file('thumb');
            $thumbname = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/thumb' . '/', $thumbname);
            DB::table('transaction')->where('id',$id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'stock' => $request->stock,
                'description' => $request->description,
                'category' => $request->category,
                'thumb' => $thumbname,
            ]);
        }else {
            DB::table('transaction')->where('id',$id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'stock' => $request->stock,
                'description' => $request->description,
                'category' => $request->category,
            ]);
        }



        return redirect()->back()->with(['message'=>'transaction berhasil di update','status'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaction  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('transaction')->where('id',$id)->delete();
        return redirect()->route('admin.poduct.index')->with(['message'=>'transaction berhasil di delete','status'=>'success']);
    }
}
