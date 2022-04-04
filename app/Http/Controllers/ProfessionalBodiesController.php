<?php

namespace App\Http\Controllers;

use App\Models\ProfessionalBody;
use App\Http\Requests\StoreProfessionalBodyRequest;
use App\Http\Requests\UpdateProfessionalBodyRequest;
use App\Http\Resources\ProfessionalBodiesResource;

class ProfessionalBodiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProfessionalBodiesResource::collection(ProfessionalBody::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfessionalBodyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfessionalBodyRequest $request)
    {
        $professional_body = ProfessionalBody::create($request->all());
        return new ProfessionalBodiesResource($professional_body);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfessionalBody  $professional_body
     * @return \Illuminate\Http\Response
     */
    public function show(ProfessionalBody $professional_body)
    {
        return new ProfessionalBodiesResource($professional_body);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfessionalBodyRequest  $request
     * @param  \App\Models\ProfessionalBody  $professional_body
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfessionalBodyRequest $request, ProfessionalBody $professional_body)
    {
        $professional_body->update($request->all());
        return new ProfessionalBodiesResource($professional_body);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfessionalBody  $professional_body
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfessionalBody $professional_body)
    {
        $professional_body->delete();
        return response(null, 204);
    }
}
