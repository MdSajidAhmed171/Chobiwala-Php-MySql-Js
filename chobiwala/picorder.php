<?php 
require_once("config.php");
/** @defgroup picorder picorder
    View Pic order.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            picorder.php
 *
 * \author          copyright 2020 <br>
 *                  Rahat Islam Akash <br>
 *
 * \date            First Step: 15-03-2020 <br>
 *
 * \b CHANGE \b HISTORY: <br>
 *
 *   <b>- Rahat Islam Akash. / 29-04-2020</b>   
 *           - Frontend and backend.
 *
 *   <b>- Rahat Islam Akash. / 29-04-2020</b>   
 *           - documentation.

 ***************************************************************************
 ***************************************************************************/

/**@} */ // Close 
/* EOF */
    
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
  <div class="container" style="margin-left: 200px;">

      <?php 
      /** @def View orders
      */

      $connect = mysqli_connect("localhost","root","","chobiwala"); /*!< Connection variable.*/

      $query = "SELECT * FROM single_photo_sold ORDER BY id ASC";
      $result = mysqli_query($connect,$query);
      if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){

          ?>

            <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Oder Id</th>
          <th scope="col">Image</th>
          <th scope="col">Price</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><?php echo $row['id']; ?></th>
          <td><img src="image/<?php echo $row["image"]; ?>" style="width: 300px;";></td>
          <td><?php echo $row['price']; ?></td>
          <td><?php echo $row['cname']; ?></td>
          <td><?php echo $row['email']; ?></td>
        </tr>
      </tbody>
    </table>

    
    <?php 
        }
    }

       ?>
  </div>



<?php 
    }
 ?>
	


</body>
</html>
