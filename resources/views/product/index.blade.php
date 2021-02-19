@extends('layouts.basetemplate');
@section('content')
  {{-- products/create - (create makes reference to a create function in ProductController) --}}
  <a href="products/create" class="btn btn-success btn-lg">Create</a> 
  <table class="table table-striped table-sm align-middle mt-4">
    <thead class="table-dark text-center">
      <tr>
        <th scope="col">Product</th>
        <th scope="col">Description</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Created at</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody class="text-center">
      @foreach($products as $product)
        <tr>
          <td>{{$product->product}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->quantity}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->created_at}}</td>
          <td>
            <form action="{{route('products.destroy',$product->id)}}" method="POST" class="m-0">
              <a href="/products/{{$product->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection