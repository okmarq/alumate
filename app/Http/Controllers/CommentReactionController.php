<?php

namespace App\Http\Controllers;

use App\Models\CommentReaction;
use App\Http\Requests\StoreCommentReactionRequest;
use App\Http\Requests\UpdateCommentReactionRequest;

class CommentReactionController extends Controller
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
     * @param  \App\Http\Requests\StoreCommentReactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentReactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommentReaction  $commentReaction
     * @return \Illuminate\Http\Response
     */
    public function show(CommentReaction $commentReaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommentReaction  $commentReaction
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentReaction $commentReaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentReactionRequest  $request
     * @param  \App\Models\CommentReaction  $commentReaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentReactionRequest $request, CommentReaction $commentReaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommentReaction  $commentReaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentReaction $commentReaction)
    {
        //
    }
}
