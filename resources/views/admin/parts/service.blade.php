@extends('layouts.layout_admin_view')
@section('title', 'Services')
@section('body')
<div class="container-fluid" id="table">
    <p><a href="{{ route('add_service') }}" class="btn btn-outline-success">Add New Service</a></p>
    <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
      <th scope="col">Name</th>
      <th scope="col">Preview</th>
      <th scope="col">Discription</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
@foreach($services as $key => $service)
    <tr>
        <td>
        <form method="POST" action="{{ route('edit_service',['id'=>$service['id']]) }} " class="form-horizontal">
          {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
      <td><a href="{{ route('edit_service',['id'=>$service['id']]) }}" class="btn btn-outline-info">Edit</a></td>
      <td>{{ $service['name'] }}</td>
      <td>{{ $service['preview'] }}</td>
      <td>{!! $service['discription'] !!}</td>
      <td><img src="{{ asset('img/'.$service['img']) }}" class="table_img"  alt=""></td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>
 
@endsection 