<?php
session_start();


require_once 'controller/viewProfile.php';
$instructor = fetchProfile( $_SESSION['username']);

?>

<!DOCTYPE html>
<html> 
	 <head>
	 <title> DASHBOARD </title>
	 </head>  
	 <body>
	      
		     <p> <h1 > Instructor  </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged as <?php echo $_SESSION['username']?>|
		       <a href="logout.php">Logout</a>   
		   </h3>  
		<fieldset>
	      <h2> <u> Account </u> </h2> 
		   
            <ul>
			   <li> <a href="dashboard.php"> Dashboard   </a></li><hr>
                <li> <a href= "viewProfile.php"> View Profile </a> </li><hr>
                <li> <a href="editProfile.php"> Edit Profile </a></li><hr>
                <li> <a href="changePassword.php">Change Password</a> </li></ul><hr>  
 
		     <h4/>
   
    
          <form action="controller/editProfile.php?id=<?php echo $_SESSION['username'] ?>" method="post" enctype="multipart/form-data"> 
		  
		   
		   
		       <h1 > Edit profile </h1>
		       <p >
              <label>Email:</label>
              <input type="text" name="email" value="<?php echo $instructor['Email']; ?> " > <br>
              <label>Contactno:</label>
              <input type="text" name="contactno" value="<?php echo $instructor['ContactNo']; ?> " > <br>
			   <label>Username:</label>
              <input type="text" name="username" value="<?php echo $instructor['Username']; ?> " > <br>
			  
              <input type="submit" name="submit" value="Save">
				  <hr>
                 </p>
				 
				
		          </fieldset>
	       
				
                </form> <br>
	

    
    </body>
</html>