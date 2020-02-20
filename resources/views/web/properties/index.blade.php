@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Property
          <a class="btn btn-success float-xs-right" href="{{ route('web.properties.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($properties->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>User_id</th> <th>Category_id</th> <th>Type</th> <th>Street</th> <th>Suburb</th> <th>Total_bedrooms</th> <th>Total_bathrooms</th> <th>Max_load</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($properties as $property)
              <tr>
                <td class="text-xs-center"><strong>{{$property->id}}</strong></td>

                <td>{{$property->user_id}}</td> <td>{{$property->category_id}}</td> <td>{{$property->type}}</td> <td>{{$property->street}}</td> <td>{{$property->suburb}}</td> <td>{{$property->total_bedrooms}}</td> <td>{{$property->total_bathrooms}}</td> <td>{{$property->max_load}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('web.properties.show', $property->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('web.properties.edit', $property->id) }}">
                    E
                  </a>

                  <form action="{{ route('web.properties.destroy', $property->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $properties->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
