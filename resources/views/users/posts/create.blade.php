@extends('layouts.app')
@section('content')

    <form action="{{ route('post.store') }}" method="post">
              @csrf
                <div class="card-body">
               
                  <div class="form-group">
                    <label for="username">Blog Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Blog Title">
                  </div>
                  <div class="form-group">
                    <label for="email">Description</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                </div>
    </form>

@endsection