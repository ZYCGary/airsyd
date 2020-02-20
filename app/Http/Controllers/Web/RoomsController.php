<?php

namespace App\Http\Controllers\Web;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;

class RoomsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$rooms = Room::paginate();
		return view('web.rooms.index', compact('rooms'));
	}

    public function show(Room $room)
    {
        return view('web.rooms.show', compact('room'));
    }

	public function create(Room $room)
	{
		return view('web.rooms.create_and_edit', compact('room'));
	}

	public function store(RoomRequest $request)
	{
		$room = Room::create($request->all());
		return redirect()->route('web.rooms.show', $room->id)->with('message', 'Created successfully.');
	}

	public function edit(Room $room)
	{
        $this->authorize('update', $room);
		return view('web.rooms.create_and_edit', compact('room'));
	}

	public function update(RoomRequest $request, Room $room)
	{
		$this->authorize('update', $room);
		$room->update($request->all());

		return redirect()->route('web.rooms.show', $room->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Room $room)
	{
		$this->authorize('destroy', $room);
		$room->delete();

		return redirect()->route('web.rooms.index')->with('message', 'Deleted successfully.');
	}
}
