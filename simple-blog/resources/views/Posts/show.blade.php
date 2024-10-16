
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Comments</title>

    <!-- Custom CSS -->
    <style>
      body {
        background-color: #f8f9fa;
        
      }
      h1 {
        margin-bottom: 20px;
      }
      h3 {
        margin-top: 30px;
      }
      .comment {
        background-color: #ffffff;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        padding: 10px;
        margin-bottom: 15px;
      }
      .comment-form {
        margin-top: 20px;
        padding: 15px;
        background-color: #ffffff;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
      }
      .form-control {
        margin-bottom: 10px;
      }
      .btn-submit {
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    @extends('layouts.app')

    @section('title', $post->title)
    
    @section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>
            <p>{{ $post->author_name }} | {{ $post->published_at ? $post->published_at->format('Y-m-d') : 'Not Published' }}</p>
    
            <!-- Displaying Comments -->
            <h3>Comments:</h3>
            @foreach ($comments as $comment)
                <div class="comment mb-2"> <!-- Added margin for spacing -->
                    <strong>{{ $comment->commenter_name }}</strong>
                    <p>{{ $comment->content }}</p>
                </div>
            @endforeach
    
            <!-- Comment Form -->
            <form action="{{ route('comments.store', $post) }}" method="POST" class="comment-form">
                @csrf
                <input type="text" name="commenter_name" class="form-control mb-2" placeholder="Your Name" required>
                <textarea name="content" class="form-control mb-2" rows="3" placeholder="Your Comment" required></textarea>
                <button type="submit" class="btn btn-primary btn-submit">Add Comment</button>
            </form>
        </div>
    </div>
    @endsection
    


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
