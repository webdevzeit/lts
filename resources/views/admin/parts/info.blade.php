@extends('layouts.layout_admin_view')
@section('title', 'Info')
@section('body')

<div class="container-fluid" id="table">
	<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Edit</th>
      <th scope="col">Title</th>
      <th scope="col">Favicon</th>
      <th scope="col">Work Phone</th>
      <th scope="col">Mobile Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Map</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td ><a href="{{ route('edit_info') }}" class="btn btn-outline-info">Edit</a></td>
      <td>{{ $maininfo['title'] }}</td>
      <td><img src=" {{ asset('/img/'.$maininfo['favicon']) }}" class="table_img"  alt=""></td>
      <td>{{ $maininfo['workphone'] }}</td>
      <td>{{ $maininfo['mobilephone'] }}</td>
      <td>{{ $maininfo['address'] }}</td>
      <td>{!! $maininfo['map'] !!}</td>
      <td>{{ $maininfo['email'] }}</td>
    </tr>
  </tbody>
</table>
</div>
@endsection