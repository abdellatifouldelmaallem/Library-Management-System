@extends("layout.master")

@section("contenu")



<section class="contact">

    <div class="container-fluid ">
        <div class="row py-3">
            <div class="col-md-6 col-lg-12">
                <h2 class="text-center mb-5 shadow-sm p-3">Add a Book </h2>
            </div>
        </div>
@if ($errors->any()) <div class="alert alert-danger"> 
    <ul> @foreach ($errors->all() as $error) 
        <li>{{ $error }}</li>
         @endforeach </ul> 
        </div> @endif
        <div class="row">
            <div class="col-lg-6 shadow rounded p-3">

                <form action="{{route('NewBook')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col md-3 ">
                        <label class="form-label">Name of the book :</label>
                        <input type="text" name="name" class="form-control py-4" placeholder="enter th name">
                        @error('name')
                        <span>{{$message}}</span>
                            
                        @enderror
                    </div>
                    <div class="col md-3">
                        <label class="form-label"> price :</label>
                        <input type="text" name="price" class="form-control py-4" placeholder="enter price with coin">
                        @error('price')
                        <span>{{$message}}</span>
                            
                        @enderror
                    </div>
                </div>
                
                <div class="md-3 py-2">
                    <label class="form-label"> imge :</label>
                    <input type="file" name="image" class="form-control py-4">
                    @error('image')
                    <span>{{$message}}</span>
                        
                    @enderror
                </div>
                <div class="md-3 py-2">
                    <label class="form-label">Descriptin :</label>
                   <textarea name="description" class="form-control" placeholder="write some description about book" rows="2"></textarea>
                   @error('description')
                   <span>{{$message}}</span>
                       
                   @enderror
                </div>
                <div class="md-3 py-2">
                    <label for="cars">Choose an auther:</label>
                    <select id="cars" name="auther">
                        <option value=""></option> 
                    @foreach ($authers as $auther )
                        <option value="{{ $auther->id}}" >{{ $auther->fullName}}</option>  
                        @endforeach
                        @error('auther')
                   <span>{{$message}}</span>
                       
                   @enderror
                    </select>
                </div>
                <div class="md-3 py-2">
                    <label for="cars">Choose an category:</label>
                    <select id="cars" name="category">
                        <option value=""></option> 
                    @foreach ( $categories as $category)
                        <option value="{{ $category->id}}" >{{$category->name}}</option> 
                        @endforeach
                        @error('category')
                        <span>{{$message}}</span>
                            
                        @enderror
                    </select>
                </div>

                <div class="md-3 py-2">
                    <label for="cars">name of your library:</label>
                    <select id="cars" name="library">
                        <option value=""></option> 
                    @foreach (  as)
                        <option value="" ></option> 
                        @endforeach
                        @error('library')
                        <span>{{$message}}</span>
                            
                        @enderror
                    </select>
                        
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <a href="{{route('books')}}" class="btn btn-danger">Cancel</a>
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