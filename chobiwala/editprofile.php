<?php 
/** @defgroup user_edit_profile user_edit_profile
    edit user information.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            editprofile.php
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
require 'register_handler.php' ;
?>
<?php 

	if(isset($_POST['u1'])){

		$fName = $_POST['nme'];
		$u = $_SESSION["username"];
		$con = mysqli_connect("localhost","root","","chobiwala");
		$sql = "UPDATE user SET first_name='$fName' WHERE username='$u'";

		if (mysqli_query($con, $sql)) {
			$_SESSION["reg_fname"] = $_POST['nme'];
			$message = "Full name updated successfully.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} else {
			$message = "Error: " . $sql . "<br/>" . mysqli_error($con);
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
?>

<?php 

	if(isset($_POST['u2'])){

		$lName = $_POST['lnme'];
		$u = $_SESSION["username"];
		$con = mysqli_connect("localhost","root","","chobiwala");
		$sql = "UPDATE user SET last_name='$lName' WHERE username='$u'";

		if (mysqli_query($con, $sql)) {
			$_SESSION["reg_lname"] = $_POST['lnme'];
			$message = "Full name updated successfully.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} else {
			$message = "Error: " . $sql . "<br/>" . mysqli_error($con);
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
?>
<?php 

	if(isset($_POST['u3'])){

		$con = mysqli_connect("localhost","root","","chobiwala");
		$oldp = $_POST['p1'];
		$newp = $_POST['p2'];
		$newpp = $_POST['p3'];
		$u = $_SESSION["username"];
		$p = $_SESSION["log_password"];

		if($newp == $newpp) {
			$sql = "UPDATE user SET password='$newp' WHERE username='$u' AND password= '$oldp'";

			if($oldp == $p) {
				if (mysqli_query($con, $sql)) {
					$message = "Password updated successfully.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				} else {
					$message = "Error: " . $sql . "<br/>" . mysqli_error($con);
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			} else {
				$message = "Entered wrong old password!";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
	    }
	}
?>

<?php 
	
	if(isset($_POST['u4'])){
		// Get image name
		$con = mysqli_connect("localhost", "root", "", "chobiwala"); //Connection variable
		$image = $_FILES['image']['name'];

		$target = "image/user/".basename($image); // image file directory

		
		$u = $_SESSION["username"];

		$sql = "UPDATE user SET image='$image' WHERE username='$u'";

        if (mysqli_query($con, $sql)) {
            $message = "Image uploaded successfully!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $message = "Error: " . $sql . "<br/>" . mysqli_error($con);
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){

		} else {

		}
	}

?>







<?php 
	if ($_SESSION["authen"]){
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
                  if ($_SESSION["authen"]){
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


	<?php if ($_SESSION["authen"]){ ?>
	<div class="container" style="margin-left: 200px;"> 
		<h1>Account Settings</h1>
		<hr>
		<div>
			<h4 style="background: green; color: white"><b>First Name: </b><?php echo $_SESSION["reg_fname"]; ?> <button onclick="toggler('firstname')">[Edit]</button> </h4>
			<form method="POST" id="firstname" style="display: none;">
				Enter new first name: 
				<input type="text" name="nme" required> <button type="submit" name="u1">Update</button>
			</form> <br />


			<h4 style="background: green; color: white;"><b>Last Name: </b><?php echo $_SESSION["reg_lname"]; ?> <button onclick="toggler('lastname')">[Edit]</button> </h4>
			<form method="POST" id="lastname" style="display: none;">
				Enter new last name: 
				<input type="text" name="lnme" required> <button type="submit" name="u2">Update</button>
			</form><br />

			<h4 style="background: green; color: white;">Change Password</h4>
			<p>Use a strong password that you don't use elsewhere 
				<button onclick="toggler('pas')">[Edit]</button> 
			</p>

			<form name="passForm" method="POST" id="pas" style="display: none;">
				Enter Old Password: 
				<input type="password" name="p1" required> <br>
				Enter New Password: 
				<input type="password" name="p2" required><br>
				Re-enter New Password: 
				<input type="password" name="p3" required><br>
				<button type="submit" name="u3" onclick="validate()" >Update</button>

			</form>

			<h4 style="background: green; color: white;"> Change Your Profile Image </h4>

			<form name="name" method="POST" action="editprofile.php" enctype="multipart/form-data">
				<input type="file" name="image"><br>
				<button style="margin-top: 10px;" type="submit" name="u4" >Upload Image</button>
			</form>



		</div>
		

	</div>

	<?php 
	}
else {
  ?>
  <h1 style="margin-top: 200px;color: red;text-align: center;"> You are not logged in! </h1>
  <?php
  }
   ?>
	

	<script type="text/javascript">
        function toggler(divId) {
      		$("#" + divId).toggle();
      	}
      	function validate(){
      		var x = document.forms["passForm"]["p2"].value;
      		var y = document.forms["passForm"]["p3"].value;

      		if(x == y){

		  	}
		  	else{
		  		alert("Password didn't match, try again!");
		  		return false;
		  	}
      	}
    </script> 


</body>
</html>
