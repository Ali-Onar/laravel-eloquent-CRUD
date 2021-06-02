<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Edit Post</title>
</head>
<body>

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
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>