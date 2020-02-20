@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Property / Show #{{ $property->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('web.properties.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('web.properties.edit', $property->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>User_id</label>
<p>
	{{ $property->user_id }}
</p> <label>Accommodation</label>
<p>
	{{ $property->accommodation }}
</p> <label>Type</label>
<p>
	{{ $property->type }}
</p> <label>Street</label>
<p>
	{{ $property->street }}
</p> <label>Suburb</label>
<p>
	{{ $property->suburb }}
</p> <label>City</label>
<p>
	{{ $property->city }}
</p> <label>Total_bedrooms</label>
<p>
	{{ $property->total_bedrooms }}
</p> <label>Total_bathrooms</label>
<p>
	{{ $property->total_bathrooms }}
</p> <label>Max_load</label>
<p>
	{{ $property->max_load }}
</p> <label>Rooms</label>
<p>
	{{ $property->rooms }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
