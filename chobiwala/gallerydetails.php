<?php 
require_once("config.php");
/** @defgroup gallery_details gallery_details
    photos details view.
@{ */
/*!***********************************************************************
 *************************************************************************
 * \file            gallerydetails.php
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
?>
<!doctype html>
<?php 
  if ($_SESSION["authen"] || $_SESSION["admin"]){
    include("sidebar.php");
  } 
  else {
  }
?>
 <html lang="en">
 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Details</title>
  <link rel="stylesheet" href="css/detail.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
function post()
{
  var comment = document.getElementById("comment").value;
  
  if(comment )
  {
    $.ajax
    ({
      type: 'post',
      url: 'post_comment.php',
      data: 
      {
         user_comm:comment,
	       user_name:name
      },
      success: function (response) 
      {
	    document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
	    document.getElementById("comment").value="";
      document.getElementById("username").value="";
      }
    });
  }
  
  return false;
}
</script>

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

  <!-- Conceptual div -->
  <div class="container">
  	<?php 
    /** @def conceptual photo details page
    */
  	$connect = mysqli_connect("localhost","root","", "chobiwala");
    $_SESSION['id'] = $_GET['id'] ;
  	$query = "SELECT * FROM conceptualphoto where id = '" . $_GET['id'] . "' ";

      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) > 0)  
      {  
          while($row = mysqli_fetch_array($result))  
          {  
      ?> 
          
          
    <div class="row">
    	<div class="col">
    		<div class="left">
    			<img src="image/<?php echo $row["image"]; ?>" style="display: block; margin-left: auto; margin-right: auto;";/><br />
    		</div>
    	</div>
    	<div class="col">
    		<div class="right">
    			<h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                        <h4 class="text-danger"> Price : $ <?php echo $row["price"]; ?></h4>

                        <h4 class="text-info">Photographer : <a href="phptographer.php?pg=<?php echo $row["photographer"]; ?>"><?php echo $row["photographer"]; ?></a></h4>

                        <h3 class="get_btn"><a href="buy_single_galleryphoto.php"><input type="submit" value="Buy" class="btn btn-success"></a></h3>

                        <p>All Royalty-Free licences include global use rights, comprehensive protection, and simple pricing with volume discounts available.</p> 

    		</div>  
    	</div>
    </div>
      
    
      <?php  
               }  
          }  
          ?>


<!-- babies div -->
            
  <div class="container">
    <?php 
    /** @def babies photo details page
    */
    $connect = mysqli_connect("localhost","root","", "chobiwala");
    $_SESSION['id'] = $_GET['id'] ;

    $query = "SELECT * FROM babiesphoto where id = '" . $_GET['id'] . "' ";

      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) > 0)  
      {  
         while($row = mysqli_fetch_array($result))  
         {  
      ?> 
          
          
    <div class="row">
      <div class="col">
        <div class="left">
          <img src="image/<?php echo $row["image"]; ?>" style="display: block; margin-left: auto; margin-right: auto;";/><br />
        </div>
      </div>
      <div class="col">
        <div class="right">
          <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                        <h4 class="text-danger"> Price : $ <?php echo $row["price"]; ?></h4>

                        <h4 class="text-info">Photographer : <a href="phptographer.php?pg=<?php echo $row["photographer"]; ?>"><?php echo $row["photographer"]; ?></a></h4>

                        <h3 class="get_btn"><a href="buy_single_galleryphoto.php"><input type="submit" value="Buy" class="btn btn-success"></a></h3>

                        <p>All Royalty-Free licences include global use rights, comprehensive protection, and simple pricing with volume discounts available.</p> 

        </div>  
      </div>
    </div>
      
    
      <?php  
               }  
          }  
          ?>


    <!-- Modleing div -->
            
  <div class="container">
    <?php 
    /** @def modeling photo details page
    */
    $connect = mysqli_connect("localhost","root","", "chobiwala");
    $_SESSION['id'] = $_GET['id'] ;

    $query = "SELECT * FROM modelingphoto where id = '" . $_GET['id'] . "' ";

          $result = mysqli_query($connect, $query);  
          if(mysqli_num_rows($result) > 0)  
          {  
               while($row = mysqli_fetch_array($result))  
               {  
          ?> 
          
          
    <div class="row">
      <div class="col">
        <div class="left">
          <img src="image/<?php echo $row["image"]; ?>" style="display: block; margin-left: auto; margin-right: auto;";/><br />
        </div>
      </div>
      <div class="col">
        <div class="right">
          <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                        <h4 class="text-danger"> Price : $ <?php echo $row["price"]; ?></h4>

                        <h4 class="text-info">Photographer : <a href="phptographer.php?pg=<?php echo $row["photographer"]; ?>"><?php echo $row["photographer"]; ?></a></h4>

                        <h3 class="get_btn"><a href="buy_single_galleryphoto.php"><input type="submit" value="Buy" class="btn btn-success"></a></h3>

                        <p>All Royalty-Free licences include global use rights, comprehensive protection, and simple pricing with volume discounts available.</p> 

        </div>  
      </div>
    </div>
      
    
      <?php  
               }  
          }  
          ?>

    <!-- latest div -->
  <div class="container">
    <?php 
    /** @def latest photo details page
    */
    $connect = mysqli_connect("localhost","root","", "chobiwala");
    $_SESSION['id'] = $_GET['id'] ;

    $query = "SELECT * FROM latestphoto where id = '" . $_GET['id'] . "' ";


          $result = mysqli_query($connect, $query);  
          if(mysqli_num_rows($result) > 0)  
          {  
               while($row = mysqli_fetch_array($result))  
               {  
          ?> 
          
          
    <div class="row">
      <div class="col">
        <div class="left">
          <img src="image/<?php echo $row["image"]; ?>" style="display: block; margin-left: auto; margin-right: auto;";/><br />
        </div>
      </div>
      <div class="col">
        <div class="right">
          <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                        <h4 class="text-danger"> Price : $ <?php echo $row["price"]; ?></h4>

                        <h4 class="text-info">Photographer : <a href="phptographer.php?pg=<?php echo $row["photographer"]; ?>"><?php echo $row["photographer"]; ?></a></h4>

                        <h3 class="get_btn"><a href="buy_single_galleryphoto.php"><input type="submit" value="Buy" class="btn btn-success"></a></h3>

                        <p>All Royalty-Free licences include global use rights, comprehensive protection, and simple pricing with volume discounts available.</p> 

        </div>  
      </div>
    </div>
      
    
      <?php  
               }  
          }  
          ?>



    <!-- comment section -->
    <?php 
      if ($_SESSION["authen"] || $_SESSION["admin"]){
    ?> 
    <form method='post' action="" onsubmit="return post();" id="container">
	  <textarea id="comment" placeholder="Write Your Comment Here....."></textarea>  
	  <input type="submit" value="Post Comment" id="submit">
  </form>

  <div id="all_comments">
  <?php
    $host="localhost";
    $username="root";
    $password="";
    $databasename="chobiwala";

    $connect=mysqli_connect($host,$username,$password);
    $db=mysqli_select_db($connect,$databasename);
  
    $comm = mysqli_query($connect, "select user,comment,post_time from comment where img_id = '" . $_GET['id'] . "'  order by id desc");
    while($row=mysqli_fetch_array($comm))
    {
  	  $name=$row['user'];
  	  $comment=$row['comment'];
      $time=$row['post_time'];
    ?>
	
    <div class="comment_div"> 
    <p class="name"><strong>Posted By:</strong> <?php echo $name;?> <span style="float:right"><?php echo date("j-M-Y g:ia", strtotime($time)) ?></span></p>
    <p class="comments"><?php echo $comment;?></p>	
    </div>
  
    <?php
    }
    ?>
    <?php
    }
    ?>
    <hr>
  </div>

  </div>

    </body>
</html>