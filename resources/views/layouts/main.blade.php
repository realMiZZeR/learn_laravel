<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="{{ route('main.hello') }}">Home</a></li>
        <li><a href="{{ route('post.index') }}">Posts</a></li>
        <li><a href="{{ route('about.index') }}">About</a></li>
        <li><a href="{{ route('contact.index') }}">Contacts</a></li>
      </ul>
    </nav>
  </div>
  @yield('content')

</body>
</html>