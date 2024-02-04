<?php

namespace App\Http\Controllers;

use App\Http\Requests\Space_typesRequest;
use App\Http\Resources\Space_typesResource;
use App\Models\Space_types;

class Space_typesController extends Controller
{
    public function index()
    {  $space_types = Space_types::all();
        $spaces = Space_types::all();

        return
       view('customer.view-spaces', compact('spaces' , 'space_types'));
    }

    public function store(Space_typesRequest $request)
    {
        $this->authorize('create', Space_types::class);

        return new Space_typesResource(Space_types::create($request->validated()));
    }

    public function show(Space_types $space_types)
    {
        $this->authorize('view', $space_types);

        return new Space_typesResource($space_types);
    }

    public function update(Space_typesRequest $request, Space_types $space_types)
    {
        $this->authorize('update', $space_types);

        $space_types->update($request->validated());

        return new Space_typesResource($space_types);
    }

    public function destroy(Space_types $space_types)
    {
        $this->authorize('delete', $space_types);

        $space_types->delete();

        return response()->json();
    }
}
