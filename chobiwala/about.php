<?php require_once("config.php"); 
/** @defgroup about about
    About our developer.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            about.php
 *
 * \author          copyright 2020 <br>
 *                  Md. Sajid Ahmed <br>
 *
 * \date            First Step: 15-03-2020 <br>
 *
 * \b CHANGE \b HISTORY: <br>
 *
 *   <b>- Md. Sajid Ahmed. / 15-03-2020</b>   
 *           - design about.
 *
 *   <b>- Md. Sajid Ahmed. / 18-03-2020</b>   
 *           - documentation.

 ***************************************************************************
 ***************************************************************************/

/**@} */ // Close 
/* EOF */
?>
<?php 
  if ($_SESSION["authen"] || $_SESSION["admin"]){
    include("sidebar.php");
  } 
  else {
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

<body>

<!-- Navbar Starts -->
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
    <a class="navbar-brand" href="index.php">Chobiwala</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link nav-color" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-color" href="gallery.php">Gallery</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-color" href="package.php">Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-color" href="photographers.php">Photographers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-color" href="about.php">About</a>
        </li>
        <li class="nav-item">
                <?php 
                  if ($_SESSION["authen"] || $_SESSION["admin"] ){
                 ?>   
                    <a  class="nav-link" href="#">Welcome, <?php echo $_SESSION["username"]; ?>! </a>
                <?php 
                }
                else { ?>
                  <a  class="nav-link" href="register.php">Login</a>
                <?php } ?>

              </li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0" method="POST" action="search.php">
        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
   </div>
  </nav>

  <!--Navbar Ends -->



    <!-- about section start -->

  <div class="team-section">
    <h1 style="color: white; background: #28a745;">Our Team</h1>
    <h4>We,the team of "CHOBIWALA" are here for providing you the best photographers and ensure more secure hiring process with proper photo rights.</h4>
    <span class="border"></span>

    <div class="ps">
      <a href="#p1"><img src="image/profile/sajid.jpg"></a>
      <a href="#p2"><img src="image/profile/farzana.jpg"></a> 
      <a href="#p3"><img src="image/profile/badrul.jpg"></a>
      <a href="#p4"><img src="image/profile/rahat.jpg"></a>  
    </div>

    <div class="section" id="p1">
    <span class="name">Md Sajid Ahmed</span>
    <span class="border"></span>
    <p>I love to program and have done so for 8,000 hours over the past three years. I’m great at knowing the right algorithm for a problem because I read computer science literature constantly. Algorithms problems are to me like sudoku is to my grandmother. I love working with people to do things bigger than I could accomplish alone. I’m motivated by big problems, and I think you’ve got some here that I can help solve.</p>
    <div class="social_media">
      <ul>
        <li><a href="https://www.facebook.com/profile.php?id=100005153475039"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
        <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
        <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
      </ul>
    </div>
  </div>

  <div class="section" id="p2">
    <span class="name">Farzana Jahan</span>
    <span class="border"></span>
    <p>I love to program and have done so for 8,000 hours over the past three years. I’m great at knowing the right algorithm for a problem because I read computer science literature constantly. Algorithms problems are to me like sudoku is to my grandmother. I love working with people to do things bigger than I could accomplish alone. I’m motivated by big problems, and I think you’ve got some here that I can help solve.</p>
    <div class="social_media">
      <ul>
        <li><a href="https://www.facebook.com/fj.falguny"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
        <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
        <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
      </ul>
    </div>
  </div>

  <div class="section" id="p3">
    <span class="name">Badrul Haider Arafat</span>
    <span class="border"></span>
    <p>I love to program & algorthm.I’m motivated by big problems, and I think you’ve got some here that I can help solve.</p>
    <div class="social_media">
      <ul>
        <li><a href="https://www.facebook.com/rprani"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
        <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
        <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
      </ul>
    </div>
  </div>
  
  </div>
  <div class="section" id="p4">
    <span class="name">Rahat Islam Akash</span>
    <span class="border"></span>
    <p>I love to program & algorthm.I’m motivated by big problems, and I think you’ve got some here that I can help solve.</p>
    <div class="social_media">
      <ul>
        <li><a href="https://www.facebook.com/rahat.i.akash"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
        <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
        <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
      </ul>
    </div>
  </div>
  
  </div>

  <!-- Footer -->
  <div class="footer">
    <p5>© All rights reserved by Chobiwala</p5>
  </div>
  <!-- Footer End-->

  <!-- about section end -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

