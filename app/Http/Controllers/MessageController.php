<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Http\Requests\StoremessageRequest;
use App\Http\Requests\UpdatemessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminmessage',[
            "pesans" => message::all()
        ]);
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
     * @param  \App\Http\Requests\StoremessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremessageRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'email' => ['required'],
            'notelp' => ['required'],
            'pesan' => ['required'],
        ]);
        
        message::create($validatedData);

        return redirect('/#contact')->with('success','Pesan sudah diterima silahkan menunggu untuk dihubungi oleh kami terima kasih');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(message $message)
    {
        return view('adminlihatpesan',[
            "pesan" => $message
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemessageRequest  $request
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemessageRequest $request, message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(message $message)
    {
        message::destroy($message->id);

        return redirect('/admin/message')->with('success','Sudah Dihapus');
    }
}
