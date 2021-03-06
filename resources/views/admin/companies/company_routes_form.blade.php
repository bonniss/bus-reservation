@extends('admin.layouts.admin_layout')

@section('more-header')

@endsection

@section('content')

<form action="{{ route('company_routes.store', ['company' => $company->id]) }}" method="post">

  <div class="row">
    <div class="col-12">
      <h3>Assign Routes To {{ $company->name }}</h3>
      <hr>
    </div>
  </div>

  @if(session('message'))
  <div class="row">
    <div class="col-12">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> {{session('message')}}.
      </div>
    </div>
  </div>
  @endif

  <div class="row">

    <div class="col-12 col-md-4">

      @csrf

      <div class="form-group">
        <label for="routeSelector">Route:</label>
        <select id="routeSelector" class="form-control"
          name="route_id" required>
          <option value="" selected disabled>Select Route</option>
          @foreach($routes as $route)
            <option value="{{$route->id}}">{{ $route->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="">Price:</label>
        <input type="text" class="form-control" name="fare" required>
      </div>

      <div class="form-group">
        <button class="btn btn-primary float-right" type="submit">Assign</button>
      </div>

    </div>

  </div>


</form>

@endsection
