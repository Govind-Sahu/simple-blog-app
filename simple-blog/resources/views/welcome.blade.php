<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Welcome</title>
  </head>
  <body>

    <!-- Navigation Bar -->
    
      
      @extends('layouts.app')

      @section('content')
      <div class="container">
          <h1 class="text-center mb-4">Search Posts</h1>
          <form action="{{ route('welcome') }}" method="GET" class="search-form d-flex justify-content-center mb-4">
              <input type="text" name="search" class="form-control w-50 mr-2" placeholder="Search by title">
              <button type="submit" class="btn btn-primary">Search</button>
          </form>
      
          <!-- Jumbotron -->
          <div class="jumbotron">
              <h1 class="display-4">Latest Posts</h1>
              <p class="lead">Here are some of the latest posts available for reading.</p>
              
              <!-- Display Posts -->
              <div class="row">
                  @foreach ($posts as $post)
                  <div class="col-md-6 post-card mb-4">
                      <div class="card">
                          <div class="card-body">
                              <h2 class="card-title">{{ $post->title }}</h2>
                              <p>{{ Str::limit($post->content, 100) }}</p> <!-- Limit content display -->
                              <p class="card-text">{{ $post->author_name }} | {{ $post->published_at ? $post->published_at->format('Y-m-d') : 'No publish date' }}</p>
                              <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-primary">View Post</a>
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>
      
              <!-- Pagination -->
              <div class="d-flex justify-content-center mt-4">
                  {{ $posts->links('vendor.pagination.bootstrap-4') }}
              </div>
          </div>
      </div>
      @endsection
      
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>
