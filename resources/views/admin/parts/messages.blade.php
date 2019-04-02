@extends('layouts.layout_admin_view')
@section('title', 'Messages')
@section('body')
<div class="sort">
       <form class="form-inline" action="{{ route('messages') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group" id="input-sort">
           <select class="form-control" id="select" name="subject">
            <option selected value="">Subject</option>
            <option value="Product">Product</option>
            <option value="Service">Service</option>
            <option value="Other">Other</option>
          </select>
        </div>
       <input class="btn btn-outline-dark" type="submit" name="submit" value="Sort">
      </form>
</div>
<div class="container-fluid" id="table">
    <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Status</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
      @foreach($messages as $key => $message)
          <tr>
              <td>
              @if($message->status == null)
              <form action="{{ route('cheked',['id'=>$message->id]) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="status" value="Cheked">
                <input class="btn btn-outline-info" type="submit" name="submit" value="Add Viewed">
              </form>
              @else
                {{ $message->status }}
              @endif
              </td>
              <td>{{ $message->name }}</td>
              <td>{{ $message->phone }}</td>
              <td>{{ $message->address }}</td>
              <td>{{ $message->email }}</td>
              <td>{{ $message->subject }}</td>
              <td>{{ $message->message }}</td>
              <td>{{ $message->created_at }}</td>
          </tr>
       @endforeach
        </tbody>
      </table>
</div>
 
@endsection	