<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use App\Models\Harga;
use App\Http\Requests\StoreticketRequest;
use App\Http\Requests\UpdateticketRequest;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminticket',[
            "tickets" => ticket::all(),
            "harga" => Harga::find(1),
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
     * @param  \App\Http\Requests\StoreticketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreticketRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'dewasa' => ['required'],
            'kecil' => ['required'],
        ]);
        
        ticket::create($validatedData);

        return redirect('/ticket')->with('success','Data Sudah Tercatat Silahkan Melakukan Pembayaran Di Loket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(ticket $ticket)
    {
        return view('admineditticket',[
            "ticket" => $ticket
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateticketRequest  $request
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateticketRequest $request, ticket $ticket)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'dewasa' => ['required'],
            'kecil' => ['required'],
        ]);
        
        ticket::where('id',$ticket->id)
                ->update($validatedData);

        return redirect('/admin/ticket')->with('success','Sudah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticket $ticket)
    {
        ticket::destroy($ticket->id);

        return redirect('/admin/ticket')->with('success','Sudah Dihapus');
    }
}
