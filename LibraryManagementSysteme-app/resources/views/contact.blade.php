<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    

   <section class="contact">

    <div class="container-fluid ">
        <div class="row py-3">
            <div class="col-md-6 col-lg-12">
                <h2 class="text-center mb-5 shadow-sm p-3">Contact Us</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 shadow rounded p-5">
                <div class="row">
                    <div class="col md-3 ">
                        <label class="form-label"> First Name :</label>
                        <input type="text" class="form-control py-4" placeholder="enter your first name">
                    </div>
                    <div class="col md-3">
                        <label class="form-label"> Last Name :</label>
                        <input type="text" class="form-control py-4" placeholder="enter your Last name">
                    </div>
                </div>
                
                <div class="md-3 py-2">
                    <label class="form-label"> Email :</label>
                    <input type="email" class="form-control py-4" placeholder="enter your Email ">
                </div>
                <div class="md-3 py-2">
                    <label class="form-label"> Subject :</label>
                    <input type="text" class="form-control py-4" placeholder="Subject ">
                </div>
                <div class="md-3 py-2">
                    <label class="form-label">Message :</label>
                   <textarea name="" class="form-control" placeholder="write your message" rows="5"></textarea>
                </div>

              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Send
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          are you sure 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

            </div>
           <!-- part of image-->
            <div class="col-lg-6 ">
                <div class="ml-1 ">
                    <img src="{{asset('image/contact.jpg')}}" alt="image" class="hight img-fulid w-100">
                </div>
            </div> 

        </div>
    </div>

   </section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>