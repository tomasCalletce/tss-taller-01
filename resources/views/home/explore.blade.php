@extends('layouts.app')
@section('content')
<div class="row">
  @foreach ($viewData["products"] as $product)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="https://laravel.com/img/logotype.min.svg" class="card-img-top img-card">
      <div class="card-body text-center">
        <a href="{{ route('explore.show', ['id'=> $product["id"]]) }}"
          class="btn bg-primary text-white">{{ $product["name"] }}</a>
        <p>{{ $product->price }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
