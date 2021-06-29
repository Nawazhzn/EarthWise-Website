<?php 
include("path.php");
include(ROOT_PATH . "/app/database/db.php");
if(isset($_GET['page'])){
  $page=$_GET['page'];

}else{
  $page=1;
}
$post_per_page=5;
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
            <a class="nav-link text-white" href="news.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="article.php">Article</a>
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
function getPostThumb($conn,$id){
  $query="SELECT * FROM images WHERE post_id=$id";
  $run=mysqli_query($conn,$query);
  $data = mysqli_fetch_assoc($run);
  return $data['image'];
}

?>


<?php
$postQuery="SELECT * FROM posts ORDER BY id DESC LIMIT $result,$post_per_page";
$runPQ=mysqli_query($conn,$postQuery);
while($post=mysqli_fetch_assoc($runPQ)){
  ?>
   <div class="container m-auto mt-3 row">
        <div class="col-8">
  <div class="card mb-3" style="max-width: 800px">
  <a href="post.php?id=<?=$post['id']?>" style="text-decoration: none;color:black">
            <div class="row g-0">
            

                
              <div class="col-md-5" style="background-image: url('img/Article/<?=getPostThumb($conn,$post['id'])?>');background-size: cover">
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
          
        </div>
        </div>
        </div>
        
        </div>

      
  <?php
  
  
}


?>

    





<?php
$q="SELECT * FROM posts";
$r=mysqli_query($conn,$q);
$total_posts=mysqli_num_rows($r);
$total_pages=ceil($total_posts/$post_per_page);
?>



<nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
        <?php
if($page>1){
  $switch="";
}else{
  $switch="disabled";
}
if($page<$total_pages){
  $nswitch="";
}else{
  $nswitch="disabled";
}
        ?>
        
          <li class="page-item <?=$switch?>">
            <a class="page-link" href="?page=<?=$page-1?>" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <?php
for($opage=1;$opage<=$total_pages;$opage++){
            ?>
            <li class="page-item"><a class="page-link" href="?page=<?=$opage?>"><?=$opage?></a></li>
            <?php
          }
          ?>
          
          
          <li class="page-item <?=$nswitch?>">
            <a class="page-link" href="?page=<?=$page+1?>">Next</a>
          </li>
        </ul>
      </nav>

 
  
  






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