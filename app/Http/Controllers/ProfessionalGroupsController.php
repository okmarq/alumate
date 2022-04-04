<?php

namespace App\Http\Controllers;

use App\Models\ProfessionalGroup;
use App\Http\Requests\StoreProfessionalGroupRequest;
use App\Http\Requests\UpdateProfessionalGroupRequest;
use App\Http\Resources\ProfessionalGroupsResource;

class ProfessionalGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProfessionalGroupsResource::collection(professionalGroup::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfessionalGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfessionalGroupRequest $request)
    {
        $professionalGroup = professionalGroup::create($request->all());
        return new professionalGroupsResource($professionalGroup);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfessionalGroup  $professionalGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ProfessionalGroup $professionalGroup)
    {
        return new professionalGroupsResource($professionalGroup);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfessionalGroupRequest  $request
     * @param  \App\Models\ProfessionalGroup  $professionalGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfessionalGroupRequest $request, ProfessionalGroup $professionalGroup)
    {
        $professionalGroup->update($request->all());
        return new professionalGroupsResource($professionalGroup);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfessionalGroup  $professionalGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfessionalGroup $professionalGroup)
    {
        $professionalGroup->delete();
        return response(null, 204);
    }
}
