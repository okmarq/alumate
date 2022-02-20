<?php

namespace App\Http\Controllers;

use App\Models\PostReaction;
use App\Http\Requests\StorePostReactionRequest;
use App\Http\Requests\UpdatePostReactionRequest;

class PostReactionController extends Controller
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
     * @param  \App\Http\Requests\StorePostReactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostReactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostReaction  $postReaction
     * @return \Illuminate\Http\Response
     */
    public function show(PostReaction $postReaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostReaction  $postReaction
     * @return \Illuminate\Http\Response
     */
    public function edit(PostReaction $postReaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostReactionRequest  $request
     * @param  \App\Models\PostReaction  $postReaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostReactionRequest $request, PostReaction $postReaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostReaction  $postReaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostReaction $postReaction)
    {
        //
    }
}
