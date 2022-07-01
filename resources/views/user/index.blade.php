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
  <h2>Users</h2>
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>User name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $key =>  $users)
      <tr>
        <td>{{ $users -> id }}</td>
        <td>{{ $users -> name }}</td>
        <td>{{ $users -> email }}</td>
        <td><a href='{{url('user/delete/'.$users->id)}}'> Delete</a></td>
        <td><a href='{{url('user/delete/'.$users->id)}}'> Edit</a></td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
