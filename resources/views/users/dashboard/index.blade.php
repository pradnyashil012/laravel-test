@extends('layouts.app')
@section('content')
@if(Auth::user()->role == 'author')
<div>
  <ul class="list-group">
    <li class="list-group-item">
      
    </li>
    <li class="list-group-item panel-body">
      <table class="table-padding">
        <style>
          .table-padding td {
            padding: 3px 8px;
          }
        </style>
        
        <tr>
          <td><a href="{{ route('post.create') }}" class="btn btn-primary">Create Post</a>   </td>
        </tr>
        

        
      </table>
    </li>
  </ul>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Latest Posts</h3>
  </div>
  <div class="panel-body">
  <table border="1" >
  <tbody>
  <tr>
          <th>Blog Title</th>
          <th>Description</th>
          <th>Created At</th>
        </tr>
          @if($posts->count())
          @foreach($posts as $post)
          <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->created_at->format('d M, Y') }}</td>
          </tr>
          @endforeach
          @endif
  </tbody>
  </table>
  </div>
</div>
@else
<div>
  <ul class="list-group">
    <li class="list-group-item">
      Admin
    </li>
    <li class="list-group-item panel-body">
      <table class="table-padding">
        <style>
          .table-padding td {
            padding: 3px 8px;
          }
        </style>
        
      </table>
    </li>
  </ul>
  <form action="{{ route('user.store') }}" method="post">
              @csrf
                <div class="card-body">
               
                  <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="email">User Role</label>
                    <input type="text" name="role" class="form-control" id="role" placeholder="Enter Role ex. author, manager">
                  </div>
                  <div class="form-group">
                    <label for="email">User Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="password">User Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                </div>
              </form>
</div>
@endif
@endsection

