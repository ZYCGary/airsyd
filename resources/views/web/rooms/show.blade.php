@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Room / Show #{{ $room->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('web.rooms.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('web.rooms.edit', $room->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Property_id</label>
<p>
	{{ $room->property_id }}
</p> <label>Name</label>
<p>
	{{ $room->name }}
</p> <label>Rent</label>
<p>
	{{ $room->rent }}
</p> <label>Bath</label>
<p>
	{{ $room->bath }}
</p> <label>Bed_size</label>
<p>
	{{ $room->bed_size }}
</p> <label>Bond</label>
<p>
	{{ $room->bond }}
</p> <label>Bills</label>
<p>
	{{ $room->bills }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
