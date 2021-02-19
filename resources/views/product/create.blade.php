@extends('layouts.basetemplate');

@section('content')

  <div class="border p-5 bg-light">
    <h2 class="display-8 mb-3" style="font-weight: bold">Add Product</h2>
    <form action="/products" method="POST">
      @csrf
      <div class="mb-3">
        <label for="product" class="form-label" style="font-weight: bold">Product</label>
        <input id="product" type="text" name="product" class="form-control" tabindex="1">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label" style="font-weight: bold">Description</label>
        <input id="description" type="text" name="description" class="form-control" tabindex="2">
      </div>
      <div class="mb-3">
        <label for="quantity" class="form-label" style="font-weight: bold">Quantity</label>
        <input id="quantity" type="number" name="quantity" class="form-control" tabindex="3">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label" style="font-weight: bold">Price</label>
        <input id="price" type="number" name="price" class="form-control" tabindex="4" step="any" value="0.00">
      </div>
      <a href="/products" class="btn btn-secondary" tabindex="5">Cancel</a>
      <button type="submit" class="btn btn-success" tabindex="6">Save</button>
    </form>
  </div>
  
@endsection