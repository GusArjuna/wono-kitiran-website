<?php

namespace App\Http\Controllers;

use App\Models\food;
use App\Http\Requests\StorefoodRequest;
use App\Http\Requests\UpdatefoodRequest;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminfood',[
            "foods" => food::all()
        ]);
    }

    public function pageview()
    {
        return view('food',[
            "foods" => food::all(),
            "title" => "Food"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admintambahmakan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorefoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefoodRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'detail' => ['required'],
            'harga' => ['required'],
        ]);
        
        food::create($validatedData);

        return redirect('/admin/food')->with('success','Sudah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(food $food)
    {
        return view('admineditmakan',[
            "food" => $food
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefoodRequest  $request
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefoodRequest $request, food $food)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'detail' => ['required'],
            'harga' => ['required'],
        ]);
        
        food::where('id',$food->id)
                ->update($validatedData);

        return redirect('/admin/food')->with('success','Sudah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(food $food)
    {
        food::destroy($food->id);

        return redirect('/admin/food')->with('success','Sudah Dihapus');
    }
}
