@extends("layout.master")

@section("contenu")



<div class="d-flex" id="wrapper">


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <h2 class="fs-2 m-0">Dashboard</h2>
            </div>

            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}

          
        </nav>

        <div class="container-fluid px-4">
           <div class="row ">
             
            
           </div>

            <div class="row my-5">
                
                <div class="col">

                    <div class="col d-flex justify-content-end rounded shadow-sm bg-light my-3 py-2 ">
                        <a href="{{ route('dashboard')}}" class="btn btn-success">back</a>
                        <a href="{{ route('AddBook')}}" class="btn btn-primary mx-2 ">Add book</a>
                        
                    </div>

                    {{-- <table class="table bg-white rounded shadow-sm  table-hover">
                       
                    </table> --}}


                    <div class="table-responsive  bg-white rounded shadow-sm ">
                        <table class="table ">
                            <tr >
                                <th scope="col" width="50">#</th>
                                <th scope="col">name</th>
                                <th scope="col">image</th>
                                <th scope="col">description</th>
                                <th scope="col">Price</th>
                                <th scope="col">auther_id</th>
                                <th scope="col">category_id</th>
                                <th scope="col">action</th>
                            </tr>
                        </table>
                      </div>
                      
                      <div class="table-responsive-sm bg-white rounded shadow-sm text-center">
                        <table class="table">
                            @foreach ( $books as $book )
                            <tr>
                                <th >{{ $book->id }}</th>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->image }}</td>
                                <td>{{ $book->description }}</td>
                                <td>{{ $book->price }}</td>
                                <td>{{ $book->auther->fullName }}</td>
                                <td>{{ $book->category->name }}</td>
                                <td>
                                    <a href="" class="btn btn-danger">Delete</a>
                                    <a href="{{ route('EditBook')}}" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                      </div>
                      
                    
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->
</div>



@endsection