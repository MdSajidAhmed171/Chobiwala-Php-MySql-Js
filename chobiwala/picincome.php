<?php
require_once("config.php");
/** @def Total income for Photo
      */
      class picDeliveryCount
      {

          /***********************************************************************
          *    
          * PUBLIC FUNCTIONS
          *
          ***********************************************************************/
           
          // :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
          /*! \fn function picTotalt()
           *  \brief function pic count. 
           *  \param $picCount -> initialize the picCount = 0.
           *  \param $con    = connection variable */
 
          function picTotalt(){
          // :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
          $picCount = 0;
          $con = mysqli_connect("localhost","root","","chobiwala");
          $sql = "SELECT price FROM single_photo_sold";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                $picCount++;
              }
          }
          echo $picCount;
        }
      }
      $obj = new picDeliveryCount();
      
?>