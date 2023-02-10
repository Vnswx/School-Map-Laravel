<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('forcss/css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
</head>
<body>
  <div class="center">
    <h1>SMK Taruna Bhakti</h1>
    <div class="kiri">
      <form action="post">
        <div class="txt_field">
            <input type="text" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="password" required>
            <span></span>
            <label>Password</label>
        </div>

        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">

        {{-- <div class="log-google">
          <input type="submit" value="Login dengan Google">
        </div> --}}
    </form>
            <img class="imgs" src="{{ asset('forcss/img/logo-tb.png') }}" alt="">
    </div>

    <div class="kanan">
      <img class="imgs" src="{{ asset('forcss/img/logo-tb.png') }}" alt="">
    </div>
</div>

            {{-- <img class="imgs" src="{{ asset('forcss/img/logo-tb.png') }}" alt=""> --}}
            {{-- <img class="kik" src="{{ asset('forcss/img/maskot1.png') }}" alt=""> --}}
</body>
</html>