<?php 
require_once("config.php"); 
/** @defgroup gallery gallery
    Gallery: Photos of all catagories.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            gallery.php
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
<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/gallery.css">

  <title>Chobiwala</title>

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
                  if ($_SESSION["authen"] || $_SESSION["admin"]){
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

  <!-- conceptual Photography -->

  <h1>Conceptual Photography</h1><br />

  <div class="container">

      <?php 
      /** @def Conceptual photography
      */

      $connect = mysqli_connect("localhost","root","","chobiwala");

      $query = "SELECT * FROM conceptualphoto ORDER BY id ASC";
      $result = mysqli_query($connect,$query);
      if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){

      ?>
      <div class="gallery">
        
          <a href="gallerydetails.php?id=<?php echo $row["id"]; ?>"><img src="image/<?php echo $row["image"]; ?>";   /><br /></a> 
        
      </div>

      <?php
        }
      }

       ?>
  </div>


  <!-- Babies Photography -->

  <h1>Babies Photography</h1><br />

  <div class="container">

      <?php 
      /** @def babies photography
      */ 

      $connect = mysqli_connect("localhost","root","","chobiwala");

      $query = "SELECT * FROM babiesphoto ORDER BY id ASC";
      $result = mysqli_query($connect,$query);
      if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){

      ?>
      <div class="gallery">
        
          <a href="gallerydetails.php?id=<?php echo $row["id"]; ?>"><img src="image/<?php echo $row["image"]; ?>";   /><br /></a> 
        
      </div>

      <?php
        }
      }

       ?>
  </div>

  <!-- Modeling Photography -->

  <h1>Modeling Photography</h1><br />

  <div class="container">

      <?php 
      /** @def wedding photography
      */

      $connect = mysqli_connect("localhost","root","","chobiwala");

      $query = "SELECT * FROM modelingphoto ORDER BY id ASC";
      $result = mysqli_query($connect,$query);
      if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){

      ?>
      <div class="gallery">
        
          <a href="gallerydetails.php?id=<?php echo $row["id"]; ?>"><img src="image/<?php echo $row["image"]; ?>";   /><br /></a> 
        
      </div>

      <?php
        }
      }
       ?>
  </div>


  <!-- Footer -->
  <div class="footer">
    <p5>© All rights reserved by Chobiwala</p5>
  </div>
  <!-- Footer End-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>