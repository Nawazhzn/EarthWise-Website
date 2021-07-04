<?php 
include("path.php");
include(ROOT_PATH . "/app/database/db.php");
if(isset($_GET['page'])){
  $page=$_GET['page'];
}else{
  $page=1;
}
$post_per_page=6;
$result=($page-1)*$post_per_page;
//$result = 0
//$result = 5;
//$result = 10
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Earth Wise</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="news page/news.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <script src="https://climateclock.world/widget-v2.js" async></script>
  
</head>
<body>

<!--* Navbar  -->
<nav class="navbar fixed-top navbar-expand-md navbar-dark p-md-3" style="background-color: #212529;" >
    <div class="container-fluid"  >
      <a class="navbar-brand" href="index.php"></a>
      <img src="img/earth-wise-logo.png" alt="logo" class="nav-logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo BASE_URL . '/index.php' ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="news.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white" href="article.php">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white aa" href="#">Explore</a>
          </li>
          
          <div class="nav-divider"></div>
          <?php if (isset($_SESSION['id'])): ?>
        <li>
          <a class="nav-link text-white" href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
          </a>
          <ul >
            <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="nav-linkred text-red">Logout</a></li>
          </ul>
        </li>
      <?php else: ?>
        <li><a href="<?php echo BASE_URL . '/register.php' ?>" class="nav-link text-white" >Sign Up</a></li>
        <li><a href="<?php echo BASE_URL . '/login.php' ?>" class="nav-link text-white">Login</a></li>
      <?php endif; ?>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--* Navbar  -->
  <br><br><br><br><br>
  <br><br><br><br> 


  
  
   
</div>
<div><climate-clock /></div>
<h1 class="news-header">EarthWise Trending News</h1>

<!--Container-->
<div class="container">
    <!--Start code-->
    <div class="row">
        <div class="col-12 pb-5">
            <section class="row">
                <!--Start slider news-->
                <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                    <div id="featured" class="carousel slide carousel" data-ride="carousel">
                        <!--dots navigate-->
                        <ol class="carousel-indicators top-indicator">
                            <li data-target="#featured" data-slide-to="0" class="active"></li>
                            <li data-target="#featured" data-slide-to="1"></li>
                            <li data-target="#featured" data-slide-to="2"></li>
                            <li data-target="#featured" data-slide-to="3"></li>
                        </ol>
                        <!--carousel inner-->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="">
                                                <img class="img-fluid w-100 height:110"
                                                     src="img/news/protest.jpeg"
                                                     alt="protest">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="">
                                                <h2 class="h3 post-title text-white my-1">Protest march demanding urgent measures to combat climate change</h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">by <a class="text-white font-weight-bold" href="">Rupak De Chowdhuri</a></span>
                                                <span class="news-date">07/06/2019</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Item slider-->
                            <div class="carousel-item">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="https://www.bbc.com/news/science-environment-57169003">
                                                <img class="img-fluid w-100"
                                                     src="img/news/icemelt.jpg"
                                                     alt="Ice melting">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="https://www.bbc.com/news/science-environment-57169003">
                                                <h2 class="h3 post-title text-white my-1">Climate change: The Antarctic ice shelf in the line of fire</h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">by <a class="text-white font-weight-bold" href="">Jonathan Amos</a></span>
                                                <span class="news-date">May 19</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                          
                            <!--Item slider-->
                            <div class="carousel-item">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="https://www.channelnewsasia.com/news/asia/plastic-wasteland--asia-s-ocean-pollution-crisis-10381984">
                                                <img class="img-fluid w-100"
                                                     src="img/news/plasticwaste.jpg"
                                                     alt="plastic wasteland">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="https://www.channelnewsasia.com/news/asia/plastic-wasteland--asia-s-ocean-pollution-crisis-10381984">
                                                <h2 class="h3 post-title text-white my-1">Plastic wasteland: Asia's ocean pollution crisis</h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">by <a class="text-white font-weight-bold" href="">AFT</a></span>
                                                <span class="news-date">June 05, 2018</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                            <!--Item slider-->
                            <div class="carousel-item">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="">
                                                <img class="img-fluid w-100"
                                                     src="img/news/sea turle2.jpg"
                                                     alt="Sl sea turtle">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="https://www.newsfirst.lk/tag/sea-turtle/">
                                                <h2 class="h3 post-title text-white my-1">Dead sea turtles continue to wash up on SL shores</h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">by <a class="text-white font-weight-bold" href="">Sirasa News 1st</a></span>
                                                <span class="news-date">June 14, 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end item slider-->
                        </div>
                        <!--end carousel inner-->
                    </div>
                    
                    <!--navigation-->
                    <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--End slider news-->
                
                <!--Start box news-->
                <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                    <div class="row">
                        <!--news box-->
                        <div class="col-6 pb-1 pt-0 pr-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="https://www.bbc.com/news/world-latin-america-55130304">
                                            <img class="img-fluid"
                                                 src="img/news/deforest.jpg"
                                                 alt="deforest">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="">Brazil's Amazon:</a>

                                        <!--title-->
                                        <a href="https://www.bbc.com/news/world-latin-america-55130304">
                                            <h2 class="h5 text-white my-1 " style="size:10px;"> Deforestation 'surges to 12-year high'</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--news box-->
                        <div class="col-6 pb-1 pl-1 pt-0">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="https://www.mirror.co.uk/news/uk-news/polar-bear-clings-tight-iceberg-882963">
                                            <img class="img-fluid"
                                                 src="img/news/polar-bear-on-ice.jpg"
                                                 alt="polar-bear-on-ice">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="">Ice and dire</a>
                                        <!--title-->
                                        <a href="https://www.mirror.co.uk/news/uk-news/polar-bear-clings-tight-iceberg-882963">
                                            <h2 class="h5 text-white my-1"> Polar bear clings onto melting iceberg</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--news box-->
                        <div class="col-6 pb-1 pr-1 pt-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="https://www.aljazeera.com/news/2019/6/30/as-drought-hits-crops-india-pm-calls-for-water-conservation-push">
                                            <img class="img-fluid"
                                                 src="img/news/drought.jpeg"
                                                 alt="drought-hits-crops-india">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="https://www.aljazeera.com/news/2019/6/30/as-drought-hits-crops-india-pm-calls-for-water-conservation-push">Drought in India</a>
                                        <!--title-->
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <h2 class="h5 text-white my-1">Drought hits crops in India </h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--news box-->
                        <div class="col-6 pb-1 pl-1 pt-1">
                              <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="https://www.aljazeera.com/economy/2021/5/25/bbin-2020-more-people-displaced-by-extreme-climate-than-conflict">
                                            <img class="img-fluid"
                                                 src="img/news/371985078.webp"
                                                 alt="https://www.aljazeera.com/economy/2021/5/25/bbin-2020-more-people-displaced-by-extreme-climate-than-conflict">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="">Extreme-climate</a>
                                        <!--title-->
                                        <a href="">
                                            <h2 class="h6 text-white my-1">Climate displace more people than conflict</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end news box-->
                    </div>
                </div>
                <!--End box news-->
            </section>
            <!--END SECTION-->
        </div>
    </div>
    <!--end code-->

<!--Live news rss section-->

<!-- start feedwind code --> 
<div class="">
<script type="text/javascript" 
src="https://feed.mikle.com/js/fw-loader.js"
preloader-text="Loading" data-fw-param="147605/">
</script>
</div> 
<!-- end feedwind code -->




 <div class="container-fluid news-container">

 
    <div class='news-section'>
    
      <div class="container-fluid news-container">
      
        <div class="row my-4">
        
          <div class="col">
          
            <div class="container-fluid">
            
              <div class="row">
              
              <?php
$postQuery="SELECT * FROM news ORDER BY id DESC LIMIT $result,$post_per_page";
$runPQ=mysqli_query($conn,$postQuery);
while($post=mysqli_fetch_assoc($runPQ)){
  ?>
 
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xxlg">
    <div class="modal-content">
    <h2 class="title" style="text-align:center"><?=$post['title']?></h2>
    

    <p class="content" style="padding:10px;" style="margin: 10px;"><?=$post['content']?></p>
    <p class="date" style="text-align: right; padding-right:10px " ><?=date('F jS,Y' ,strtotime($post['created_at'])) ?></p>
    </div>
  </div>
</div>
                <div class="col-sm-12 col-md-12 col-lg-4 d-flex">
                
                  <div class="card news-card flex-fill">
                    
                    <div class="card-box text-truncate" style="height: 350px;">
                      <h2 class="title"><?=$post['title']?></h2>
                      <section class="content">
                        <p style="font-size:small" style="margin:20px" ><?=$post['content']?></p>
                        <p class="date"><?=date('F jS,Y' ,strtotime($post['created_at'])) ?></p>
                        <div class="row justify-content-end">
                          
                          
                          

                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin-top: 220px;">Read More</button>
                          





                        </div>
                      </section>
                    </div>
                  </div>
                </div>
                <?php
}
?>
              </div>
            </div>
          </div>
        </div>
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
  
  </div> 
</div>


<!--* Footer Section -->
<div>
<div class="footer-dark">
    <footer>
      <div class="container-fluid footer-container">
        <div class="row">
          <div class="col-sm-12 col-md-8 col-lg-3 footer-col-1">
            <img src="img/earth-wise-logo.png" />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.</p>
          </div>
          <div class="col-md-4 col-lg-6 footer-col-2">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">News</a></li>
              <li><a href="article.php">Article</a></li>
              <li><a href="#">Explore</a></li>
            </ul>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-3 footer-col-3">
            <h3>Subscribe to our Newsletter!</h3>
            <form>
              <div class="form-group">
                <input type="email" class="sub-email" placeholder="Enter Your Email"><br />
                <button type="submit" class="btn">Subscribe</button>
              </div>
            </form>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
          </div>
          <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i
                class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a
              href="#"><i class="icon ion-social-instagram"></i></a></div>
        </div>
      </div>
      <div class="container-fluid copyright-section">
        <div class="container-fluid copyright-content">
          <div class="row">
            <div class="col">
              <p>EarthWise © 2021. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>