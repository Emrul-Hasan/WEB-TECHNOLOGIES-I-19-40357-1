
<?php
session_start();
?>
<!DOCTYPE html>
<html> 
	 <head>
	 
	 </head>  
	 <body>
	      
		     <p> <h1 > Instructor  </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged as <?php echo $_SESSION['username']; ?>|
		       <a href="logout.php">Logout</a>   
		   </h3>  
		<fieldset>
		
		     <h1  > Welcome <?php echo $_SESSION['username']; ?>  <h1/>
            <h4>
            <h2> <u> Account </u> </h2> 
            <ul>
			   <li> <a href="dashboard.php"> Dashboard   </a></li><hr>
                <li> <a href= "viewProfile.php"> View Profile </a> </li><hr>
                <li> <a href="editProfile.php"> Edit Profile </a></li><hr>
                <li> <a href="changePassword.php">Change Password</a> </li></ul><hr>  
      
		     </ul>  
		     </h4>
		     <hr>

		   </fieldset>
		 
	 </body>
	 
</html>	 