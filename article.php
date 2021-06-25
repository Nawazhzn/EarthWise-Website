<?php 
include("path.php");
include(ROOT_PATH . "/app/database/db.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Earth Wise</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="article.css">
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
            <a class="nav-link text-white" href="<?php echo BASE_URL . '/index.php' ?>">Home</a>
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
  <br><br><br> <br> <br>
  
<!--* Content Section -->
<?php
$postQuery="SELECT * FROM posts";
$runPQ=mysqli_query($conn,$postQuery);
while($post=mysqli_fetch_assoc($runPQ)){
  ?>
  <div class="card mb-3" style="max-width: 800px;">
  <a href="post.php?id=<?=$post['id']?>" style="text-decoration: none;color:black">
            <div class="row g-0">
              <div class="col-md-5" style="background-image: url('img/Article/tree.jpg');background-size: cover">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <h5 class="card-title"><?=$post['title']?></h5>
                  <p class="card-text text-truncate"><?=$post['content']?></p>
                  <p class="card-text"><small class="text-muted">Posted On <?=date('F jS,Y' ,strtotime($post['created_at'])) ?></small></p>
                </div>
              </div>
            </div>
</a>
          </div>
  <!-- <div class="wrapper-art">
  <header class="header"><h1><?=$post['title']?></h1></header>
  <figure class="featured-art-image-1">
      <img src="img/Article/turtle.jpg" alt="">
   </figure> 
   <article class="article article-1">
    <h2><?=$post['title']?></h2>
    <p>In 1985 Aldus Corporation launched its first desktop publishing program Aldus PageMaker for Apple Macintosh computers.</p>
  </article>
  <figure class="featured-art-image-2">
      <img src="img/Article/forest.jpg" alt="">
   </figure>
  
  <article class="article article-2">
    <h2>Variants</h2>
    <p>Released in 1987 for PCs running Windows 1.0.</p>
  </article>
  <figure class="featured-art-image-3">
      <img src="img/Article/polar-bear.jpg" alt="">
   </figure>
 
  <article class="article article-3">
    <h2>When not to use it</h2>
    <p>The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods, the paint you may slap on your face to impress the new boss is your business. But what about your daily bread?</p>
  </article>
  <figure class="featured-art-image-4">
      <img src="img/Article/garbag.jpg" alt="">
   </figure>
 
  <article class="article article-4">
    <h2>So Lorem Ipsum is bad</h2>
    <p>One of the villagers, Kristina Halvorson from Adaptive Path, holds steadfastly to the notion that design can’t be tested without real content.</p>
  </article>
   </div> -->

  <?php
}
?>

 
  
  






  <!--* Footer Section -->
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




</body>
</html>