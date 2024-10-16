
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Create Post</title>

    <style>
      /* Custom Styles */
      body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
      }
      .form-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
      }
      .form-title {
        text-align: center;
        margin-bottom: 30px;
      }
      .form-group label {
        font-weight: bold;
      }
      button {
        width: 100%;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container form-container">
      <h1 class="form-title">Create Post</h1>
      <form action="{{ route('posts.store') }}" method="POST">
          @csrf
          <div class="form-group">
              <label for="title">Post Title</label>
              <input type="text" id="title" name="title" class="form-control" placeholder="Enter post title" required>
            </div>
            <div class="form-group">
                <label for="content">Post Content</label>
                <textarea id="content" name="content" class="form-control" rows="4" placeholder="Enter post content" required></textarea>
            </div>
            <div class="form-group">
                <label for="author">Author Name</label>
                <input type="text" id="author" name="author_name" class="form-control" placeholder="Enter author's name" required>
            </div>
            <div class="form-group">
            <input type="date" name="published_at" required>
          </div>
          <button type="submit" class="btn btn-primary">Create Post</button>
      </form>
    </div>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
