@extends("layout.master")

@section("contenu")

    <section class="login py-5 bg-success">
        <div class="container">
            <div class="row g-0 titif">
                <div class="col-lg-5 p-0">
                    <img src="{{asset('image/register.jpg')}}" class="img-fluid h-100 " alt="">
                </div>

                <div class="col-lg-7 text-center py-5">
                    <h1 class="animate__animated animate__heartBeat animate__infinite">welcome :)</h1>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form class="d-flex flex-column" method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="form-row py-3 pt-5">
                            <div class="offset-1 col-lg-10">
                                <input type="text" name="name" class="inp px-3" placeholder="entre your fullName">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                            
                        </div>
                        <div class="form-row py-3">
                            <div class="offset-1 col-lg-10">
                                <input type="email" name="email" class="inp px-3" placeholder="entre your email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                        </div>
                        <div class="form-row py-3">
                            <div class="offset-1 col-lg-10">
                                <input type="text" name="adress" class="inp px-3" placeholder="entre your adress">
                                @error('adress')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                        </div>

                        <div class="form-row py-3">
                            <div class="offset-1 col-lg-10">
                                <input type="password" name="password" class="inp px-3" placeholder="entre your password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                        </div>

                        <div class="form-row py-3">
                            <div class="offset-1 col-lg-10">
                                <input type="password" name="password_confirmation" class="inp px-3" placeholder="confirm your password">
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                        </div>
                        <div class="row  py-3 d-flex justify-content-center">
                            <div class="form-check ">
                                <input class="form-check-input  " type="radio" name="type" id="flexRadioDefault1" value="librarian">
                                <label class="form-check-label mx-2 " for="flexRadioDefault1">
                                  librarian
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="reader" checked>
                                <label class="form-check-label mx-2" for="flexRadioDefault2">
                                 reader
                                </label>
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

    
    @endsection