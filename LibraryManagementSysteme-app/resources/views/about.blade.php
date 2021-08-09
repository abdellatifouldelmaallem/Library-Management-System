@extends("layout.master")

@section("contenu")

  
<div class="sectio">
    <div class="conttain">
        <div class="content-section">
            <div class="title">
                <h1>About Us</h1>
            </div>

            <div class="content">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui esse dolor doloribus assumenda ab praesentium eveniet perferendis, eos aliquam fugit molestias at accusantium eius deserunt nemo, ipsam incidunt distinctio error voluptas aspernatur, cupiditate debitis quidem! Totam voluptatem esse fugit quas qui. Voluptatem tempore perspiciatis quos vitae, explicabo expedita est animi.</p>
                <div class="button">
                    <a href="">Read More</a>
                </div>
            </div>

            <div class="sociel">
                <a href=""><i class="fab fa-facebook-f"></i></i></a>
                <a href=""><i class="fab fa-instagram insta"></i></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <div class="image-section">
            <img src="{{asset('image/about.jpg')}}" alt="">
        </div>
    </div>

</div>

    
    
@endsection