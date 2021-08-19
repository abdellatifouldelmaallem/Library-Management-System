<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- owl carousel min.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel them.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}" />
    <title>Library Mangement system</title>

</head>

<body>
    <div class="">
      <!-- navbar and header start here-->
        <header class="mb-auto sticky-top ">
          <div class="d-flex justify-content-between ">
            <img src="{{asset('image/logo.png')}}" class="ml-3" style="height: 60px;" alt="logo">
            <nav class="nav nav-masthead justify-content-end float-md-end my-2 px-3">
              <a class="nav-link active test " aria-current="page" href="{{route('home')}}">Home</a>
              <a class="nav-link test" href="{{ route('about')}}">About us</a>
              <a class="nav-link test" href="{{ route('contact')}}">Contact us</a>
              <a class="nav-link test" href="{{ route('login')}}">Account</a>
              <a class="nav-link test" href="{{ route('register')}}">Sign up</a>
              <form action="{{route('search')}}" method="GET">
                <input class="form-control " name="query" type="text" placeholder="Search" aria-label="Search">
              </form>
            </nav>
          </div>
        </header>


<h1 class="text-center py-5">the book which you're searching for is here</h1>

<div class="container">
    @if (isset($search_book))

    <table class="table">
        <thead>
          <tr>
            {{-- <th scope="col">#</th> --}}
            <th scope="col">name</th>
            <th scope="col">image</th>
            <th scope="col">library</th>
            <th scope="col">adress</th>
            <th scope="col">price</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
    
            @foreach ($search_book as $search_books )
      
          <tr>
            {{-- <th scope="row">{{$search_books->id}}</th> --}}
            <td>{{$search_books->name}}</td>
            <td><img src="{{ asset('image/'.$search_books->image) }}" style="width: 99px;" alt="image"></td>
            <td>{{$search_books->users->name}}</td>
            <td>{{$search_books->users->adress}}</td>
            <td>{{$search_books->price}}</td>
            <td>
              <a href="" class="btn btn-primary">Buy Now</a>
            </td>
          </tr>
          @endforeach
          @else
                
          <tr class="text-center"><th>NO Result found</th></tr>

          @endif
        </tbody>
    </table>
</div>
</body>

</html>




