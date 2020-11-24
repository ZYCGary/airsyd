@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Locale
          <a class="btn btn-success float-xs-right" href="{{ route('admin.locales.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($locales->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Code</th> <th>Language</th> <th>Speak</th> <th>Is_app_lang</th> <th>Is_admin_lang</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($locales as $locale)
              <tr>
                <td class="text-xs-center"><strong>{{$locale->id}}</strong></td>

                <td>{{$locale->code}}</td> <td>{{$locale->language}}</td> <td>{{$locale->speak}}</td> <td>{{$locale->is_app_lang}}</td> <td>{{$locale->is_admin_lang}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('admin.locales.show', $locale->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('admin.locales.edit', $locale->id) }}">
                    E
                  </a>

                  <form action="{{ route('admin.locales.destroy', $locale->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $locales->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
