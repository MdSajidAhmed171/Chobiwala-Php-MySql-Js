<?php
/** @defgroup comment comment
    Comment of photos.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            post_comment.php
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
session_start();
 
$host="localhost";
$username="root";
$password="";
$databasename="chobiwala";

$connect=mysqli_connect($host,$username,$password);
$db=mysqli_select_db($connect, $databasename);

if(isset($_POST['user_comm']))
{
  $comment=$_POST['user_comm'];
  $name=$_SESSION['username'];
  $id =$_SESSION['id'];
  
  $insert=mysqli_query($connect, "insert into comment (img_id,user,comment,post_time) values('$id','$name','$comment',CURRENT_TIMESTAMP)");
  
 
  $select=mysqli_query($connect, "select user,comment,post_time from comment where user='$name' and comment='$comment'");
  
  if($row=mysqli_fetch_array($select))
  {
	  $name=$row['user'];
	  $comment=$row['comment'];
      $time=$row['post_time'];
  ?>
<div class="comment_div"> 
 <p class="name"><strong>Posted By:</strong> <?php echo $name;?> <span style="float:right"><?php echo date("j/m/Y g:ia", strtotime($time)) ?></span></p>
 <p class="comments"><?php echo $comment;?></p>	
</div>
  <?php
  }
exit;
}

?>