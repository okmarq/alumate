<?php

namespace App\Http\Controllers;

use App\Models\PrivateChat;
use App\Http\Requests\StorePrivateChatRequest;
use App\Http\Requests\UpdatePrivateChatRequest;

class PrivateChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePrivateChatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrivateChatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrivateChat  $privateChat
     * @return \Illuminate\Http\Response
     */
    public function show(PrivateChat $privateChat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrivateChat  $privateChat
     * @return \Illuminate\Http\Response
     */
    public function edit(PrivateChat $privateChat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrivateChatRequest  $request
     * @param  \App\Models\PrivateChat  $privateChat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrivateChatRequest $request, PrivateChat $privateChat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrivateChat  $privateChat
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrivateChat $privateChat)
    {
        //
    }
}
