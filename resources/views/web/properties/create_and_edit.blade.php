@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Property /
          @if($property->id)
            Edit #{{ $property->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($property->id)
          <form action="{{ route('web.properties.update', $property->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('web.properties.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $property->user_id ) }}" />
                </div>
                <div class="form-group">
                    <label for="category_id-field">Category_id</label>
                    <input class="form-control" type="text" name="category_id" id="category_id-field" value="{{ old('category_id', $property->category_id ) }}" />
                </div>
                <div class="form-group">
                    <label for="type-field">Type</label>
                    <input class="form-control" type="text" name="type" id="type-field" value="{{ old('type', $property->type ) }}" />
                </div>
                <div class="form-group">
                	<label for="street-field">Street</label>
                	<input class="form-control" type="text" name="street" id="street-field" value="{{ old('street', $property->street ) }}" />
                </div>
                <div class="form-group">
                    <label for="suburb_id-field">Suburb</label>
                    <input class="form-control" type="text" name="suburb" id="suburb-field" value="{{ old('suburb', $property->suburb_id ) }}" />
                </div>
                <div class="form-group">
                    <label for="total_bedrooms-field">Total_bedrooms</label>
                    <input class="form-control" type="text" name="total_bedrooms" id="total_bedrooms-field" value="{{ old('total_bedrooms', $property->total_bedrooms ) }}" />
                </div>
                <div class="form-group">
                    <label for="total_bathrooms-field">Total_bathrooms</label>
                    <input class="form-control" type="text" name="total_bathrooms" id="total_bathrooms-field" value="{{ old('total_bathrooms', $property->total_bathrooms ) }}" />
                </div>
                <div class="form-group">
                    <label for="max_load-field">Max_load</label>
                    <input class="form-control" type="text" name="max_load" id="max_load-field" value="{{ old('max_load', $property->max_load ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('web.properties.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
