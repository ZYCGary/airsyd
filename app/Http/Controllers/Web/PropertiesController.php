<?php

namespace App\Http\Controllers\Web;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;

class PropertiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$properties = Property::paginate();
		return view('web.properties.index', compact('properties'));
	}

    public function show(Property $property)
    {
        return view('web.properties.show', compact('property'));
    }

	public function create(Property $property)
	{
		return view('web.properties.create_and_edit', compact('property'));
	}

	public function store(PropertyRequest $request)
	{
		$property = Property::create($request->all());
		return redirect()->route('web.properties.show', $property->id)->with('message', 'Created successfully.');
	}

	public function edit(Property $property)
	{
        $this->authorize('update', $property);
		return view('web.properties.create_and_edit', compact('property'));
	}

	public function update(PropertyRequest $request, Property $property)
	{
		$this->authorize('update', $property);
		$property->update($request->all());

		return redirect()->route('web.properties.show', $property->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Property $property)
	{
		$this->authorize('destroy', $property);
		$property->delete();

		return redirect()->route('web.properties.index')->with('message', 'Deleted successfully.');
	}
}
