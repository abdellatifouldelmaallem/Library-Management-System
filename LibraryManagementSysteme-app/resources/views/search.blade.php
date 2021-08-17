@extends("layout.master")

@section("contenu")


<h1 class="text-center py-5">the book which you're searching for is here</h1>

<div class="container">
    @if (isset($search_book))

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">image</th>
            <th scope="col">library</th>
            <th scope="col">price</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
    
            @foreach ($search_book as $search_books )
      
          <tr>
            <th scope="row">{{$search_books->id}}</th>
            <td>{{$search_books->name}}</td>
            <td>{{$search_books->image}}</td>
            <td>{{$search_books->users->name}}</td>
            <td>{{$search_books->price}}</td>
          </tr>
          @endforeach
          @else
                
          <tr class="text-center"><th>NO Result found</th></tr>

          @endif
        </tbody>
    </table>
</div>





@endsection