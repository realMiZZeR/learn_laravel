<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
  <title>Posts</title>

  @vite(['resources/js/app.js'])
</head>
<body>
  <div class="container">
    <nav>
      <ul class="row">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('post.index') }}">Posts</a></li>
        <li><a href="{{ route('about.index') }}">About</a></li>
        <li><a href="{{ route('contact.index') }}">Contacts</a></li>
      </ul>
    </nav>
  </div>
  @yield('content')

</body>
</html>