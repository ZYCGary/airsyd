@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Room /
          @if($room->id)
            Edit #{{ $room->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($room->id)
          <form action="{{ route('web.rooms.update', $room->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('web.rooms.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">
                    <label for="property_id-field">Property_id</label>
                    <input class="form-control" type="text" name="property_id" id="property_id-field" value="{{ old('property_id', $room->property_id ) }}" />
                </div>
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $room->name ) }}" />
                </div>
                <div class="form-group">
                    <label for="rent-field">Rent</label>
                    <input class="form-control" type="text" name="rent" id="rent-field" value="{{ old('rent', $room->rent ) }}" />
                </div>
                <div class="form-group">
                    <label for="bath-field">Bath</label>
                    <input class="form-control" type="text" name="bath" id="bath-field" value="{{ old('bath', $room->bath ) }}" />
                </div>
                <div class="form-group">
                    <label for="bed_size-field">Bed_size</label>
                    <input class="form-control" type="text" name="bed_size" id="bed_size-field" value="{{ old('bed_size', $room->bed_size ) }}" />
                </div>
                <div class="form-group">
                    <label for="bond-field">Bond</label>
                    <input class="form-control" type="text" name="bond" id="bond-field" value="{{ old('bond', $room->bond ) }}" />
                </div>
                <div class="form-group">
                    <label for="bills-field">Bills</label>
                    <input class="form-control" type="text" name="bills" id="bills-field" value="{{ old('bills', $room->bills ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('web.rooms.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
