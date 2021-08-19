<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- owl carousel min.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel them.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}" />
    <title>Library Mangement system</title>

</head>

<body>
    <div class="">
      <!-- navbar and header start here-->
        <header class="mb-auto  ">
          <div class="d-flex justify-content-between  ">
            <img src="{{asset('image/logo.png')}}" class="ml-3" style="height: 60px;" alt="logo">
            <nav class="nav nav-masthead justify-content-end float-md-end my-2 px-3">
              <a class="nav-link active test " aria-current="page" href="#">Home</a>
              <a class="nav-link test" href="{{ route('about')}}">About us</a>
              <a class="nav-link test" href="{{ route('contact')}}">Contact us</a>
              <a class="nav-link test" href="{{ route('login')}}">Account</a>
              <a class="nav-link test" href="{{ route('register')}}">Sign up</a>
              <form action="{{route('search')}}" method="GET">
                <input class="form-control " name="query" type="text" placeholder="Search" aria-label="Search">
              </form>
            </nav>
          </div>
        </header>
           
        <div class=" d-flex align-items-center  text-center bg-image shadow">
        <div class="  border border-white  w-50 h-75 rounded ml-4  ">
          <h2 class="dark p-3">“I have a passion for teaching kids to become readers, to become comfortable with a book, not daunted. Books shouldn’t be daunting, they should be funny, exciting and wonderful; and learning to be a reader gives a terrific advantage.” - Roald Dahl</h2>
        </div>
        </div> 
         <!-- navbar and header end here-->

         <!-- Agenda start here-->
          <div class=" d-flex align-items-center body">
            <div class="calendar ml-4 p-4">
              <div class="d-flex justify-content-around">
                <i class="fas fa-chevron-left flich"></i>
                <h3 class=" Augest">Augest</h3>
                <i class="fas fa-chevron-right flich"></i>
              </div>
              <div class="date p-4">
                <div class="day">mon</div>
                <div class="day">tue</div>
                <div class="day">wed</div>
                <div class="day">thu</div>
                <div class="day">fri</div>
                <div class="day">sat</div>
                <div class="day">sun</div>
                <div class="number">1</div>
                <div class="number">2</div>
                <div class="number">3</div>
                <div class="number">4</div>
                <div class="number">5</div>
                <div class="number">6</div>
                <div class="number">7</div>
                <div class="number">8</div>
                <div class="number">9</div>
                <div class="number">10</div>
                <div class="number">11</div>
                <div class="number">12</div>
                <div class="number">13</div>
                <div class="number">14</div>
                <div class="number">15</div>
                <div class="number">16</div>
                <div class="number day17">17</div>
                <div class="number">18</div>
                <div class="number">19</div>
                <div class="number">20</div>
                <div class="number">21</div>
                <div class="number">22</div>
                <div class="number">23</div>
                <div class="number">24</div>
                <div class="number">25</div>
                <div class="number">26</div>
                <div class="number">27</div>
                <div class="number">28</div>
                <div class="number">29</div>
                <div class="number">30</div>
                <div class="number">31</div>
              </div>
            </div>
            
            <div class=" ml-5 parentEvents ">
             <div class=" border bg-light shadow  rounded p-4 childEvent ">
               <span>All Day | Aug 17 | All Libraries</span>
               <h3>Byram Shubert Library Closed</h3>
             </div>
             <div class=" border bg-light shadow rounded mt-4 p-4 childEvent">
               <span>10:00 am | Aug 17 | Baxter Courtyard</span>
               <h3>Summer Storytime in the Courtyard at Greenwich Library</h3>
             </div>
             <div class="mt-4 " >
               <a href="" class="border shadow rounded event  p-3"> View All Today's Events
                 <i class="fas fa-arrow-right p-2 pt-1"></i></a>
             </div>
            </div>
          </div>
          <!-- Agenda end here-->

          <!-- cards for BOOK start here-->
        <section class="container-fluid my-4 books">
          <h1 class="text-center fw-bold  my-4">Top Books NowDays</h1>
          <div class="row mt-5">
            <div class="owl-carousel owl-theme">

              <div class="item mb-4">
                <div class="card border-0 shadow">
                  <img src="{{asset('image/show3.jpg')}}" class="card-img-top" alt="">
                  <div class="card-body">
                    <h3>Black is for Hate</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis nisi praesentium.</p>
                   <div class="d-flex  justify-content-between">
                    <span class="buy fw-bold ">23$</span>
                    <span><a href="">Buy now</a></span>
                   </div>
                  </div>
                </div>
              </div>
             <!--item ends-->
              <div class="item mb-4">
                <div class="card border-0 shadow">
                  <img src="{{asset('image/show4.jpg')}}" class="card-img-top" alt="">
                  <div class="card-body">
                    <h3>Larry McMurtry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis nisi praesentium.</p>
                   <div class="d-flex  justify-content-between">
                    <span class="buy fw-bold ">23$</span>
                    <span><a href="" >Buy now</a></span>
                   </div>
                  </div>
                </div>
              </div>
             <!--item ends-->
              <div class="item mb-4">
                <div class="card border-0 shadow">
                  <img src="{{asset('image/show3.jpg')}}" class="card-img-top" alt="">
                  <div class="card-body">
                    <h3>Black is for Hate</h3>
                    <p class="fw-bolder">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis nisi praesentium.</p>
                   <div class="d-flex  justify-content-between">
                    <span class="buy fw-bold ">23$</span>
                    <span><a href="">buy now</a></span>
                   </div>
                  </div>
                </div>
              </div>
             <!--item ends-->
              <div class="item mb-4">
                <div class="card border-0 shadow">
                  <img src="{{asset('image/show2.jpg')}}" class="card-img-top" alt="">
                  <div class="card-body">
                    <h3>THE WICKED + THE DIVINE</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis nisi praesentium.</p>
                   <div class="d-flex  justify-content-between">
                    <span class="buy fw-bold ">23$</span>
                    <span><a href="">Buy now</a></span>
                   </div>
                  </div>
                </div>
              </div>
             <!--item ends-->
              <div class="item mb-4">
                <div class="card border-0 shadow">
                  <img src="{{asset('image/show1.jpg')}}" class="card-img-top" alt="">
                  <div class="card-body">
                    <h3>RICH DADA POOR DADA</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis nisi praesentium.</p>
                   <div class="d-flex  justify-content-between">
                    <span class="buy fw-bold ">23$</span>
                    <span ><a href="">Buy now</a></span>
                   </div>
                  </div>
                </div>
              </div>
             <!--item ends-->
          </div>
          </div>
        </section>
          <!-- cards  for BOOK end here-->

          <!-- cards for article start here-->
          <div class="cards shadow">
            <h1 class="text-center titileOfReader mb-4">What Are Reader Said ?</h1>
            <div class="card_post  shadow">
              <div class="card_img">
                <img src="{{asset('image/attitude.jpg')}}" class="w-100" alt="">
              </div>
              <div class="card_info">
                <div class="card_date">
                  <span> sunday  October   23   2021</span>
                  <span class="nameReader">HAMZA RADANI</span>
                </div>
                <h1 class="card_title">"Attitude"</h1>
                <p class="card_text"> I am of course overjoyed to be here today in the role of ceremonial object. There is more than the usual amount of satisfaction in receiving an honorary degree from the university that helped to form one’s erstwhile callow and ignorant mind into the thing of dubious splendor that it is today</p>
              </div>
            </div>

            <div class="card_post  shadow my-4">
              <div class="card_img">
                <img src="{{asset('image/go out.jpg')}}" class="w-100" alt="">
              </div>
              <div class="card_info">
                <div class="card_date">
                  <span> sunday  October   09   2021</span>
                  <span class="nameReader">MERYEM ZITI</span>
                </div>
                <h1 class="card_title">Why Go Out?</h1>
                <p class="card_text">I wonder why I am up here on this stage when I’d rather be at home, when being at home would be so much more comforting. And I wonder why all of you are sitting there in the audience, when so many of you would also be happier at home.</p>
              </div>
            </div>

            <div class="card_post  shadow">
              <div class="card_img">
                <img src="{{asset('image/happy.jpeg')}}" class="w-100" alt="">
              </div>
              <div class="card_info">
                <div class="card_date">
                  <span> sunday  October   03   2021</span>
                  <span class="nameReader">Yassin zraqe</span>
                </div>
                <h1 class="card_title">WHAT MAKES US HAPPY?</h1>
                <p class="card_text">For 72 years, researchers at Harvard have been examining this question, following 268 men who entered college in the late 1930s through war, career, marriage and divorce, parenthood and grandparenthood, and old age. Here, for the first time, a journalist gains access to the archive of one of the most comprehensive longitudinal studies in history. Its contents</p>
              </div>
            </div>

          </div>
        <!-- cards for article end here-->

  </div>

        <!-- footer start here-->
        <footer class="bg-dark text-white pt-5 pb-4">
          <div class="container text-center text-md-left">

            <div class="row text-center text-md-left">

              <div class=" col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                {{-- <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> abdellatif</h5> --}}
                <img src="{{asset('image/logo2Footer.png')}}" class="ml-3" style="height: 80px;" alt="logo">
                <p>  quaerat voluptatum maxime velit culpa? Vero aperiam harum autem est rem sunt eveniet eos qui perspiciatis minima.</p>
                </div>

              <div class=" col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> abdellatif</h5>
              <p>
                <a href="#" class="text-white " style="text-decoration:none;">ouldelmaalle</a>
              </p>
              <p>
                <a href="#" class="text-white " style="text-decoration:none;">ouldelmaalle</a>
              </p>
              <p>
                <a href="#" class="text-white " style="text-decoration:none;">ouldelmaalle</a>
              </p>
              <p>
                <a href="#" class="text-white " style="text-decoration:none;">ouldelmaalle</a>
              </p>
                </div>

                <div class=" col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> abdellatif</h5>
                <p>
                  <a href="#" class="text-white " style="text-decoration:none;">ouldelmaalle</a>
                </p>
                <p>
                  <a href="#" class="text-white " style="text-decoration:none;">ouldelmaalle</a>
                </p>
                <p>
                  <a href="#" class="text-white " style="text-decoration:none;">ouldelmaalle</a>
                </p>
                <p>
                  <a href="#" class="text-white " style="text-decoration:none;">ouldelmaalle</a>
                </p>
                  </div>

                  <div class=" col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" >
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">contac us</h5>
                    <p>
                      <i class="fab fa-facebook-square"></i>   Facebook
                    </p>
                    <p>
                      <i class="fab fa-linkedin"></i>   Linkdin
                    </p>
                    <p>
                      <i class="fab fa-twitter-square"></i>   Twitter
                    </p>
                    <p>
                      <i class="fab fa-instagram"></i>   Instagram
                    </p>
                  </div>
              </div>

              <hr class="mb-4">
              <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                   <p>copyright @2021
                     <strong class="text-warnig"> ABDELLATIF OULDELMAALLEM</strong>
                </p>
              </div>
            </div>
            </div>
        </footer>

     


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    
    <!-- include cdn files  -->
    
    
    <!--jquery cdn   -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Owl carousel Min.js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
    </script>
  </body>

</html>
