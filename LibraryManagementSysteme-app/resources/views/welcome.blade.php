<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Document</title>

</head>

<body>
    <div class="">
      <!-- navbar and header start here-->
        <header class="mb-auto ">
          <div class="d-flex justify-content-between ">
            <h3 class="float-md-start mt-0 my-2 ">Logo</h3>
            <nav class="nav nav-masthead justify-content-end float-md-end my-2 px-3">
              <a class="nav-link active test " aria-current="page" href="#">Home</a>
              <a class="nav-link test" href="#">About us</a>
              <a class="nav-link test" href="#">Contact us</a>
              <a class="nav-link test" href="#">Account</a>
              <a class="nav-link test" href="#">Sign up</a>
              <form>
                <input class="form-control " type="text" placeholder="Search" aria-label="Search">
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
            
            <div class=" ml-5 ">
             <div class=" border bg-light shadow  rounded p-4 ">
               <span>All Day | Aug 17 | All Libraries</span>
               <h3>Byram Shubert Library Closed</h3>
             </div>
             <div class=" border bg-light shadow rounded mt-4 p-4">
               <span>10:00 am | Aug 17 | Baxter Courtyard</span>
               <h3>Summer Storytime in the Courtyard at Greenwich Library</h3>
             </div>
             <div class="mt-4 " >
               <a href="" class="border shadow rounded events  p-3"> View All Today's Events
                 <i class="fas fa-arrow-right p-2 pt-1"></i></a>
             </div>
            </div>
          </div>
          <!-- Agenda end here-->

          <!-- cards start here-->
    

          <section class="cards shadow">
            {{-- <h1 class="text-center">What Are Reader Said ?</h1> --}}
            <div class="card_post bg-light shadow">
              <div class="card_img">
                <img src="{{asset('image/about.jpg')}}" class="w-100" alt="">
              </div>
              <div class="card_info">
                <div class="card_date">
                  <span> sunday  October   23   2021</span>
                  <span class="nameReader">Name of Reader</span>
                </div>
                <h1 class="card_title">why should we read ?</h1>
                <p class="card_text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci tempore mollitia vel dolor obcaecati reprehenderit ex deleniti cum facilis exercitationem illum consequatur harum quia quidem, doloribus omnis ipsum ut fuga!</p>
              </div>
            </div>

          </section>
        

          {{-- <hr class="featurette-divider"> --}}

          {{-- <div class="row featurette  border bg-light mx-4 rounded shadow">
            <div class="col-md-7">
              <div class="d-flex flex-column justify-content-between">
               <div> <h1 class="">ABDELLATIF OULDELMAALLEM</h1></div>
              <div>  <P class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, earum nihil porro corrupti rem voluptatum pariatur reiciendis totam vitae atque sed, animi consequuntur unde maiores labore est? Aliquid, quibusdam molestias?</P></div>
               <div> <h3 class="float-end">2020/02/02</h3></div>
              </div>
            
              {{-- <h2 class="featurette-heading">First featurette heading.
                 <span class="text-muted">It’ll blow your mind.</span>
                </h2>
              <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p> --}}
            {{-- </div>
            <div class="col-md-5">
              <img src="{{asset('image/addBook.jpg')}}" alt="image" style=" object-fit: cover;" class="hight img-fulid w-100">
            
            </div> --}}
          {{-- </div> --}} 
      
          {{-- <hr class="featurette-divider"> --}}
      
          {{-- <div class="row featurette border bg-light mx-4 rounded shadow">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
              <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img src="{{asset('image/addBook.jpg')}}" alt="image" style=" object-fit: cover;" class="hight img-fulid w-100">
      
            </div>
          </div>
      
          <hr class="featurette-divider">
      
          <div class="row featurette border bg-light mx-4 rounded shadow">
            <div class="col-md-7">
              <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
              <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
              <img src="{{asset('image/addBook.jpg')}}" alt="image" style=" object-fit: cover;" class="hight img-fulid w-100">
      
            </div>
          </div>
      
          <hr class="featurette-divider"> --}}
      

          <!-- cards end here-->
          

  
  </div>


        

        <!-- footer start here-->
        <footer class="bg-dark text-white pt-5 pb-4">
          <div class="container text-center text-md-left">

            <div class="row text-center text-md-left">

              <div class=" col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> abdellatif</h5>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet libero odit nostrum fugit, quaerat voluptatum maxime velit culpa? Vero aperiam harum autem est rem sunt eveniet eos qui perspiciatis minima.</p>
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
</body>

</html>
