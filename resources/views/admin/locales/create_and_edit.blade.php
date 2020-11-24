@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Locale /
          @if($locale->id)
            Edit #{{ $locale->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($locale->id)
          <form action="{{ route('admin.locales.update', $locale->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('admin.locales.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">
                    <label for="code-field">Code</label>
                    <input class="form-control" type="text" name="code" id="code-field" value="{{ old('code', $locale->code ) }}" />
                </div>
                <div class="form-group">
                	<label for="language-field">Language</label>
                	<input class="form-control" type="text" name="language" id="language-field" value="{{ old('language', $locale->language ) }}" />
                </div>
                <div class="form-group">
                	<label for="speak-field">Speak</label>
                	<input class="form-control" type="text" name="speak" id="speak-field" value="{{ old('speak', $locale->speak ) }}" />
                </div>
                <div class="form-group">
                    <label for="is_app_lang-field">Is_app_lang</label>
                    <input class="form-control" type="text" name="is_app_lang" id="is_app_lang-field" value="{{ old('is_app_lang', $locale->is_app_lang ) }}" />
                </div>
                <div class="form-group">
                    <label for="is_admin_lang-field">Is_admin_lang</label>
                    <input class="form-control" type="text" name="is_admin_lang" id="is_admin_lang-field" value="{{ old('is_admin_lang', $locale->is_admin_lang ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('admin.locales.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
