@extends("layout.master")

@section("contenu")



<div class="d-flex" id="wrapper">


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <h2 class="fs-2 m-0">All Articles</h2>
            </div>

        </nav>

        <div class="container-fluid px-4">
           <div class="row ">
             
            
           </div>

            <div class="row my-5">
                
                <div class="col">

                    <div class="col d-flex justify-content-end rounded shadow-sm bg-light my-3 py-2 ">
                        <a href="{{route('adminDash')}}" class="btn btn-success">back</a>
                    </div>

                    <div class="table-responsive  bg-white rounded shadow-sm ">
                
                        <table class="table text-center  ">

                            <tr >
                                <th scope="col" width="50" >#</th>
                                <th scope="col">title</th>
                                <th scope="col" >content</th>
                                <th scope="col">image</th>
                                <th scope="col">date</th>
                                <th scope="col">reader</th>
                                <th scope="col">action</th>
                            </tr>
                        </table>
                      </div>
                      
                      <div class="table-responsive-sm bg-white rounded shadow-sm text-center">
                        <table class="table">
                           @foreach ( $articles as $article )    
                           <tr>
                               <th>{{ $article->id }}</th>
                               <td>{{ $article->title }}</td>
                               <td>{{ $article->content }}</td>
                               <td>{{ $article->image }}</td>
                               <td>{{ $article->date }}</td>
                               <td>{{ $article->user->name }}</td>
                               <td>
                                   <a href="" class="btn btn-danger">Delete</a>
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