@extends('layouts.master')
@section('title','Edit Post')
@section('content')

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header"><b>Edit Post</b></div>
                        <div class="card-body">
                            @if (Session::has('post_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_updated')}}
                            </div>                              
                            @endif

                            <form action="{{ route('post.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $post->id }}"/>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Post Title" value="{{ $post->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="body">Description</label>
                                    <textarea name="body" class="form-control" rows="10" placeholder="Enter Post Description">{{ $post->body }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Post</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection