
<?php session_start(); ?> 
<!DOCTYPE html>
<html> 
<head>
<title> Upload File </title>
<?php require_once 'js/passwordchange.php'; ?>
</head>
<body>
<?php


 if(!isset($_SESSION['cpasswordE']))
 {
   $_SESSION['cpasswordE']="";
 }

 if(!isset($_SESSION['npasswordE']))
 {
   $_SESSION['npasswordE']="";
 }
  if(!isset($_SESSION['rnpasswordE']))
 {
   $_SESSION['rnpasswordE']="";
 }

 $cpassword=$npassword=$rnpassword="";
 
 ?>
      
		     <p> <h1 > Tutor  </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as <?php echo $_SESSION['nameDB']?> | </a>
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
      <form  action="controller/changePassword.php?id=<?php echo $_SESSION['username'] ?>" method="post" onsubmit="validateform()" enctype="multipart/form-data">
	    <h3 > </p>
			  
		  <lebel>Current Password:</lebel> 
		  <input type="password" name="cpassword" placeholder="Current password" id="cpassword" onkeyup="checkPass()" onblur="checkPass()">
     <br> <span id="cpassErr"></span> 
  <span class="error" > <?php echo $_SESSION['cpasswordE'];?></span>		  
          <br>
          <lebel style="color:green">New Password:</lebel>
          <input type="password" name="npassword" placeholder="New password"  id="npassword" onkeyup="checkNpassword()" onblur="checkNpassword()"> <br><span id="npasswordErr"></span>
 <span class="error" > <?php echo $_SESSION['npasswordE'];?></span><br>			  
          
          <lebel style="color:Red">Retype New Password:</lebel>
          <input type="password" name="rnpassword" placeholder="Retype new password" id="rnpassword" onkeyup="checkRnpassword()" onblur="checkRnpassword()" >   <br> <span id="rnpasswordErr"></span>
  <span class="error" > <?php echo $_SESSION['rnpasswordE'];?></span><br>			  
          <br><hr>
          <input type="submit" name="submit" value="Submit">
          <br>		  
		  </h3>
      </form>		   
		   </fieldset>	  
  </body>
</html>
<?php
if(isset($_SESSION['cpasswordE']) || isset($_SESSION['npasswordE'])   || isset($_SESSION['rnpasswordE']))
 {
 $_SESSION['cpasswordE']="";
 $_SESSION['npasswordE']="";
 $_SESSION['rnpasswordE']="";
 }

  ?>
