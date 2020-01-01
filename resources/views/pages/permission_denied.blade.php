@extends('layouts.app')
@section('title', 'Sudacity')

@section('content')
  <div class="col-md-4 offset-md-4">
    <div class="card ">
      <div class="card-body">
        @if (Auth::check())
          <div class="alert alert-danger text-center mb-0">
            For Testing Just。
          </div>
        @else
          <div class="alert alert-danger text-center">
            For Testing
          </div>

          <a class="btn btn-lg btn-primary btn-block" href="{{ route('login') }}">
            <i class="fas fa-sign-in-alt"></i>
            For Testing
          </a>
        @endif
      </div>
    </div>
  </div>
@stop
