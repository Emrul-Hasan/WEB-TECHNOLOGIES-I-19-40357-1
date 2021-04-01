<!DOCTYPE HTML>  
<html>
  <head >
  <title>Registration </title>
    </head >
    <body>
		      <p> <h1 > Instructor  </h1> </p>
		       <h3 align= "right">
			      
		     <a href="home.php">  Home ||  </a> 
		       <a href="login.php">  Login || </a>  
		       <a href="registration.php">  Registration </a>
		   </h3>  	

<?php  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
          
      </head>  
      <body>  
           <br />  
                           
                <form align="center" action="controller/registration.php" method="POST" enctype="multipart/form-data"> 
                     <fieldset>	
                     <legend>Registration </legend>					                    
                     <br />  
					  <label>Username:</label>  
                     <input type="text" name="username" > <br>					 
					 <label>Password:</label>  
                     <input type="text" name="password" > <br>                      					  
					 <label>Confirm Password:</label>  
                     <input type="text" name="confirmPassword"> <br>					 
                     <label>Name:</label>  
                     <input type="text" name="name"> <br> 				            
                     <label>Email:</label>  
                     <input type="text" name="email" ><br>					                      
					  <label>Contactno:</label>  
                     <input type="text" name="contactno" ><br>
                     <fieldset>
					             <legend>Gender</legend>
                                    
			                             <input type="radio" name="gender"  value="Male">Male
			                             <input type="radio" name="gender"  value="Female">Female	
										  <input type="radio" name="gender"  value="Other">Other						 
					 </fieldset><br>
					 <hr/>
					 <fieldset>
					             <legend>Date of birth</legend>				                
			                          <input type="Date" name="dob" >				  
					  </fieldset>					 
					  <input type="submit" name="submit" value="Append" class="btn btn-info" />    
					  
					  <hr>
					  				    	      					   
					  </fieldset>
                </form>  
            
           <br />  
      </body>  
 </html>  