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
      @foreach($notices as $notice)
      <div class="col-sm-4"><br>
         <h5 class="heading-ff">Notice Board</h5><br>
         <p>
            {{$notice->issue_date}}, 2021 Issued By: <span style="color:red">{{$notice->issued_by}}</span> <br><br>
            <b><span style="color:blue; font-weight:bold">{{$notice->title}}</span>
            </b> <br>{{$notice->body}}
            <br>
            पुनश्च: थप जानकारीको लागि कलेजमा सम्पर्क राख्नुहुन समेत अनुरोध गरिन्छ।
            <br><br>
            <b>Please Updated!</b> 
         </p>
      </div>
      <hr>
@endforeach

     <!--  <div class="col-sm-4">
         <img src="{{ asset('asset/front_asset/images/news2.jpg') }}" class="img-fluid f-mmg">
         <h5 class="heading-ff">Admission Open</h5>
         <p>
            FEBURARY 8, 2021 BY ADMIN /<br> NEWS, NEWS AND EVENTS<br>
            <b>भर्ना सम्बन्धी सूचना ।।।
            </b> Our School पोखरा -३०  , खुदीमा नयाँ बर्ष लागि कक्षा १ देखी ९ सम्म को  भर्ना खुलेको जानकारी गराइन्छ।<br><br>
            <b>Click here</b> 
         </p>
      </div> -->


     <!--  <div class="col-sm-4">
         <img src="{{ asset('asset/front_asset/images/news3.jpg') }}" class="img-fluid f-mmg">
         <h5 class="heading-ff">अत्यन्त जरूरी सूचना</h5>
         <p>
            APRIL 28, 2021 BY ADMIN /<br> NEWS, NEWS AND EVENTS<br>
            <b>TO WIN THE FIGHT AGAINST #COVID19
            </b> नोबेल कोरोना भाइरस (COVID-19) बाट नेपालमा हुन सक्ने सम्भावित जोखिम तथा संक्रमण नियन्त्रण एवम् रोकथामका लागि नेपाल सरकारबाट देशैभर संघ, प्रदेश र स्थानीय तहका सार्वजनिक, सामुदायिक तथा निजी सेवा प्रदायक संस्थाहरूबाट प्रदान गरिने नेपाल राजपत्रमा प्रकाशन गरिए अनुसारका अत्यावश्यक सेवा बाहेकका अन्य सबै सेवाहरु बन्द गर्ने निर्णय गरेको साथै जोखिम तथा संक्रमण नियन्त्रण एवम् रोकथामका लागि विशेष सचेतना अपनाई पूर्व तयारी एवं सतर्कता अवलम्बन गर्न आवश्यक रहेकोले नेपाल सरकारबाट यस सम्बन्धमा गरिएका सबै निर्णय एवं सूचनाहरू कार्यान्वयन गर्न गराउन नेपाल सरकारले Lockdown को मिति थपेसंगै हाम्रो कार्यतालिका समेत प्रभावित भएको व्यहोरा अनुरोध छ ।
            <br><br>
            <b></b> Be safe, Stay home</b> <br>
            1. Maintain social distancing.<br>
            2. Wash your hands frequently (regularly and thoroughly clean your hands with soap and water).<br>
            3. Avoid touching eyes, nose and mouth.<br>
            4. Drink hot water/milk frequently.<br>
            5.Do regularly exercise to increase your immunity power.<br>
            6.If you have fever, cough and difficulty breathing, seek medical care early.<br>
            7.Stay informed and follow advice given by your healthcare provider. <br><br>
            <b>Click here</b> 
         </p>
      </div> -->
      <!-- footer -->
      <!-- footer -->
</div>
 </div>
 <div style="">
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