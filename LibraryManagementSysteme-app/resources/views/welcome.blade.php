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

          <div class="d-flex align-items-center body">
            <div class="calendar ml-4 p-4">
              <h3 class="text-center Augest">Augest</h3>
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
                <div class="number active">17</div>
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
            <div></div>
          </div>


    {{-- <svg class="agenda" width="800" height="600"  preserveAspectRatio="xMinYMin meet" >
      <svg>
        <rect x="10" y="10" height="377" width="640" style="fill: #41BD8B;" />
        <rect x="30" y="70" rx="5" ry="5" height="33" width="600" style="fill: #ffffff" />
        <text id="month_name" x="300" y="50" fill="##000000" style="font-size:22px; font-family: Arial; font-weight:bold;"></text>
        <rect x="45" y="159" rx="5" ry="5" height="33" width="40" style="fill: #ffffff" />
        <svg x="10" y="70">
          <g>
            <text x="35" y="24" style="fill: #000000; font-size:20px; font-family: Arial; font-weight:bold;">MON</text>
            <text x="126" y="24" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">TUE</text>
            <text x="216" y="24" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">WED</text>
            <text x="304" y="24" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">THU</text>
            <text x="396" y="24" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">FRI</text>
            <text x="473" y="24" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">SAT</text>
            <text x="560" y="24" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">SUN</text>
          </g>
        </svg>
        <svg x="10" y="120">
          <g>
            <text x="49" y="24" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;"></text>
            <text x="141" y="24" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;"></text>
            <text x="230" y="24" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">1</text>
            <text x="317" y="24" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">2</text>
            <text x="405" y="24" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">3</text>
            <text x="482" y="24" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">4</text>
            <text x="577" y="24" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">5</text>
          </g>
          <g>
            <text x="50" y="63" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">6</text>
            <text x="141" y="63" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">7</text>
            <text x="229" y="63" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">8</text>
            <text x="315" y="63" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">9</text>
            <text x="398" y="63" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">10</text>
            <text x="477" y="63" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">11</text>
            <text x="570" y="63" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">12</text>
          </g>
          <g>
            <text x="43" y="104" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">13</text>
            <text x="134" y="104" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">14</text>
            <text x="221" y="104" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">15</text>
            <text x="309" y="104" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">16</text>
            <text x="399" y="104" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">17</text>
            <text x="477" y="104" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">18</text>
            <text x="571" y="104" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">19</text>
          </g>
          <g>
            <text x="43" y="145" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">20</text>
            <text x="134" y="145" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">21</text>
            <text x="221" y="145" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">22</text>
            <text x="309" y="145" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">23</text>
            <text x="399" y="145" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">24</text>
            <text x="477" y="145" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">25</text>
            <text x="571" y="145" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">26</text>
          </g>
          <g>
            <text x="43" y="186" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">27</text>
            <text x="134" y="186" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">28</text>
            <text x="221" y="186" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">29</text>
            <text x="309" y="186" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">30</text>
            <text x="399" y="186" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;">31</text>
            <text x="475" y="186" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;"></text>
            <text x="570" y="186" style="fill: ##000000; font-size:20px; font-family: Arial; font-weight:bold;"></text>
          </g>
        </svg>
      </svg>
    
    </svg> --}}
 

  {{-- <div class="">
    <p class="inputAgenda">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque repudiandae deserunt ea est, rem illo, id similique porro voluptatem veniam fugiat adipisci quis rerum error saepe sapiente vitae quaerat. Illum!</p>
  </div> --}}
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
