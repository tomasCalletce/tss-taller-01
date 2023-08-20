@extends('layouts.app')
@section('title', 'Home Page - Online Store')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Add New Product</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('make.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="productName">Product Name:</label>
                            <input type="text" class="form-control" id="productName" name="name" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Description:</label>
                            <input type="text" class="form-control" id="productDescription" name="description" value="{{ old('description') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Price ($):</label>
                            <input type="number" class="form-control" id="productPrice" name="price" step="0.01" value="{{ old('price') }}" required>
                        </div>
                        <div class="form-group text-center">
                          <input type="submit" class="btn btn-primary" value="Send" />
                        </div>
                    </form>
                </div>
                @if(session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
