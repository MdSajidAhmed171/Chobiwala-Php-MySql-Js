<?php 
require_once("config.php"); 
/** @defgroup about about
    About our developer.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            checkout.php
 *
 * \author          copyright 2020 <br>
 *                  Farzana Jahan. <br>
 *
 * \date            First Step: 15-03-2020 <br>
 *
 * \b CHANGE \b HISTORY: <br>
 *
 *   <b>- Farzana Jahan. / 22-03-2020</b>   
 *           - design about.

 *   <b>- Md Sajid Ahmed. / 24-03-2020</b>   
 *           - User Authen tication.
 *
 *   <b>- Farzana Jahan. / 26-03-2020</b>   
 *           - documentation.

 ***************************************************************************
 ***************************************************************************/

/**@} */ // Close 
/* EOF */
?>
<?php 
  if ($_SESSION["authen"] || $_SESSION["admin"]){ //if user or admin is login
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/checkout.css">
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
  <div class="checkout">
     <div class="container">
    <?php 
    /** @def Packages
      */
    $connect = mysqli_connect("localhost","root","", "chobiwala"); /*!< connection variable for database.*/
    $_SESSION['id'] = $_GET['id'] ; /*!<get package id .*/
    
    $query = "SELECT * FROM package where id = '" . $_GET['id'] . "' "; /*!< packages.*/

    $result = mysqli_query($connect, $query);  
    if(mysqli_num_rows($result) > 0)  
    {  
      while($row = mysqli_fetch_array($result))  
      { 
        $_SESSION['price'] = $row['price']; /*!< keep price in session variable.*/
    ?> 
          
          
    <div class="row">
      <div class="col">
        <div class="left">
          <div class="checkout_box">
            <div class="checkout_header"><h1>Delivery Information</h1></div>
            <form method="post" action="addvalidation.php" style="padding: 20px;">

          <div class="row" style="text-align: center;">
            <div class="col-sm">
              <input type="text" id="fname" name="firstname" placeholder="Your Full Name"> <br>
              <input type="text" name="email" placeholder="Your Email Address"><br>
              <input type="text" name="mob" placeholder="Phone Number"><br>
              <input type="text" name="address" placeholder="Address"><br>
              <input type="text" id="city" name="city" placeholder="Your City"> 
            </div>
          </div>
          <input type="submit" value="Continue to checkout" class="btn btn-primary">
        </form>
      </div>
        </div>
      </div>

      <div class="col">
        <div class="right">
          <h2 class="text-info"><?php echo $row["name"]; ?></h2>  
                        <h4 class="text-danger"> Price :  <?php echo $row["price"]; ?> BDT</h4>
                        <h4 class="text-danger"> Service Hour :  <?php echo $row["whour"]; ?></h4>

                        <h4 class="text-info">Photographer : <a href="phptographer.php?pg=<?php echo $row["pg"]; ?>"><?php echo $row["pg"]; ?></a></h4>
                         <h4 class="text-info">Assistent Photographer : <a href="phptographer.php?pg=<?php echo $row["apg"]; ?>"><?php echo $row["apg"]; ?></a></h4>

                        <p>The photographer unite will reach to your given address in time.</p> 

        </div>  
      </div>
    </div>
      
    
    <?php  
        }  
      }  
    ?>
  </div>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 

</body>
</html>