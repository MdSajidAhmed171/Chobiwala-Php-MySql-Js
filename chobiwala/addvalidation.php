<?php 
/** @defgroup packageValidation packageValidation
    customer details of package order.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            addvalidation.php
 *
 * \author          copyright 2020 <br>
 *                  Md. Sajid Ahmed <br>
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
	session_start(); // creates a session or resumes the current one based on a session identifier passed via a GET or POST request

	$con = mysqli_connect('localhost','root','');

	if(!$con){
		echo "Not Connected To Server!";
	}

	if(!mysqli_select_db($con, 'chobiwala')){
		echo "Database Not Connected!";
	}

    $id = $_SESSION['id'];
	$name = $_POST['firstname'];
    $email = $_POST['email'];
    $mobile = $_POST['mob'];
    $addres = $_POST['address'];
    $city = $_POST['city'];
    $address = $addres . ', ' . $city . ', ';
    $price = $_SESSION['price'];

    $sql = "INSERT INTO package_order (order_id,name,email,mobile,address,price) VALUES ('$id','$name','$email','$mobile','$address','$price')";

    if(!mysqli_query($con,$sql)){
    	echo "Error while saving customer information!";
    }
    else{ ?>

    	<h5 style="text-align: center; color: red; font-size: 25px;">"Our service man will contact with you soon. <br> Cheers "</h5> <?php
    }

    header("refresh:5; url=package.php");
 ?>