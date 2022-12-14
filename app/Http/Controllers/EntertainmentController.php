<?php

namespace App\Http\Controllers;

use App\Models\entertainment;
use App\Http\Requests\StoreentertainmentRequest;
use App\Http\Requests\UpdateentertainmentRequest;
use Illuminate\Support\Facades\Storage;

class EntertainmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminentertain',[
            "entertains" => entertainment::all()
        ]);
    }

    public function pageview()
    {
        return view('entertain',[
            "entertains" => entertainment::all(),
            "title" => "Entertain"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admintambahhiburan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreentertainmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreentertainmentRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'detail' => ['required'],
            'gambar' => ['image','required'],
        ]);
        
        $validatedData['gambar'] = $request->file('gambar')->store('imagesContent');

        entertainment::create($validatedData);

        return redirect('/admin/entertain')->with('success','Sudah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function show(entertainment $entertainment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function edit(entertainment $entertainment)
    {
        return view('adminedithiburan',[
            "entertain" => $entertainment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateentertainmentRequest  $request
     * @param  \App\Models\entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateentertainmentRequest $request, entertainment $entertainment)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'detail' => ['required'],
            'gambar' => ['image','required'],
        ]);
        
        if($request->file('gambar')){
            Storage::delete($entertainment->gambar);
            $validatedData['gambar'] = $request->file('gambar')->store('imagesContent');
        }else{
            $validatedData['gambar'] = $entertainment->gambar;
        }

        entertainment::where('id',$entertainment->id)
                ->update($validatedData);

        return redirect('/admin/entertain')->with('success','Sudah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function destroy(entertainment $entertainment)
    {
        Storage::delete($entertainment->gambar);
        entertainment::destroy($entertainment->id);

        return redirect('/admin/entertain')->with('success','Sudah Dihapus');
    }
}
