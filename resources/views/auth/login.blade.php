<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
  <header>
      <h1>Welcome to Simple Chat!</h1>
      <h3>
        @guest
            <a href=" {{route('login.form')}} ">Login</a>
            <a href=" {{route('register.form')}} ">Register</a>
        @endguest
        @auth
        <a href=" {{route('welcome')}} ">Home</a>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display:none;">
            @csrf
        </form>
        @endauth
      </h3>
      <hr>
  </header>

  <body>
      <form action="{{route('login')}}" method="POST">
          @csrf
          <input type="text" name="username" placeholder="username">
          <input type="password" name="password" placeholder="password"
          <br>
          <button type="submit">Login</button>
      </form>
  </body>

  <footer>
    <hr>
    <i>Dibuat oleh @hanselstevb, @deanfw</i>
  </footer>
</html>
