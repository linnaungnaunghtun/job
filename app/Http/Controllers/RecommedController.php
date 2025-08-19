<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorerecommedRequest;
use App\Http\Requests\UpdaterecommedRequest;
use App\Http\Resources\RecommedResource;
use App\Models\recommed;
use Illuminate\Support\Facades\Validator;

class RecommedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recommeds = recommed::all();

        return RecommedResource::collection($recommeds);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorerecommedRequest $request)
    {

        $recommed = recommed::create([
            'problem' => $request->problem,
            'environment' => $request->environment,
            'work' => $request->work,
            'subject' => $request->subject,
            'motivate' => $request->motivate,
            'stress' => $request->stress,
            'skill' => $request->skill,
            'success' => $request->success,
            'personality' => $request->personality,
            'creativity' => $request->creativity,
           'user_id' => auth()->id()
        ]);
       

        return response()->json([
            'message' => 'Recommed created successfully',
            'data' => new RecommedResource($recommed)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $validated = Validator::make(['id' => $id], [
            'id' => 'required|integer|exists:recommeds,id',
        ]);

        if ($validated->fails()) {
            return response()->json([
                'message' => 'Invalid ID',
                'errors' => $validated->errors()
            ], 422);
        }

        $recommed = recommed::find($id);

        return new RecommedResource($recommed);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(recommed $recommed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdaterecommedRequest $request, recommed $recommed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(recommed $recommed)
    {
        //
    }
}
