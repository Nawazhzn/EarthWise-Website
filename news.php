<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Earth Wise</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="icon" type="image/png" href="img/favicon.png" />
</head>

<body>
  <!--* Navbar  -->
  <nav class="navbar fixed-top navbar-expand-md navbar-dark p-md-3" style="background-color: #212529;" >
    <div class="container-fluid"  >
      <a class="navbar-brand" href="#"></a>
      <img src="img/earth-wise-logo.png" alt="logo" class="nav-logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="#">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white aa" href="#">Explore</a>
          </li>
          <!-- <div class="nav-divider"></div>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Sign Up</a>
          </li>
          <div class="nav-divider"></div>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Login</a>
          </li> -->
          <div class="nav-divider"></div>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">
              <i class="fa fa-user" style="font-size: 1rem;"></i>
            Chanaka
            <i class="fa fa-chevron-down" style="font-size: .8rem;"></i>
           </a>
            <ul class="dropdown">
             <li>
              <a class="nav-linkblack text-black" href="#" >Dashboard</a>
             </li>
             <li>
              <a class="nav-linkred text-red" href="#">Logout</a>
             </li>
                
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<br><br><br><br><br><br><br><br><br>

  
<div class="page-wrapper">

   <div class="post-slider">
    <h1 class="slider-title">Trending News</h1>

    <div class="post-wrapper">
     <div class="post">1</div>
     <div class="post">2</div>
     <div class="post">3</div>
     <div class="post">4</div>
     <div class="post">5</div>
    </div>

   </div>

</div>
  

 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/153f93256e.js" crossorigin="anonymous"></script>
  <script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow');
      } else {
        nav.classList.remove('bg-dark', 'shadow');
      }
    });
  </script>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>





</body>
</html>