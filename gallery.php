<?php
    include("path.php");
    include(ROOT_PATH . "/app/database/db.php");

    if (isset($_POST['delImage'])) {
        $id = $conn->real_escape_string($_POST['id']);
        $conn->query("DELETE FROM photos WHERE id='$id'");
        exit('success');
    }

    if (isset($_POST['getImages'])) {
        $start = $conn->real_escape_string($_POST['start']);
        $sql = $conn->query("SELECT id, path FROM photos ORDER BY id DESC LIMIT $start, 8");
        $response = array();
        while ($data = $sql->fetch_assoc())
            $response[] = array("path" => $data['path'], "id" => $data['id']);

        exit(json_encode(array("images" => $response)));
    }

    if (isset($_FILES['attachments'])) {
        $msg = "";
        $targetFile = time() . basename($_FILES['attachments']['name'][0]);

        if (file_exists($targetFile))
            $msg = array("status" => 0, "msg" => "File already exists!");
        else if (move_uploaded_file($_FILES['attachments']['tmp_name'][0], "uploads/" . $targetFile)) {
            $msg = array("status" => 1, "msg" => "File Has Been Uploaded", "path" => "uploads/" . $targetFile);

            $conn->query("INSERT INTO photos (path, uploadedOn) VALUES ('$targetFile', NOW())");
        }

        exit(json_encode($msg));
    }

    $sql = $conn->query("SELECT id FROM photos");
    $numRows = $sql->num_rows;
?>
<html>
	<head>
		<title>Image Gallery</title>
		<link rel="icon" type="image/png" href="img/favicon.png" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="stylesheet" href="php gallery/gallery.css">
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
  <!--* Navbar  -->



		<div class="container">
            <div class="row">
                <div class="col-md-12" align="center">
                <img src="images/logo.png"><br><br>
                <div id="dropZone">
                    <h1>Drag & Drop Files...</h1>
                    <input type="file" id="fileupload" name="attachments[]" multiple>
                </div>
                <h1 id="error"></h1><br><br>
                <h1 id="progress"></h1><br><br>
                <div id="files"></div>
                </div>
            </div>
		</div>
        <div class="container" id="uploadedFiles">
            <div class="row">
                <!-- <div class="col-md-3 myImg"></div> -->
            </div>
            
        </div>

        <br><br>
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
  <!--* Footer Section -->

		<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
		<script src="js/jquery.iframe-transport.js" type="text/javascript"></script>
		<script src="js/jquery.fileupload.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                getImages(0, <?php echo $numRows ?>);
            });

            function getImages(start, max) {
                if (start > max)
                    return;

                $.ajax({
                    url: 'gallery.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        getImages: 1,
                        start: start
                    }, success: function (response) {
                        for (var i=0; i < response.images.length; i++)
                            addImage("uploads/" + response.images[i].path, response.images[i].id);

                        getImages((start+8), max);
                    }
                });
            }

            function delImg(id) {
                if (id === 0)
                    alert('You are not able to delete this image now!');
                else if (confirm('Are you sure that you want to delete this image?')) {
                    $.ajax({
                        url: 'gallery.php',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            delImage: 1,
                            id: id
                        }, success: function (response) {
                            $("#img_"+id).remove();
                        }
                    });
                }
            }

            $(function () {
               var files = $("#files");

               $("#fileupload").fileupload({
                   url: 'gallery.php',
                   dropZone: '#dropZone',
                   dataType: 'json',
                   autoUpload: false
               }).on('fileuploadadd', function (e, data) {
                   var fileTypeAllowed = /.\.(gif|jpg|png|jpeg)$/i;
                   var fileName = data.originalFiles[0]['name'];
                   var fileSize = data.originalFiles[0]['size'];

                   if (!fileTypeAllowed.test(fileName))
                        $("#error").html('Only images are allowed!');
                   else if (fileSize > 500000)
                       $("#error").html('Your file is too big! Max allowed size is: 500KB');
                   else {
                       $("#error").html("");
                       data.submit();
                   }
               }).on('fileuploaddone', function(e, data) {
                    var status = data.jqXHR.responseJSON.status;
                    var msg = data.jqXHR.responseJSON.msg;

                    if (status == 1) {
                        var path = data.jqXHR.responseJSON.path;
                        addImage(path, 0);
                    } else
                        $("#error").html(msg);
               }).on('fileuploadprogressall', function(e,data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $("#progress").html("Completed: " + progress + "%");
               });
            });

            function addImage(path, id) {
                if ($("#uploadedFiles").find('.row:last').find('.myImg').length === 4)
                    $("#uploadedFiles").append('<div class="row"></div>');


                $("#uploadedFiles").find('.row:last').append('<div id="img_'+id+'" class="col-md-3 myImg" onclick="delImg('+id+')"><img src="'+path+'" /></div>');
            }
        </script>
	</body>
</html>