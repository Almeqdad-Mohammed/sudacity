@extends('layouts.app')
@section('title', 'Sydacity')

@section('content')
  <div class="col-md-4 offset-md-4">
    <div class="card ">
      <div class="card-body">
        @if (Auth::check())
          <div class="alert alert-danger text-center mb-0">
            I'm change This
          </div>
        @else
          <div class="alert alert-danger text-center">
            I'm change This
          </div>

          <a class="btn btn-lg btn-primary btn-block" href="{{ route('login') }}">
            <i class="fas fa-sign-in-alt"></i>
            I'm change This
          </a>
        @endif
      </div>
    </div>
  </div>
@stop
