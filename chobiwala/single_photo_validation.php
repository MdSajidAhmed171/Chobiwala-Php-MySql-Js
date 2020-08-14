<?php 
/** @defgroup single_photo_validation single_photo_validation
    single photo checkout form validation.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            single_photo_validation.php
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


session_start(); //session_start() is called or when a session auto starts, PHP will call the open and read session save handlers.

$con = mysqli_connect('localhost','root',''); /*!< connect the database.*/

	if(!$con){ /*!< connect the databse.*/
		echo "Not Connected To Server!";
	}

	if(!mysqli_select_db($con, 'chobiwala')){ /*!< connect the databse.*/
		echo "Database Not Connected!";
	}

    $id = $_SESSION['id']; /*!< call image id from buy_single_galleryphoto.*/
    $img = $_SESSION['image']; /*!< call image id from buy_single_galleryphoto.*/
    $price = $_SESSION['price']; /*!< call image price from buy_single_galleryphoto.*/
	$name = $_POST['fullname']; /*!< call full name by post metod from buy_single_galleryphoto form.*/
    $email = $_POST['email']; /*!< call email by post metod from buy_single_galleryphoto form.*/
    $mobile = $_POST['mob']; /*!< call mobile number by post metod from buy_single_galleryphoto form.*/
    $cardNumber = $_POST['cnum']; /*!< call account number by post metod from buy_single_galleryphoto form.*/
    
 

    $sql = "INSERT INTO single_photo_sold (img_id,image,cname,email,mobile,card_number,price) VALUES ('$id','$img','$name','$email','$mobile','$cardNumber','$price')"; /*!< Put all varibles data in database.*/

    if(!mysqli_query($con,$sql)){
    	echo "Error while saving customer information!";
    }
    else{ ?>

    	<h5 style="text-align: center; color: red; font-size: 25px;">"A confirmation mail will sent soon. <br> Cheers "</h5> <?php
    }

    header("refresh:5; url=index.php");


 ?>