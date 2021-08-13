@extends("layout.master")

@section("contenu")



<section class="contact">

    <div class="container-fluid ">
        <div class="row py-3">
            <div class="col-md-6 col-lg-12">
                <h2 class="text-center mb-5 shadow-sm p-3">Update an article </h2>
            </div>
        </div>
@if ($errors->any()) <div class="alert alert-danger"> 
    <ul> @foreach ($errors->all() as $error) 
        <li>{{ $error }}</li>
         @endforeach </ul> 
        </div> @endif
        <div class="row">
            <div class="col-lg-6 shadow rounded p-3">

                <form action="{{route('')}}" method="POST" enctype="multipart/form-data">
                @csrf
      
                <div class="md-3 py-2">
                    <label class="form-label">Title:</label>
                    <input type="text" name="title" class="form-control py-4" placeholder="write the title">
                    @error('title')
                    <span>{{$message}}</span>
                        
                    @enderror
                </div>

                <div class="md-3 py-2">
                    <label class="form-label">content:</label>
                   <textarea name="content" class="form-control" placeholder="you're free" rows="2"></textarea>
                   @error('content')
                   <span>{{$message}}</span>
                       
                   @enderror
                </div>
                
                <div class="md-3 py-2">
                    <label class="form-label"> imge :</label>
                    <input type="file" name="image" class="form-control py-4">
                    @error('image')
                    <span>{{$message}}</span>
                        
                    @enderror
                </div>

                <div class="md-3 py-2">
                    <label class="form-label"> date :</label>
                    <input type="text" name="date" class="form-control py-4">
                    @error('date')
                    <span>{{$message}}</span>
                        
                    @enderror
                </div>
              
                
                <button type="submit" class="btn btn-primary">Register</button>
                <a href="{{route('')}}" class="btn btn-danger">Cancel</a>
            </form>
              <div class="pt-2">
                  
              </div>
            </div>
           <!-- part of image-->
            <div class="col-lg-6 ">
                <div class="ml-1 ">
                    <img src="{{asset('image/addBook.jpg')}}" alt="image" style=" object-fit: cover;" class="hight img-fulid w-100">
                </div>
            </div> 

        </div>
    </div>

   </section>





@endsection