<?php

namespace App\Http\Controllers;

use App\Reciever;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRecieverRequest;

class RecieverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $recievers = Reciever::search($request->search)->paginate();

        return view('reciever.index', compact('recievers'));
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
    public function store(StoreRecieverRequest $request)
    {
        $reciever = Reciever::create($request->validated());

        return redirect(route('reciever.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reciever  $reciever
     * @return \Illuminate\Http\Response
     */
    public function show(Reciever $reciever)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reciever  $reciever
     * @return \Illuminate\Http\Response
     */
    public function edit(Reciever $reciever)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reciever  $reciever
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reciever $reciever)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reciever  $reciever
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reciever $reciever)
    {
        //
    }
}
