<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpacesRequest;
use App\Http\Resources\SpacesResource;
use App\Models\Spaces;

class SpacesController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Spaces::class);

        return SpacesResource::collection(Spaces::all());
    }

    public function store(SpacesRequest $request)
    {
        $this->authorize('create', Spaces::class);

        return new SpacesResource(Spaces::create($request->validated()));
    }

    public function show(Spaces $spaces)
    {
        $this->authorize('view', $spaces);

        return new SpacesResource($spaces);
    }

    public function update(SpacesRequest $request, Spaces $spaces)
    {
        $this->authorize('update', $spaces);

        $spaces->update($request->validated());

        return new SpacesResource($spaces);
    }

    public function destroy(Spaces $spaces)
    {
        $this->authorize('delete', $spaces);

        $spaces->delete();

        return response()->json();
    }
}
