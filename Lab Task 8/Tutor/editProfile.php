<?php
session_start();


require_once 'controller/viewProfile.php';
$tutor = fetchProfile( $_SESSION['username']);

?>

<!DOCTYPE html>
<html> 
	 <head>
	 <title> DASHBOARD </title>
	 <?php require_once 'js/profileedit.php'; ?>
	 </head>  
	 <body>
	 <?php



 if(!isset($_SESSION['epnameEr']))
 {
   $_SESSION['epnameEr']="";
 }


 if(!isset($_SESSION['epcontactnoErr']))
 {
   $_SESSION['epcontactnoErr']="";
 }

 if(!isset($_SESSION['epemailErr']))
 {
   $_SESSION['epemailErr']="";
 }
$epname = $epemail =  $epcontactno="";
 ?>
	      
		     <p> <h1 > Tutor  </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as <?php echo $_SESSION['nameDB']?>|
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
   
    
          <form action="controller/editProfile.php?id=<?php echo $_SESSION['username'] ?>" method="post" onsubmit="validateform()" enctype="multipart/form-data"> 
		  
		   
		   
		       <h1 > Edit profile </h1>
		       <p >
			   <label>Name:</label>
              <input type="text" name="name" value="<?php echo $tutor['Name']; ?> " id="name" onkeyup="checkName()" onblur="checkName()" >* <br><span id="nameErr"></span>
               <span class="error" ><?php echo $_SESSION['epnameEr'];?></span><br>
              <label>Email:</label>
              <input type="text" name="email" value="<?php echo $tutor['Email']; ?> "  id="email" onkeyup="checkEmail()" onblur="checkEmail()">* <br><span id="emailErr"></span>
              <span class="error" > <?php echo $_SESSION['epemailErr'];?></span><br>
              <label>Contactno:</label>
              <input type="text" name="contactno" value="<?php echo $tutor['ContactNo']; ?> " id="contactno" onkeyup="checkContactno()" onblur="checkContactno()"> *<br><span id="contactnoErr"></span>
            <span class="error" ><?php echo $_SESSION['epcontactnoErr'];?></span><br>
			 
			  
              <input type="submit" name="submit" value="Save">
				  <hr>
                 </p>
				 
				
		          </fieldset>
	       
				
                </form> <br>
	

    
    </body>
</html>
<?php
if(isset($_SESSION['epnameEr']) || isset($_SESSION['epemailErr'])   || isset($_SESSION['epcontactnoErr']) )
 {
$_SESSION['epnameEr']=$_SESSION['epemailErr']=$_SESSION['epcontactnoErr']="";
 }

  ?>