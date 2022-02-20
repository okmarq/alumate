<?php

namespace App\Http\Controllers;

use App\Models\GroupChat;
use App\Http\Requests\StoreGroupChatRequest;
use App\Http\Requests\UpdateGroupChatRequest;

class GroupChatController extends Controller
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
     * @param  \App\Http\Requests\StoreGroupChatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroupChatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GroupChat  $groupChat
     * @return \Illuminate\Http\Response
     */
    public function show(GroupChat $groupChat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GroupChat  $groupChat
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupChat $groupChat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupChatRequest  $request
     * @param  \App\Models\GroupChat  $groupChat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupChatRequest $request, GroupChat $groupChat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GroupChat  $groupChat
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupChat $groupChat)
    {
        //
    }
}
