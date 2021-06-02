@extends('layouts.master')
@section('title', 'Single Post')
@section('content')

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header"><b>Post Details</b></div>
                        <div class="card-body">
                            <h4>Post Title: {{ $post->title }}</h4>
                            <p>Post Description: {{ $post->body }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection