@extends('layouts.master')
@section('title','Add Post')
@section('content')

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header"><b>Add Post</b></div>
                        <div class="card-body">
                            @if (Session::has('post_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_created')}}
                            </div>                              
                            @endif
                            <form action="{{ route('post.create') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Post Title">
                                </div>
                                <div class="form-group">
                                    <label for="body">Description</label>
                                    <textarea name="body" class="form-control" rows="10" placeholder="Enter Post Description"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection