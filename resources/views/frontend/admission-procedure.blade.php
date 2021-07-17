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
                <div class="col-sm-12">
                  <h3 class="heading-about">ADMISSION PROCEDURE</h3>
                  <p class="text-mission-vision">
                 
                    The Schools offer a high quality educational experience and nurturing environment that fosters sharp learning skills. We are proud of the caliber of our staff and the work that they do; we are even prouder of the students with whom we work day by day.
                    <br><br>
                    At The  School we have strived to make our admission process as simple as possible to ensure that all prospective parents enjoy a stress free application experience.
                    <br><br>
                   <b> Step 1: Admission Enquiry:</b>
                    <br><br>
                    Submit the online Enquiry Form from this link or visit the school admissions office. Our counsellor will get back to you to answer your questions and collect the required information.
                    <br><br>
                   <b> Step 2: Registration</b>
                    <br><br>
                    The parents are requested to visit the school Admission Office, fill out the registration form and purchase the school prospectus. Kindly carry one latest Passport size photo of the child and the parent along with self-attested Date of Birth certificate. Alternatively Parents may also download the application form online by clicking here (give the link). Once the form is filled, please take a printout of the same, fill in the details and submit the hard copy of the completed form to the school.
                    <br><br>
                    <b>Step 3: School Visit & Interaction with the Principal</b>
                    <br><br>
                    Parents / Guardians are invited to visit the school campus to understand the culture and ethos of the Institution. A meeting can be scheduled with the Principal, so parents can have an interaction with the Head of the school, ask questions and collect any information they require. This can be done by fixing a prior appointment with the FOE through mail at info.gurgaon@themillenniumschools.com or telephone 0124 – 6542223, +91 99716 41212
                    <br><br>
                   <b> Step 4: Form submission</b>
                    <br><br>
                    The parent needs to fill up the admission form and ensure all documents are in order. Kindly intimate the school in case your child requires some special assistance due to any health reasons
                    The following documents need to be submitted along with the Registration Form
                    <br>
                    Copy of the Birth Certificate<br>
                    Copy of Report Card of previous year (only needed for admission to class 1 onwards)<br>
                    List of documents required at the time of admission:<br>
                    <br>
                    Evidence of having graduated from the previous class.<br>
                    4 photographs student<br>
                    2 parents photographs<br>
                    Original TC from the previous school (for students seeking admission from class 2 onwards)<br>
                    Proof of residence<br>
                    Original Certificates may be produced at the time of admission for verification<br>
                    Photocopies of all achievement certificates in the field of Academics, Sports, Extra Curricular activities.<br>
                    Photocopy of Passport if available. This is mandatory for overseas students.<br>
                    The Admission documentation booklet must also be completed and duly signed by both Parents. It contains information which will assist you in your relationship with the School.<br>
                    Acceptance of Admission:
                    <br>
                    Students are admitted on First Come, First Served basis depending on vacancies
                    We conduct no formal interviews with the child or the parent.<br>
                    Selected candidates will be required to make the fee payment within 7 days of the declaration of the result.<br>
                    The school reserves the right to admissions. In all matters pertaining to admission, the decision of the Admission Committee will be final.<br>
                    Once the Fee and documents are submitted, you will receive an Admission Confirmation Letter through courier or E-mail, from the school. This will inform you about further formalities, to be completed, if any.<br>
                    <br>
                    Parents will be intimated of the date and time of uniform & textbook issue
                    <br>
                    Your ward will be allotted the section on the day of admission. The time table for your ward will be handed over to your ward by the Class Teacher.
                    <br>
                    Kindly inform the School of your joining date. This is mandatory because Staff need to be informed to expect your child on a particular day and they in turn need to make preparations accordingly.
                    <br>
                    Teachers will assist your child with the syllabi which has been covered in the class till date.
                    <br><br>
                   <b> Step 5: Payment of Fees</b>
                    <br><br>
                    Once the above steps are satisfactorily completed parents will receive an admission offer and may pay the applicable fees to confirm admission.
                    <br>
                    Step 6 : Parent Orientation Program:
                    <br>
                    There will be a parent orientation program before the beginning of the new academic session. This program will acquaint the parents with the Vision, Mission & Ethos of the school.
                  </p>. </div>
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