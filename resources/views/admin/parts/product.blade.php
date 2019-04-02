@extends('layouts.layout_admin_view')
@section('title', 'Product')
@section('body')
<div class="container-fluid" id="table">
    <p><a href="{{ route('add_product') }}" class="btn btn-outline-success">Add New Product</a></p>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
      <th scope="col">Name</th>
      <th scope="col">Preview</th>
      <th scope="col">Price</th>
      <th scope="col">Discription</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
 @foreach($products as $key =>$product )
  <tr>
      <td>
        <form method="POST" action="{{ route('edit_product',['id'=>$product['id']]) }}" class="form-horizontal">
          {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
      <td><a href="{{ route('edit_product',['id'=>$product['id']]) }}" class="btn btn-outline-info">Edit</a></td>
      <td>{{ $product['name'] }}</td>
      <td>{!! $product['preview'] !!}</td>
      <td>{{ $product['price'] }}</td>
      <td id="discription">{!! $product['discription'] !!}</td>
      <td><img src="{{ asset('img/'.$product['img']) }}" class="table_img"  alt=""> </td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>
 
@endsection 