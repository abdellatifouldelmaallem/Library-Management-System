@extends("layout.master")

@section("contenu")



<section class="contact">

    <div class="container-fluid ">
        <div class="row py-3">
            <div class="col-md-6 col-lg-12">
                <h2 class="text-center mb-5 shadow-sm p-3">Update a Book</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 shadow rounded p-3">
                <form action="{{route('updateBook',$books['id'])}}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <input type="hidden" name="id" value="{{$books['id']}}" class="form-control py-4" placeholder="enter th name">

                    <div class="col md-3 ">
                        <label class="form-label">Name of the book :</label>
                        <input type="text" name="name" value="{{$books['name']}}" class="form-control py-4" placeholder="enter th name">
                    </div>
                    <div class="col md-3">
                        <label class="form-label"> price :</label>
                        <input type="text" name="price" value="{{$books['price']}}" class="form-control py-4" placeholder="enter price with coin">
                    </div>
                </div>
                
                <div class="md-3 py-2">
                    <label class="form-label"> imge :</label>
                    <input type="file" name="image" value="{{$books['image']}}" class="form-control py-4">
                </div>
                <div class="md-3 py-2">
                    <label class="form-label">Descriptin :</label>
                   <textarea name="description"  class="form-control" placeholder="write some description about book" rows="2">{{$books['description']}}</textarea>
                </div>
                <div class="md-3 py-2">
                    <label for="cars">Choose an auther:</label>
                    <select id="cars" name="auther">
                        <option value=""></option>  
                    @foreach ($authers as $auther )
                    <option {{ $auther->id == $books->auther_id ? 'selected' : '' }} value="{{$auther->id}}">{{ $auther->fullName}}</option>  
                        @endforeach
                    </select>
                </div>
                <div class="md-3 py-2">
                    <label for="cars">Choose an category:</label>
                    <select id="cars" name="category">
                        <option value=""></option> 
                    @foreach ( $categories as $category)
                    <option {{ $category->id == $books->category_id ? 'selected' : '' }} value="{{$category->id}}">{{ $category->name}}</option>  
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <a href="{{route('dashboard')}}" class="btn btn-danger">Cancel</a>
            </form>
              <div class="pt-2">
              </div>
            </div>
           <!-- part of image-->
            <div class="col-lg-6 ">
                <div class="ml-1 ">
                    <img src="{{asset('image/upddateBook.jpg')}}" alt="image" style=" object-fit: cover;" class="hight img-fulid w-100">
                </div>
            </div> 

        </div>
    </div>

   </section>





@endsection