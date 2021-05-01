<?php session_start(); ?> 
<!DOCTYPE HTML>  
<html>
  <head >
  <title>Registration </title>
  <?php require_once 'js/registration.php'; ?>
    </head >
    <body>
		      <p> <h1 > Tutor  </h1> </p>
		       <h3 align= "right">
			      
		     <a href="home.php">  Home ||  </a> 
		       <a href="login.php">  Login || </a>  
		       <a href="registration.php">  Registration </a>
		   </h3>  	


<?php



 if(!isset($_SESSION['nameEr']))
 {
   $_SESSION['nameEr']="";
 }

 if(!isset($_SESSION['passwordEr']))
 {
   $_SESSION['passwordEr']="";
 }


 
 if(!isset($_SESSION['usernameErr']))
 {
   $_SESSION['usernameErr']="";
 }

 if(!isset($_SESSION['cpasswordErr']))
 {
   $_SESSION['cpasswordErr']="";
 }
 if(!isset($_SESSION['contactnoErr']))
 {
   $_SESSION['contactnoErr']="";
 }

 if(!isset($_SESSION['emailErr']))
 {
   $_SESSION['emailErr']="";
 }
$name = $email =  $contactno="";
  $username=$password="";
 $confirmpassword="";


  ?>	  
           <br />  
                           
                <form align="center" action="controller/registration.php" method="POST" enctype="multipart/form-data" onsubmit="validateform()"> 
                     <fieldset>	
                     <legend>Registration </legend>					                    
                     <br />  

					  <label>Name:</label>  
                     <input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()"> <br> 
                     <span id="nameErr" ></span>
 <span class="error" >* <?php echo $_SESSION['nameEr'];?></span><br>		<br>	

                     <label>Email:</label>  
                     <input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()"><br>	
                     <span id="emailErr" ></span>
 <span class="error" >* <?php echo $_SESSION['emailErr'];?></span><br>	<br>

					  <label>Contactno:</label>  
                     <input type="text" name="contactno" id="contactno" onkeyup="checkContactno()" onblur="checkContactno()"><br>
                     <span id="contactnoErr" ></span>
 <span class="error" >* <?php echo $_SESSION['contactnoErr'];?></span><br><br>

					  <label>Username:</label>  
                     <input type="text" name="username" id="username" onkeyup="checkUserName()" onblur="checkUserName()"> <br>
                     <span id="usernameErr" >	</span>
 <span class="error" >* <?php echo $_SESSION['usernameErr'];?></span><br>	<br>

					 <label>Password:</label>  
                     <input type="password" name="password" id="password"  onkeyup="checkPass()" onblur="checkPass()" > <br>
                     <span id="passErr" ></span> 
 <span class="error" >* <?php echo $_SESSION['passwordEr'];?></span><br>	<br>

					 <label>Confirm Password:</label>  
                     <input type="password" name="confirmpassword"  id="confirmpassword"  onkeyup="checkConfirmpassword()" onblur="checkConfirmpassword()"> <br>
                     <span id="confirmpasswordErr" ></span>
 <span class="error" >* <?php echo $_SESSION['cpasswordErr'];?></span><br>	<br>				 
                    
                     <fieldset>
					             <legend>Gender</legend>
                                    
			                             <input type="radio" name="gender"  value="Male">Male
			                             <input type="radio" name="gender"  value="Female">Female	
										  <input type="radio" name="gender"  value="Other">Other						 
					 </fieldset><br>
					 <br>	
					 <fieldset>
					             <legend>Date of birth</legend>				                
			                          <input type="Date" name="dob" >				  
					  </fieldset>		
                      <br>					  
					  <input type="submit" name="submit" value="Append" class="btn btn-info" />    
					  
					  
					  				    	      					   
					  </fieldset>
                </form>  
            
           <br />  
      </body>  
 </html>  
 <?php
if(isset($_SESSION['passwordEr']) || isset($_SESSION['passwordEr']))
 {
 session_destroy();
 }

  ?>