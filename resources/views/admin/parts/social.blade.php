@extends('layouts.layout_admin_view')
@section('title', 'Social')
@section('body')
<div class="container-fluid" id="table">
   <p><a href="{{ route('add_link') }}" class="btn btn-outline-success">Add New Social Link</a></p>
    <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Link</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
@foreach($links as $key => $link)
    <tr>
        <td>{{ $link['name'] }}</td>
        <td>{{ $link['link'] }}</td>
        <td>
        <form method="post" action="{{ route('delete_link',['id'=>$link['id']]) }} " class="form-horizontal">
          {{ csrf_field() }}
        <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>
 
@endsection 