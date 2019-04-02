@extends('layouts.layout_admin_view')
@section('title', 'Slider')
@section('body')
<div class="container-fluid" id="table">
   <p><a href="{{ route('add_carousel') }}" class="btn btn-outline-success">Add New Slide</a></p>
    <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
      <th scope="col">Title</th>
      <th scope="col">Text</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
@foreach($carousels as $key => $carousel)
    <tr>
      <td>
        <form method="POST" action="{{ route('edit_carousel',['id'=>$carousel['id']]) }}" class="form-horizontal">
          {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
      <td><a href="{{ route('edit_carousel',['id'=>$carousel['id']]) }}" class="btn btn-outline-info">Edit</a></td>
      <td>{{ $carousel['preview'] }}</td>
      <td>{!! $carousel['text'] !!}</td>
      <td><img src=" {{ asset('/img/'.$carousel['img']) }} "  class="table_img" alt=""></td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>
 
@endsection 