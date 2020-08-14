<?php
/** @defgroup connection connection
    Connection of database.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            config.php
 *
 * \author          copyright 2020 <br>
 *                  Md. Sajid Ahmed <br>
 *
 * \date            First Step: 15-03-2020 <br>
 *
 * \b CHANGE \b HISTORY: <br>
 *
 *   <b>- Md. Sajid Ahmed. / 18-02-2020</b>   
 *           - Connect the database.
 *

 ***************************************************************************
 ***************************************************************************/

/**@} */ // Close 
/* EOF */
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Asia/Dhaka");

$con = mysqli_connect("localhost", "root", "", "chobiwala"); /*!< connection Variable.*/

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno(); // Failed if not connected
}

?>