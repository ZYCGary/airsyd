@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Category /
          @if($category->id)
            Edit #{{ $category->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($category->id)
          <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('admin.categories.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">
                	<label for="type-field">Type</label>
                	<input class="form-control" type="text" name="type" id="type-field" value="{{ old('type', $category->type ) }}" />
                </div>
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $category->name ) }}" />
                </div>
                <div class="form-group">
                	<label for="description-field">Description</label>
                	<input class="form-control" type="text" name="description" id="description-field" value="{{ old('description', $category->description ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('admin.categories.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
