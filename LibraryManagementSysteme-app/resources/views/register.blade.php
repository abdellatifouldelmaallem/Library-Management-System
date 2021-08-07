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
    <title>Document</title>
</head>
<body>
    
    <section class="login py-5 bg-light">
        <div class="container">
            <div class="row g-0 titif">
                <div class="col-lg-5 p-0">
                    <img src="{{asset('image/register.jpg')}}" class="img-fluid h-100 " alt="">
                </div>

                <div class="col-lg-7 text-center py-5">
                    <h1 class="animate__animated animate__heartBeat animate__infinite">welcome :)</h1>

                    <form class="d-flex flex-column">
                        <div class="form-row py-3 pt-5">
                            <div class="offset-1 col-lg-10">
                                <input type="email" class="inp px-3" placeholder="entre your fullName">

                            </div>
                            
                        </div>
                        <div class="form-row py-3">
                            <div class="offset-1 col-lg-10">
                                <input type="email" class="inp px-3" placeholder="entre your email">

                            </div>
                        </div>

                        <div class="form-row py-3">
                            <div class="offset-1 col-lg-10">
                                <input type="password" class="inp px-3" placeholder="entre your password">

                            </div>
                        </div>

                        <div class="form-row py-3">
                            <div class="offset-1 col-lg-10">
                                <input type="password" class="inp px-3" placeholder="confirm your password">

                            </div>
                        </div>

                        <div class="form-row py-3">
                            <div class="offset-1 col-lg-10">
                                <button  class="btn1">sign in</button>

                            </div>
                        </div>

                        <div>
                            <label class="form-check-label">
                                <input type="checkbox"> I Agree To The Terms & conditions 
                            </label>
                         </div>

                        </div>
                        
                    </form>
                </div>
            
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>