<?php  
/** @defgroup login_handler login_handler
    login handler..
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            login_handler.php
 *
 * \author          copyright 2020 <br>
 *                  Md. Sajid Ahmed <br>
 *                  Badrul Haider. <br>
 *                  Rahat Islam Akash. <br>
 *
 * \date            First Step: 15-03-2020 <br>
 *
 * \b CHANGE \b HISTORY: <br>
 *   <b>- Badrul Haider. / 28-02-2020</b>   
 *           - handle the login Session.
 
 *   <b>- Md. Sajid Ahmed. / 15-03-2020</b>   
 *           - made authentic user profile.
 *
 *   <b>- Rahat Islam Akash. / 23-03-2020</b>   
 *           - made admin authentication.

 ***************************************************************************
 ***************************************************************************/

/**@} */ // Close 
/* EOF */
$_SESSION["authen"] = False; /*!<put user authen false before login. */
$_SESSION["admin"] = False; /*!<put admin authen false before login. */
if(isset($_POST['login_button'])) { /*!<varibale of form POST metod */

	$email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL); /*sanitize email */

	$_SESSION['log_email'] = $email; /*Store email into session variable */
	$password = $_POST['log_password']; /*Get password */
	$_SESSION['log_password'] = $password; /* password */

	$check_database_query = mysqli_query($con, "SELECT * FROM user WHERE email='$email' AND password='$password'"); /* read email & password */
	$check_login_query = mysqli_num_rows($check_database_query);

	if($check_login_query == 1) {
		$row = mysqli_fetch_array($check_database_query);
		$username = $row['username']; /*user name */
		$reg_fname = $row['reg_fname']; /* first name*/
		$reg_lname = $row['reg_lname']; /* last name */
		$_SESSION['reg_fname'] = $reg_fname; /*put first name in seesion varible */
		$_SESSION['reg_lname'] = $reg_lname; /*put last name in seesion varible */
		$_SESSION['username'] = $username; /*put username in seesion varible */
		$_SESSION["authen"] = True; /*if user login then authen become true */
	}
	else {
		$_SESSION["authen"] = False; /*if user login not found then authen become false */
		array_push($error_array, "Email or password was incorrect<br>");
	}
	$change = $_SESSION["authen"]; /*for destination page after login */
	if($change == True){ 
	    header("Location: index.php"); // destination page after login
	    ob_end_flush(); //to clean the buffer, we will use the ob_end_flush() function
	}
	$admin = $_SESSION["log_email"];
        $adminemail = "chobiwala@admin.com"; /* take fixed admin email for profile */

        if($admin == $adminemail){
            $_SESSION["admin"] = True; /*if admin login then admin authen become true */
            $_SESSION["authen"] = False; /*if admin login then user authen become false */
        } else {
            $_SESSION["admin"] = False; /*if admin not login then admin authen become false */
        }


}

?>
