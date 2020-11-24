@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Room
          <a class="btn btn-success float-xs-right" href="{{ route('web.rooms.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($rooms->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Property_id</th> <th>Name</th> <th>Rent</th> <th>Bath</th> <th>Bed_size</th> <th>Bond</th> <th>Bills</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($rooms as $room)
              <tr>
                <td class="text-xs-center"><strong>{{$room->id}}</strong></td>

                <td>{{$room->property_id}}</td> <td>{{$room->name}}</td> <td>{{$room->rent}}</td> <td>{{$room->bath}}</td> <td>{{$room->bed_size}}</td> <td>{{$room->bond}}</td> <td>{{$room->bills}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('web.rooms.show', $room->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('web.rooms.edit', $room->id) }}">
                    E
                  </a>

                  <form action="{{ route('web.rooms.destroy', $room->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $rooms->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
