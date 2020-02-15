@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Locale / Show #{{ $locale->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('admin.locales.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('admin.locales.edit', $locale->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Code</label>
<p>
	{{ $locale->code }}
</p> <label>Language</label>
<p>
	{{ $locale->language }}
</p> <label>Speak</label>
<p>
	{{ $locale->speak }}
</p> <label>Is_app_lang</label>
<p>
	{{ $locale->is_app_lang }}
</p> <label>Is_admin_lang</label>
<p>
	{{ $locale->is_admin_lang }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
