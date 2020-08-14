<?php 
/** @defgroup search search
    search photos.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            search.php
 *
 * \author          copyright 2020 <br>
 *                  Md. Sajid Ahmed <br>
 *
 * \date            First Step: 15-03-2020 <br>
 *
 * \b CHANGE \b HISTORY: <br>
 *
 *   <b>- Md. Sajid Ahmed. / 25-03-2020</b>   
 *           - single photo checkout form validation.
 *
 *   <b>- Md. Sajid Ahmed. / 25-03-2020</b>   
 *           - documentation.

 ***************************************************************************
 ***************************************************************************/
/**@} */ // Close 

require_once("config.php"); 
?>
<?php 
  if ($_SESSION["authen"] || $_SESSION["authen"] ){
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
      <form class="form-inline my-2 my-lg-0"method="POST" action="search.php">
        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
   </div>
  </nav>

  <!--Navbar Ends -->

  

  <h1 style="margin-top: 150px;margin-bottom: 80px;text-align: center;">Search Results</h1>
    <div class="result" style="margin-left: 30%;margin-bottom: 50px;"> 
      
    <?php
    $query = $_POST['query']; /*!< collect data from search bar.*/
    $minLength = 3; /*!< minimum 3 input need to search.*/
    if(strlen($query) >= $minLength){ 
        $query = htmlspecialchars($query); 
        $connect = mysqli_connect("localhost","root","","chobiwala"); /*!< connection variable for database.*/
        $query = mysqli_real_escape_string($connect,$query);
        $sql = "SELECT name,id,image,price FROM babiesphoto
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $results = mysqli_query($connect,$sql);
        if(mysqli_num_rows($results) > 0){ 
            while($row = mysqli_fetch_array($results)){
             ?>
              <a href="gallerydetails.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
                <div class="list"><i class="fas fa-hand-point-right"></i><?php echo $row["name"]; ?></div>
              </a>
             <?php
            }
        }
        else{ // if there is no matching rows do following
           
        }
         
    }
    if(strlen($query) >= $minLength){ 
        $query = htmlspecialchars($query); 
        $connect = mysqli_connect("localhost","root","","chobiwala");
        $query = mysqli_real_escape_string($connect,$query);
        $sql = "SELECT name,id,image,price FROM latestphoto
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $results = mysqli_query($connect,$sql);
        if(mysqli_num_rows($results) > 0){ 
            while($row = mysqli_fetch_array($results)){
             ?>
              <a href="gallerydetails.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
                <div class="list"><i class="fas fa-hand-point-right"></i><?php echo $row["name"]; ?></div>
              </a>
             <?php
            }
        }
        else{ // if there is no matching rows do following
           
        }
         
    }
    if(strlen($query) >= $minLength){ 
        $query = htmlspecialchars($query); 
        $connect = mysqli_connect("localhost","root","","chobiwala");
        $query = mysqli_real_escape_string($connect,$query);
        $sql = "SELECT name,id,image,price FROM modelingphoto
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $results = mysqli_query($connect,$sql);
        if(mysqli_num_rows($results) > 0){ 
            while($row = mysqli_fetch_array($results)){
             ?>
              <a href="gallerydetails.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
                <div class="list"><i class="fas fa-hand-point-right"></i><?php echo $row["name"]; ?></div>
              </a>
             <?php
            }
        }
        else{ // if there is no matching rows do following
           
        }
         
    }
    if(strlen($query) >= $minLength){ 
        $query = htmlspecialchars($query); 
        $connect = mysqli_connect("localhost","root","","chobiwala");
        $query = mysqli_real_escape_string($connect,$query);
        $sql = "SELECT name,id,image,price FROM conceptualphoto
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $results = mysqli_query($connect,$sql);
        if(mysqli_num_rows($results) > 0){ 
            while($row = mysqli_fetch_array($results)){
             ?>
              <a href="gallerydetails.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
                <div class="list"><i class="fas fa-hand-point-right"></i><?php echo $row["name"]; ?></div>
              </a>
             <?php
            }
        }
        else{ // if there is no matching rows do following
           
        }
         
    }

    else{ // if query length is less than minimum        
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