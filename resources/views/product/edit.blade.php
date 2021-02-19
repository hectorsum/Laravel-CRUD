@extends('layouts.basetemplate');
@section('content')
  <div class="border p-5 bg-light">
    <h2 class="display-8 mb-3" style="font-weight: bold">Edit Product</h2>
    <form action="/products/{{$product->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="product" class="form-label" style="font-weight: bold">Product</label>
        <input id="product" type="text" name="product" class="form-control" tabindex="1" value="{{$product->product}}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label" style="font-weight: bold">Description</label>
        <input id="description" type="text" name="description" class="form-control" tabindex="2" value="{{$product->description}}">
      </div>
      <div class="mb-3">
        <label for="quantity" class="form-label" style="font-weight: bold">Quantity</label>
        <input id="quantity" type="number" name="quantity" class="form-control" tabindex="3" value="{{$product->quantity}}">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label" style="font-weight: bold">Price</label>
        <input id="price" type="number" name="price" class="form-control" tabindex="4" step="any" value="{{$product->price}}">
      </div>
      <button type="submit" class="btn btn-success" tabindex="6">Update</button>
      <a href="/products" class="btn btn-secondary" tabindex="5">Cancel</a>
    </form>
  </div>
@endsection