@extends('layouts.master')
@section('title', 'All Post')
@section('content')
    
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <b>All Post</b>
                            </div>
                            <div class="float-right"><a href="/add-post" class="btn btn-secondary"><i class="fas fa-plus"></i> Add Post</a></div>
                        </div>
                        <div class="card-body">
                            @if (Session::has('post_deleted'))
                            <div class="alert alert-danger" role="alert">
                                {{Session::get('post_deleted')}}
                            </div>                              
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Post Title</th>
                                        <th>Post Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->body }}</td>
                                            <td>
                                                <a href="posts/{{ $post->id }}" class="btn btn-sm btn-success"><i class="fas fa-info-circle"></i></a>
                                                <a href="edit-post/{{ $post->id }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="delete-post/{{ $post->id }}" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>    
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection