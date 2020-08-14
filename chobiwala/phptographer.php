<?php 
/** @defgroup Photographers_profile Photographers_profile
    Photographers profile.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            phptographer.php
 *
 * \author          copyright 2020 <br>
 *                  Farzana Jahan <br>
 *
 * \date            First Step: 15-03-2020 <br>
 *
 * \b CHANGE \b HISTORY: <br>
 *
 *   <b>- Farzana Jahan. / 15-03-2020</b>   
 *           - design about.
 *
 *   <b>- Farzana Jahan. / 18-03-2020</b>   
 *           - documentation.

 ***************************************************************************
 ***************************************************************************/

/**@} */ // Close 
/* EOF */
  ob_start();
  require_once("config.php");
?>
<?php 
  if ($_SESSION["authen"] || $_SESSION["admin"]){ //if user or admin is login
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

  <!-- start home div -->
  <div class="container">
  	<?php 
  	$connect = mysqli_connect("localhost","root","", "chobiwala"); /*!< connection variable for database.*/
    

  	$query = "SELECT * FROM Photographer where name = '" . $_GET['pg'] . "' "; /*!< get photographer by name.*/


          $result = mysqli_query($connect, $query);  
          if(mysqli_num_rows($result) > 0)  
          {  
               while($row = mysqli_fetch_array($result))  
               {  
          ?> 
          
<!-- start profile div -->
  <div class="profile-card">
    <div class="image-container">
      <img src="image/<?php echo $row["image"]; ?>" style="width:100%">
      <div class="title">
        <h2 class="pname" style="padding: 15px; background: #f1f1f1"><?php echo $row["name"]; ?></h2>
      </div>
    </div>
    <div class="main-container" style="background: #f1f1f1";>

      <p><i class="fa fa-camera info"></i><?php echo $row["type"]; ?> Photographer</p>
      <p><i class="fa fa-home info"></i><?php echo $row["address"]; ?></p>
      <p><i class="fa fa-envelope info"></i><?php echo $row["email"]; ?></p>
      <p><i class="fa fa-phone info"></i><?php echo $row["phone"]; ?></p>
      <hr>         <!-- tag defines a thematic break, horizontal rule -->

  </div>
  <hr>

   <?php  
        }  
      }  
    ?>
  <!-- end profile div -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>
</html>