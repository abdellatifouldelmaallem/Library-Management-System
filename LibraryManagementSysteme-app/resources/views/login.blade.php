@extends("layout.master")

@section("contenu")

  
<section class="login py-5 bg-success">
    <div class="container">
        <div class="row g-0 titif">
            <div class="col-lg-5 p-0">
                <img src="{{asset('image/login.jpg')}}" class="img-fluid h-100 " alt="">
            </div>

            <div class="col-lg-7 text-center py-5">
                <h1 class="animate__animated animate__heartBeat animate__infinite">welcome back</h1>

                <form class="d-flex flex-column" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="form-row py-3 pt-5">
                        <div class="offset-1 col-lg-10">
                            <input type="email" name="email" class="inp px-3" placeholder="entre your email" value="">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        
                    </div>
                    <div class="form-row py-3">
                        <div class="offset-1 col-lg-10">
                            <input type="password" name="password" class="inp px-3" placeholder="entre your password" value="">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                    </div>

                    <div class="form-row py-3">
                        <div class="offset-1 col-lg-10">
                            <button  class="btn1">submit</button>
                        </div>
                    </div>

                    <p> <a href="#" style="color:#000000;">Don't have an account ? sign up</a></p>
                    <p> <span><i class="fab fa-facebook"></i></span>
                    <span><i class="fab fa-google-plus"></i></span></p>

                    </div>  
                </form>
            </div>
        </div>
    </div>
</section>
    
@endsection