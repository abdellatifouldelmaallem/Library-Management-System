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
                <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col md-3 ">
                        <label class="form-label">Name of the book :</label>
                        <input type="text" name="name" class="form-control py-4" placeholder="enter th name">
                    </div>
                    <div class="col md-3">
                        <label class="form-label"> price :</label>
                        <input type="text" name="price" class="form-control py-4" placeholder="enter price with coin">
                    </div>
                </div>
                
                <div class="md-3 py-2">
                    <label class="form-label"> imge :</label>
                    <input type="file" name="image" class="form-control py-4">
                </div>
                <div class="md-3 py-2">
                    <label class="form-label">Descriptin :</label>
                   <textarea name="description" class="form-control" placeholder="write some description about book" rows="2"></textarea>
                </div>
                <div class="md-3 py-2">
                    <label for="cars">Choose an auther:</label>
                    <select id="cars" name="cars">
                        <option value="volvo">Volvo XC90</option>
                        <option value="saab">Saab 95</option>
                        <option value="mercedes">Mercedes SLK</option>
                        <option value="audi">Audi TT</option>
                      </select>
                </div>
                <div class="md-3 py-2">
                    <label for="cars">Choose an category:</label>
                    <select id="cars" name="cars">
                        <option value="volvo">Volvo XC90</option>
                        <option value="saab">Saab 95</option>
                        <option value="mercedes">Mercedes SLK</option>
                        <option value="audi">Audi TT</option>
                      </select>
                </div>
            </form>
              <div class="pt-2">
                  <a href="" class="btn btn-primary">submit</a>
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