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
                   <h3 class="heading-about">WELCOME</h3>
                   <p class="text-mission-vision">A very warm welcome to each and every one of you. Distinguished principal, respected staff and teachers, and my dear fellow students welcome back to (insert name of the school here).

                    At last, this beautiful day has arrived. 
                    I am sure you all have been eagerly waiting for this day. 
                    The fact that not all of us love coming to school is not surprising. 
                    Catching up with your friends and/or meeting your favorite teacher are just a couple of reasons, we can not avoid coming back to school.
                    
                    Anyways, before going any further, I am delighted to thank the presence of the personality that hardly needs any introduction. 
                    It is none other than Mr. Sanjok Gurung the director and principal of our school . 
                    Besides, I am also honored to be thanking the hard work, patience, and perseverance of our dear teachers without whom we would not have been here..</p>
                </div>
                <div class="col-sm-4">
                  <h3 class="heading-about">MISSION OF SCHOOL</h3>
                  <p class="text-mission-vision">
                    The New School prepares students to understand, contribute to, and succeed in a rapidly changing society, thus making the world a better and more just place.
                     We will ensure that our students develop both the skills that a sound education provides and the competencies essential for success and leadership in the emerging creative economy. 
                    We will also lead in generating practical and theoretical knowledge that enables people to better understand our world and improve conditions for local and global communities.
                    We are and will be a university where design and social research drive approaches to studying issues of our time, such as democracy, urbanization, technological change, economic empowerment, sustainability, migration, and globalization. 
                    We will be the preeminent intellectual and creative center for effective engagement in a world that increasingly demands better-designed objects, communication, systems, and organizations to meet social needs.</p>
                </div>
                 <div class="col-sm-4">
              <h3 class="heading-about">VISION OF THE SCHOOL</h3>
              <p class="text-mission-vision">
        
                Our vision aligns with shifts in the global economy, society, and environment, which animates our mission and our values:
                <br><br>
                1.Creativity, innovation, and a desire to challenge the status quo will affect what and how we teach and the intellectual ambitions of the university itself.
                <br><br>
                2.Social engagement should orient students' academic experiences to help them become critically engaged citizens, dedicated to solving problems and contributing to the public good.
                <br><br>
                3.The New School must embrace these principles and innovate to address shifts in the global economy, society, and environment that require individuals to grapple with complex problems, pursue more fluid and flexible career pathways, and collaboratively create change.<br></p>
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