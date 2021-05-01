<!DOCTYPE HTML>  
<html>
  <head >
  <title>login</title>
  <?php require_once 'js/login.php'; ?>
    </head >
    <body> 
		    <p> <h1 > Tutor  </h1> </p>
		       <h3 align= "right">
			      <hr>
		      <a href="home.php">  Home ||  </a> 
		       <a href="login.php">  Login ||  </a>  
		       <a href="registration.php">  Registration </a>
		   </h3>  	
    <?php       
  session_start();

 if(!isset($_SESSION['nameErr']))
 {
   $_SESSION['nameErr']="";
 }

 if(!isset($_SESSION['passwordErr']))
 {
   $_SESSION['passwordErr']="";
 }

 $name=$password="";
 
    ?>        
		  <fieldset>
		  <legend>Login</legend>
          <form action="controller/login.php" method="POST" onsubmit="validateform()" enctype="multipart/form-data"> 
		  
		  
		       <b> <label for="username"> Username : </label> </b>
			   <input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()">	
			   <span id="nameErr"></span>	
               <span > <?php echo $_SESSION['nameErr'];?></span><br>			   
               <br><br>
			  
			    <b> <label for="password"> Password : </label> </b>
                <input type="password" name="password" id="password" onkeyup="checkPassword()" onblur="checkPassword()" >  
                <span id="passwordErr"></span> 
				<span  > <?php echo $_SESSION['passwordErr'];?></span><br>
                <br><br>
				
                <hr>
                <input type="checkbox" name="Remember me"> Remember Me <br><br>
                <input type="submit" name="submit" value="Submit"> 				
               			
							
         </form> <br><br>
				
            </fieldset>            		
         </form> 
	 
    </body>
</html>
<?php
if(isset($_SESSION['passwordErr']) || isset($_SESSION['passwordErr']))
 {
 session_destroy();
 }

  ?>