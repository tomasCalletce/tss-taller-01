@extends('layouts.app')

@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           {{ $viewData["product"]["name"] }}
        </h5>
        <p class="card-text">{{ $viewData["product"]["price"] }}</p>
      <p class="card-text"><small class="text-muted">{{ $viewData["product"]["description"] }}</small></p>
      </div>
    </div>
  </div>
</div>
@endsection
