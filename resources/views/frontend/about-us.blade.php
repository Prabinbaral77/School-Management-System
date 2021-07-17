<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Home:Our School</title>
<!-- css file  -->
   <link href="{{ asset('asset/front_asset/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
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
    <div class="col-sm-8">
      <div class="row">
        <div class="col-sm-6">
           <h3 class="heading-about">ABOUT US</h3>
           <p>Our Schools are a national chain of CBSE affiliated co-educational schools, which use the world class 'The  Learning System' created by Education Quality Foundation of India. 
             Our thought and philosophy is based on deep rooted Nepali values and rich culture integrated with a global mindset.
              Our policies represent a vibrancy and sensitivity to the needs of all stake holders.
            We aspire to equip our students with skills that will help them excel in life and prepare for their greater role of shaping the Nepali tomorrow.  
            The Learning System is a distinctive pedagogy supported and directed by the Research and  Development  wing of Education Quality Foundation of Nepal along with a team of distinguished teaching professionals.
            From this mindscape, we endeavor to develop conscientious citizens.
             Citizens who are open-minded, innovative, creative, critical thinkers, self- disciplined yet energetic in thought and action.</p>
        </div>
        <div class="col-sm-6">
          <h3 class="heading-about">SCHOOL MOTO</h3>
          <p>
            
            The  School is committed to nurture the inherent potential and talent of each child, creating lifelong learners who will be the leaders of tomorrow.
             With parents as our partners, we aspire to create global citizens who are innovative and have a strong sense of values.          
             Values
            
            At the  School, we consider it vital to instill in students a strong set of core values. 
            This in turn will help shape their lives and the world around them. 
            Universal values and ethical codes of conduct are taught, to enable them to build their future and benefit society.
            The  School focuses on:
            
            Values of honesty, compassion, tolerance and respect for others.
            Development of democratic and secular values.
            Respect for our country's rich and varied heritage and a sense of national pride.
            Learning to contribute to humanity through cooperative efforts.</p>
        </div>
      </div>
    </div>
    <img class="img-fluid img-about-style" src="{{ asset('asset/front_asset/images/1-about.jpg') }}"></div>
    <div class="col-sm-4">
      <h3 class="heading-about">OUR AIMS & OBJECTIVES</h3>
      <p>

        1. The basic aim is that schools are the betterment of societies.
        <br><br>
        2. To provide efficient life of the school children and prepare them for the art of learning together.
        <br><br>
        3. To bring school and community close to each- other.
        <br><br>
        4. To prepare the students for some particular type of education which is in the interest and ability of the students?
        <br><br>
        5. To help die students to unfold their personality (mental development) inner part.
        <br><br>
        
        6. To enable the students to have the right type of psychology of life.
        <br><br>
        7. To conserve all the group practical values, heredity and culture of our society.
        <br><br>
        While it is certain that a bad workman blames his tools. It is certain that the best work can only be a accomplished with best tools. Its duty and association help to make scholars crowd of their connection with a school and they exercise plashing influence upon the neighbourhood. In a certain major it is a concrete for the idea for manifestations which the school stands. It is the permanent material expression cause spiritual things.</p>
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