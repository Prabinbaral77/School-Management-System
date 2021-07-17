<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Home:Our School</title>
<!-- css file  -->
<link href="{{ asset('asset/front_asset/css/bootstrap.min.css') }}" rel="stylesheet" >
   <!-- external css -->
   <link href="{{ asset('asset/front_asset/css/style.css') }}" rel="stylesheet" type="text/css">
   <!-- font awesome css -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" type="text/css">
   <script src="{{ asset('asset/front_asset/js/jquery-3.6.0.min.js') }}"></script>

    </head>
    <body>
        <div class="container-fluid bg-info">
            <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-fluid logo" src="{{ asset('asset/front_asset/images/logo.png.jpg') }}"alt="logo image">
                </div>
                <div class="col-sm-6">
                    <h1 class="logo-head">{{$name}}</h1>
                </div>
                <div class="col-sm-2">
                 <div class="ico-icon">
                 <a href="https://www.facebook.com"><i class="fab fa-facebook fa-2x"></i></a>
                 <a href="https://www.twitter.com"><i class="fab fa-twitter fa-2x"></i></a> 
                 <a href="https://www.instagram.com"><i class="fab fa-instagram fa-2x"></i></a> 
                  </div>
                </div>
            </div>
        </div>

        </div>
        <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-theme">
          <a href="index.html" class="navbar-brand">
            
            <img class="img-fluid brand-logo" src="{{ asset('asset/front_asset/images/logo.png.jpg') }}"alt="logo image">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-light"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{route('welcome_index')}}">Home</a>
              </li>              
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('front.about')}}">About Us</a>
          <a class="dropdown-item" href="{{route('front.mission')}}">Mission & Vision</a>
          <a class="dropdown-item" href="{{route('front.principleMessage')}}">Principle Message</a>
        </div>
      </li>
                   
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Academics
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{route('front.admissionProcedure')}}">Admission Procedure</a>
          <a class="dropdown-item" href="{{route('front.facilities')}}">Facilities</a>
          <a class="dropdown-item" href="{{route('front.teams')}}">Our Team</a>
        </div>
      </li>       
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gallery
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{route('front.photos')}}">Photos</a>
        </div>
      </li>
      
              <li class="nav-item">
                <a class="nav-link" href="{{route('front.contactUs')}}">Contact Us</a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('front.newsEvent')}}">News & Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
              </li>
            </ul>
          </div>
        </nav>
       
        <div class="container">
          <div class="row">
                <div class="col-sm-4">
                  <a href="#"><img src="{{ asset('asset/front_asset/images/f1.jpg') }}" class="img-fluid f-mmg">
                  </a>
       </div>
       <div class="col-sm-4">
        <a href="#"><img src="{{ asset('asset/front_asset/images/admissionopen.jpg') }}" class="img-fluid f-mmg">
        </a>
</div>
<div class="col-sm-4">
  <a href="#"><img src="{{ asset('asset/front_asset/images/team3.jpg') }}" class="img-fluid f-mmg">
  </a>
</div>
<div class="col-sm-4">
  <a href="#"><img src="{{ asset('asset/front_asset/images/f2.jpg') }}" class="img-fluid f-mmg">
  </a>
</div>
<div class="col-sm-4">
  <a href="#"><img src="{{ asset('asset/front_asset/images/principle.jpg') }}" class="img-fluid f-mmg">
  </a>
</div>
<div class="col-sm-4">
  <a href="#"><img src="{{ asset('asset/front_asset/images/team1.jpg') }}" class="img-fluid f-mmg">
  </a>
</div>



          </div>
        </div>
<!-- footer -->
<div class="container-fluid footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-5">
             <span>Designed by Our School</span>
          </div>
          <div class="col-sm-5">
            <span>@2020. All Rights Reserved.</span>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <span>About Us</span>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <span>Admission Procedure</span>
        </div>
        <div class="col-sm-4">
          <span>Photos</span>
        </div>
        <div class="col-sm-4">
          <span>Contact Us</span>
        </div>
        
      </div>
    </div>
  </div>
</div>


 <!--     js file  -->
        <script src="{{ asset('asset/front_asset/js/bootstrap.min.js') }}"></script>
        <script>
          window.onscroll= function(){myfunction()};
         var narbar = document.getElementById("navbar");
         var sticky = navbar.offsetTop;
         
         function myfunction(){
           if(window.pageYOffset >= sticky){
             navbar.classList.add("sticky");
           }
           else{
            navbar.classList.remove("sticky");
           }
         }
  
  
     </script>
    </body>
</html>