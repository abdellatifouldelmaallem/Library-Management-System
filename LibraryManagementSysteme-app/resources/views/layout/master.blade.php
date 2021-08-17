<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}" />
    <title>Document</title>
</head>
<body>

    <header class="mb-auto ">
        <div class="d-flex justify-content-between newNav">
          <img src="{{asset('image/logo.png')}}" class="ml-3" style="height: 50px;" alt="logo">
          <nav class="nav nav-masthead justify-content-end float-md-end my-2 px-3">
            <a class="nav-link active test " aria-current="page" href="{{route('home')}}">Home</a>
            <a class="nav-link test" href="{{ route('about')}}">About us</a>
            <a class="nav-link test" href="{{ route('contact')}}">Contact us</a>
            <a class="nav-link test" href="{{ route('login')}}">Account</a>
            <a class="nav-link test" href="{{ route('register')}}">Sign up</a>
            <form>
              <input class="form-control " type="text" placeholder="Search" aria-label="Search">
            </form>
          </nav>
        </div>
      </header>
    
@yield("contenu")

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>