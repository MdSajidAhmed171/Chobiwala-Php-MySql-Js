<?php 
/** @defgroup profile profile
    user and admin profile.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            sidebar.php
 *
 * \author          copyright 2020 <br>
 *                  Md. Sajid Ahmed <br>
 *					Rahat Islam Akash <br>
 *
 * \date            First Step: 15-03-2020 <br>
 *
 * \b CHANGE \b HISTORY: <br>
 *
 *   <b>- Md. Sajid Ahmed. / 15-03-2020</b>   
 *           - create user  profile.
 *
 *   <b>- Rahat Islam Akash. / 18-03-2020</b>   
 *           - crete admin profile.

 ***************************************************************************
 ***************************************************************************/
/**@} */ // Close 
ob_start(); //ob_start allows you to keep the content in a server-side buffer until you are ready to display it
require_once("config.php"); // call database connection file
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
</head>
<body>

	<?php 
	if ($_SESSION["authen"]){ //if user is login
	 ?>
	<!-- SideBar Starts -->

	<!-- user profile Starts -->
	  
	  <div class="sidebar">
	  	<a href="#" style="text-decoration: none;">Your Profile</a>
		<div class="picture" style="margin-top: 20px;">
 	 		<?php 
 	 			/** @def user profile image
      			*/
    			$user = $_SESSION["username"]; /*!< call user name.*/
		       	$con = mysqli_connect("localhost", "root", "", "chobiwala"); /*!< connection variable for database.*/
		        $sql = "SELECT image FROM user WHERE username='$user'"; /*!< select image from user table of database .*/
		        $result = mysqli_query($con, $sql); /*!<executes the SQL queries. */

		        if (mysqli_num_rows($result) > 0) {
		            while($row = mysqli_fetch_assoc($result)) {
		                echo "<img src='image/user/".$row['image']."' >"; // print image from sql
		            }
		        }
		?>
 	 	</div>
	  <a href="editprofile.php" style="text-decoration: none;">Edit Profile</a>
	  <a href="chatbot.php" style="text-decoration: none;">Chat</a>
	  <li><form method="post"><button type="submit" name="logout" class="btn btn-success">Logout</button></form></li>
	</div>
	<?php 
		} ?>




	<!-- admin profile Starts -->
	<?php 
	if ($_SESSION["admin"]){ 

	?>
	  
	  <div class="sidebar">
		  	<a href="#" style="text-decoration: none;">Admin Profile</a>
			<div class="picture" style="margin-top: 20px;">
	 	 		<?php 
	 	 			/** @def admin profile image
      				*/
	    
			        $user = $_SESSION["username"]; /*!< call user name.*/
			        
			        $con = mysqli_connect("localhost", "root", "", "chobiwala"); /*!< connection variable for database.*/
			        $sql = "SELECT image FROM user WHERE username='$user'"; /*!< select image from user table of database .*/
			        $result = mysqli_query($con, $sql); /*!<executes the SQL queries. */

			        if (mysqli_num_rows($result) > 0) {
			            while($row = mysqli_fetch_assoc($result)) {
			                echo "<img alt='Upload Image From Settings' src='image/user/".$row['image']."' >"; // print image from sql
			            }
			        }
			?>
	 	 	</div>
		  <a href="addphotographer.php" style="text-decoration: none;">Add Photographer</a>
		  <a href="addpackage.php" style="text-decoration: none;">Add Package</a>
		  <a href="income.php" style="text-decoration: none;">Income</a>
		  <a href="picorder.php" style="text-decoration: none;">Pic Order</a>
	  <li><form method="post"><button type="submit" name="logout" class="btn btn-success">Logout</button></form></li>
	</div>
	<?php 
	} 
	?>
</body>
</html>

<?php 
    if(isset($_POST['logout'])){
 	 	session_destroy(); //session destroy followed by s.start is given so that the cart details doesn't show in other users cart
 	 	session_start(); // creates a session or resumes the current one based on a session identifier passed via a GET or POST request
 	 	$_SESSION["authen"] = False; /*!< user authentication false when logout.*/
 	 	$_SESSION["admin"] = False; /*!< admin authentication false when logout.*/
 	 	header("Location: index.php"); // after logout destination
 	 	ob_end_flush(); // turn off output buffering 
 	}
?>