<?php 
/** @defgroup about about
    About our developer.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            income.php
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
require_once("config.php");
require('picincome.php');
?>




<?php

      /** @def Total income for Photo
      */
      $picTotal = 0;
      $con = mysqli_connect("localhost","root","","chobiwala");
      $sql = "SELECT price FROM single_photo_sold";
      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            $t = $row["price"];
            $picTotal = $picTotal + $t;
          }
      }
?>


<?php
      
      /** @def Package total income
      */
      $packTotal = 0;
      $packCount = 0;
      $con = mysqli_connect("localhost","root","","chobiwala");
      $sql = "SELECT price FROM package_order";
      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result) > 0) {
          while($rows = mysqli_fetch_assoc($result)) {
            $packCount++;
            $tt = $rows["price"];
            $packTotal = $packTotal + $tt;
          }
      }
?>


<?php 
	if ($_SESSION["authen"] || $_SESSION["admin"]){
		include("sidebar.php");
	} 
	else {
	}
?>
<?php if ($_SESSION["admin"]){ ?>



<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

    <br><br>
    <div class="container" display="inline-block" style="width: 700px;">

      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col" ><p style="font-size: 20px;"><i class="fa fa-vcard"> Photo Statistics</p></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
                <div class="order" style="background: #fd7e14cf;height: 100px;width: 230px;position: relative;display: inline-block;margin: 0 5%;">
              <div class="icon" style="background: var(--orange);position: absolute;height: 100px;width: 75px;top: 0;left: 0;padding: 25px;font-size: 30px;">
                <i class="fa fa-vcard" style="color: white;"></i>
              </div>
              <div class="info" style="position: absolute;left: 100px;top: 8px;color: white;">
                <p style="font-size: 20px;margin: 0;">DELIVERED</p>
                <p class="num" style="text-align: center;font-size: 35px;"><?php echo $obj->picTotalt(); ?></p>
              </div>
            </div>
                <div class="order" style="background: #25963ed1;height: 100px;width: 230px;position: relative;display: inline-block;margin: 0 5%;">
              <div class="icon" style="background: #228939;position: absolute;height: 100px;width: 75px;top: 0;left: 0;padding: 25px;font-size: 30px;">
                <i class="fa fa-money" style="color: white;"></i>
              </div>
              <div class="info" style="position: absolute;left: 100px;top: 8px;color: white;">
                <p style="font-size: 20px;margin: 0;text-align: center;">EARNED</p>
                <p style="text-align: center;font-size: 35px;"><span class="num"><?php echo $picTotal; ?></span> TK</p>
              </div>
            </div>
            </td>
          </tr>
          
        </tbody>
      </table>
    </div>
      <div class="container" display="inline-block" style="width: 700px;">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col" ><p style="font-size: 20px;"><i class="fa fa-vcard-o"> Package Statistics</p></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
                <div class="order" style="background: #e83e8cd1;height: 100px;width: 230px;position: relative;display: inline-block;margin: 0 5%;">
              <div class="icon" style="background: var(--pink);position: absolute;height: 100px;width: 75px;top: 0;left: 0;padding: 25px;font-size: 30px;">
                <i class="fa fa-vcard" style="color: white;"></i>
              </div>
              <div class="info" style="position: absolute;left: 100px;top: 8px;color: white;">
                <p style="font-size: 20px;margin: 0;">DELIVERED</p>
                <p class="num" style="text-align: center;font-size: 35px;"><?php echo $packCount; ?></p>
              </div>
            </div>
                <div class="order" style="background: #6f42c1c2;height: 100px;width: 230px;position: relative;display: inline-block;margin: 0 5%;">
              <div class="icon" style="background: var(--purple);position: absolute;height: 100px;width: 75px;top: 0;left: 0;padding: 25px;font-size: 30px;">
                <i class="fa fa-money" style="color: white;"></i>
              </div>
              <div class="info" style="position: absolute;left: 100px;top: 8px;color: white;">
                <p style="font-size: 20px;margin: 0;text-align: center;">EARNED</p>
                <p style="text-align: center;font-size: 35px;"><span class="num"><?php echo $packTotal; ?></span> TK</p>
              </div>
            </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>


<script type="text/javascript">
    $(".num").counterUp({delay:10,time:1000});
</script>   

</body>

<?php 
    }
 ?>
	


</body>
</html>
