<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Blog</h2>

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>title</th>
        <th>content</th>
        <th>startdate</th>
        <th>enddate</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $key =>  $blog)
      <tr>
        <td>{{ $blog -> id }}</td>
        <td>{{ $blog -> title }}</td>
        <td>{{ $blog -> content }}</td>
        <td>{{ $blog -> startdate }}</td>
        <td>{{ $blog -> enddate }}</td>
        <td><img src="{{url('blogs/'.$blog->image)}}"  width="80px" height="80px" ></td>
        <td><a href='{{url('blog/delete/'.$blog->id)}}'> Delete</a></td>
        <td><a href='{{url('blog/edit/'.$blog->id)}}'> Edit</a></td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
