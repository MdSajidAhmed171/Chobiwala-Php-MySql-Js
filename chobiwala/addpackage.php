<?php 
require_once("config.php");
/** @defgroup package package
    Add pakage to the database-Admin Section.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            addpackage.php
 *
 * \author          copyright 2020 <br>
 *                  Rahat Islam Akash <br>
 *
 * \date            First Step: 15-03-2020 <br>
 *
 * \b CHANGE \b HISTORY: <br>
 *
 *   <b>- Rahat Islam Akash. / 15-03-2020</b>   
 *           - Frontend and backend.
 *
 *   <b>- Rahat Islam Akash. / 18-03-2020</b>   
 *           - documentation.

 ***************************************************************************
 ***************************************************************************/

/**@} */ // Close 
/* EOF */
?>

<?php 
  
  if(isset($_POST["post"])) {  /*!< variable of form post method.*/
    $pacName = $_POST["name"]; /*!< package name.*/
    $pacPhotographer = $_POST["photographer"]; /*!< package phototgrapher name.*/
    $pacAPhotographer = $_POST["aphotographer"]; /*!< package assistent phototgrapher name.*/
    $pacDuration = $_POST["duration"]; /*!< package duration.*/
    $pacPrice = $_POST["price"]; /*!< package price.*/
    $pacImg = $_POST["image"]; /*!< package image.*/
    $pacDes = $_POST["des"]; /*!< package description.*/

    $con = mysqli_connect("localhost","root","","chobiwala"); /*!< Connection variable.*/

    $sql = "INSERT INTO package(name,pg,apg,whour,price,image,description)
          VALUES('$pacName', '$pacPhotographer', '$pacAPhotographer', '$pacDuration', '$pacPrice', '$pacImg', '$pacDes')"; /*!< Input data into database.*/
    if (mysqli_query($con, $sql)) {
      $message = "Package added!";
      echo "<script type='text/javascript'>alert('$message');</script>"; // alert text if package added
    }
    else {
      $message = "Error: " . $sql . "<br/>" . mysqli_error($con);
       echo "<script type='text/javascript'>alert('$message');</script>"; //alert if failed
    }
  }
?>

<?php 
	if ($_SESSION["authen"] || $_SESSION["admin"]) { /*!< authentication sidebar for admin and user profile.*/
		include("sidebar.php");
	} 
	else {
	}
?>
<?php if ($_SESSION["admin"]) { ?>


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

	 <div class="container">
    <h1>Add Package</h1>
    <form method="POST">
      <div class="container">
            <label>Full Name </label><br>
            <input style="width: 70%;" type="text" name="name">
        <br>
            <label>Photographer: </label><br>
            <input type="text" name="photographer"><br>
        <br>
            <label>Assistent photographer: </label><br>
            <input style="width: 70%;" type="text" name="aphotographer"><br>
        <br>
            <label>Duration: </label><br>
            <input style="width: 70%" type="text" name="duration">
        <br>
            <label>Price: </label><br>
            <input type="text" name="price">
        <br>
            <label>Image: </label><br>
            <input type="text" name="image">
        <br>
            <label>Description: </label><br>
            <textarea style="width: 50%;" name="des"></textarea>
        <br>
        <button style="margin-left: 5%;" class="btn btn-success" name="post">ADD</button>
      </div>
    </form>
  </div>

</body>

<?php 
    }
 ?>
	


</body>
</html>
