<?php
session_start();


?>
<!DOCTYPE html>
<html> <title> Upload File </title>
<body>
      
		     <p> <h1 > Instructor  </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged as <?php echo $_SESSION['username']?> | </a>
		       <a href="logout.php">Logout</a>   
		   </h3>  
		   <fieldset> 
	      <h2> <u> Account </u> </h2> 
            <ul>
			   <li> <a href="dashboard.php"> Dashboard   </a></li><hr>
                <li> <a href= "viewProfile.php"> View Profile </a> </li><hr>
                <li> <a href="editProfile.php"> Edit Profile </a></li><hr>
                <li> <a href="changePassword.php">Change Password</a> </li></ul><hr>  


    <h3 align="center"> </h3>
      <legend><b>CHANGE PASSWORD</b></legend>
      <form  action="controller/changePassword.php?id=<?php echo $_SESSION['username'] ?>" method="post" enctype="multipart/form-data">
	    <h3 align="center"> </p>
			  
		  <lebel>Current Password:</lebel> 
		  <input type="text" name="cpassword">        
          <br>
          <lebel style="color:green">New Password:</lebel>
          <input type="text" name="password" >         
          <br>
          <lebel style="color:Red">Retype New Password:</lebel>
          <input type="text" name="rnpassword" >        
          <br><hr>
          <input type="submit" name="submit" value="Submit">
          <br>		  
		  </h3>
      </form>		   
		   </fieldset>	  
  </body>
</html>
