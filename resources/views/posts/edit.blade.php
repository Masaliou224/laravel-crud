<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Posts</title>
</head>
<body>

  <div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <h3>Update Post</h3>
        <form action="{{ route('posts.update', $post->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control" id="title" name="name"
              value="{{ $post->name }}" required/>
          </div>
          <div class="form-group">
            <label for="body">Email</label>
            <input class="form-control" id="body" name="email" value="{{ $post->body }}" required/>
          </div>
          <div class="form-group">
            <label for="title">Password</label>
            <input type="text" class="form-control" id="title" name="password"
              value="{{ $post->password }}" required/>
          </div>
          <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
  