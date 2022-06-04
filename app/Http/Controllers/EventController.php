<?php

namespace App\Http\Controllers;

use App\Event;
use App\attendEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->get();

        return response()->json([
            'status' => 'sucsess',
            'data' => $events
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title" => "required",
            "description" => "nullable",
            "dateTime" => "nullable|date",
            "photo" => "nullable|image",
            "location" => "nullable",
            "username" => "nullable",
            "isPromoted" => "bail|required|in:false,true",
            ///"school_id" => "bail|required|exists:schools,id",
            "group_id" => "bail|nullable|exists:groups,id"
        ]);

        $input = $request->all();
        $event = Event::create($input);

        //$input = $request->all();
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->storePubliclyAs('events', 'event' . $event->id . '.' .
                $photo->getClientOriginalExtension());
            //$input['photo'] = env('APP_URL') . '/storage/' . $photoPath;
             $event->photo = env('APP_URL') . '/storage/' . $photoPath;
            $event->save();
        }

        return response()->json([
            'status' => 'success',
            'data' => $event
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return response()->json([
            'status' => 'success',
            'data' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

     /**
     * Attend Event
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function attendEvent(Request $request)
    {
        $this->validate($request, [
            "user_id" => "bail|required|exists:users,id",
            "group_id" => "bail|nullable|exists:groups,id"
        ]);

        $input = $request->all();
        $attend = attendEvent::create($input);


        return response()->json([
            'status' => 'Event Scheduled'
        ]);

    }

}
