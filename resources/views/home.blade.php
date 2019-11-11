<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>
      
  CS Unplugged

    </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    
        <link rel="stylesheet" href="https://storage.googleapis.com/cs-unplugged.appspot.com/static/css/website.css">
    
    
    
    <link rel="apple-touch-icon" sizes="180x180" href="https://storage.googleapis.com/cs-unplugged.appspot.com/static/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://storage.googleapis.com/cs-unplugged.appspot.com/static/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://storage.googleapis.com/cs-unplugged.appspot.com/static/img/favicon-16x16.png">
    <link rel="manifest" href="https://storage.googleapis.com/cs-unplugged.appspot.com/static/img/manifest.json">
    <link rel="mask-icon" href="https://storage.googleapis.com/cs-unplugged.appspot.com/static/img/safari-pinned-tab.svg" color="#ce2326">
    <link rel="shortcut icon" href="https://storage.googleapis.com/cs-unplugged.appspot.com/static/img/favicon.ico">
    <meta name="msapplication-config" content="https://storage.googleapis.com/cs-unplugged.appspot.com/static/img/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body style="text-align: left;" class="homepage">
    <nav class="navbar fixed-top navbar-expand-md navbar-dark py-1 d-print-none trans-navbar">
      <div class="container px-0">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mr-0" href="lms.nust.edu.pk">
          <img src="/logo.png" id="navbar-brand-logo" class="d-inline-block align-top" alt="CS Unplugged logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="navbar-nav navbar-nav-i18n mr-auto">

            <a class="nav-item nav-link" href="/">Home</a>
            @if (Auth::check()) 
              <a class="nav-item nav-link" href="/profile">Profile</a>
              <a class="nav-item nav-link" href="/logout">Logout</a>
            
            @else 
              <a class="nav-item nav-link" href="/login">Login</a>
              <a class="nav-item nav-link" href="/register">Sign Up</a>
            
            @endif
            
          </div>
          
          
        </div>
      </div>
    </nav>

    
    
    
    

    
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="text-center">
        CS Unplugged <br>Web Project
      </h1>
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
          <p class="lead text-center">
            Software Design Architecture - Assignment
          </p>
          <div id="welcome-alert" class="lead text-center">
            <p>
              <strong>
              Welcome to the new CS Unplugged Project!
              </strong>
            </p>
            <p>
              This is a web project based on the actual CS Unplugged website. The application is still in development and consists of 
              fully functioning login and registration System.
            </p>
            <p class="mb-0">
              The project is intended to be a complete CMS for teachers and students for CS Unplugged activities
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="homepage-cards" class="container">
    <div class="row justify-content-center text-center">
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <a class="link-item link-item-top link-item-top-blue no-text-decoration d-block h-100" href="/">
          <div class="img-container d-flex justify-content-center align-items-center">
            <img class="img-fluid" src="1.png">
          </div>
          <h2 class="mb-0">
            Home
          </h2>
        </a>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <a class="link-item link-item-top link-item-top-green no-text-decoration d-block h-100" href="">
          <div class="img-container d-flex justify-content-center align-items-center">
            <img class="img-fluid" src="2.png">
          </div>
          <h2 class="mb-0">
            (Coming Soon!)
          </h2>
        </a>
      </div>
      <div class="w-100"></div>
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        
        @if (Auth::check()) 
          <a class="link-item link-item-top link-item-top-teal no-text-decoration d-block h-100" href="/profile">
        
        @else 
          <a class="link-item link-item-top link-item-top-teal no-text-decoration d-block h-100" href="/login">
        
        @endif

          <div class="img-container d-flex justify-content-center align-items-center">
            <img class="img-fluid" src="3.png">
          </div>
          <h2 class="mb-0">

            @if (Auth::check()) 
              Profile
            
            @else 
              Login
            
            @endif

            
          </h2>
        </a>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-4">

        @if (Auth::check()) 
          <a class="link-item link-item-top link-item-top-teal no-text-decoration d-block h-100" href="/logout">
        
        @else 
          <a class="link-item link-item-top link-item-top-teal no-text-decoration d-block h-100" href="/register">
        
        @endif
        
          <div class="img-container d-flex justify-content-center align-items-center">
            <img class="img-fluid" src="4.png">
          </div>
          <h2 class="mb-0">
            
            @if (Auth::check()) 
              Logout
            
            @else 
              Register
            
            @endif

          </h2>
        </a>
      </div>
    </div>
  </div>


    <footer id="page-footer" class="d-print-none">

        <div class="container py-3">
          <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-6">
              <p>
                Software Development Assignment<br>
                CS-Unplugged Web Application<br>
                This application is currently undergoing development and is not complete
              </p>
            </div>

            <div class="col-6 col-md-2 ">
              <p class="mb-1 font-weight-bold text-center">-----------------------------</p>
              <ul class="list-unstyled list-unstyled-i18n">
                <li>
                  Muhammad Saad
                </li>
                <li>
                  Anas Imran
                </li>
                <li>
                  Ubaid Ullah
                </li>
              </ul>
            </div>
            <div class="col-6 col-md-2 text-center">
              <p class="mb-1 font-weight-bold text-center">Group</p>
              <ul class="list-unstyled list-unstyled-i18n">
                <li>
                  211190
                </li>
                <li>
                  211190
                </li>
                <li>
                  211190
                </li>
              </ul>
            </div>
            <div class="col-12 col-md-2 text-center">
              <p class="mb-1 font-weight-bold text-center">-----------------------------</p>
              <ul class="list-unstyled list-unstyled-i18n">
                  <li>
                    BESE 8A
                  </li>
                
                <li>
                  BESE 8A
                </li>
                <li>
                  BESE 8A
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="container py-3 footer-statement text-center">
          <p class="mb-0">
            <small>
              
                SDA Assignment  
              
            </small>
          </p>
        </div>

        <div class="container py-3 footer-statement text-center">
          
          <p class="mb-0">
            <small>WowWhataProject©</small>
          </p>
        </div>
      </footer>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script>
      glossary_url = "/en/topics/glossary/json/";
    </script>
    <script src="https://storage.googleapis.com/cs-unplugged.appspot.com/static/js/jquery-3.1.1.min.js"></script>
    <script src="https://storage.googleapis.com/cs-unplugged.appspot.com/static/js/popper.min.js"></script>
    <script src="https://storage.googleapis.com/cs-unplugged.appspot.com/static/js/bootstrap.min.js"></script>
    <script src="https://storage.googleapis.com/cs-unplugged.appspot.com/static/js/website.js"></script>
    <script src="https://storage.googleapis.com/cs-unplugged.appspot.com/static/js/details-element-polyfill.js"></script>
    <script src="https://www.youtube.com/player_api"></script>
    <script type="text/javascript" async
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-MML-AM_CHTML">
    </script>
    
  <script src="https://storage.googleapis.com/cs-unplugged.appspot.com/static/js/homepage.js"></script>


    
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-101482996-1', 'auto');
        ga('send', 'pageview');
      </script>
    
  </body>
</html>
