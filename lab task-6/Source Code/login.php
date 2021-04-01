<!DOCTYPE HTML>  
<html>
  <head >
  <title>login</title>
    </head >
    <body> 
		    <p> <h1 > Instructor  </h1> </p>
		       <h3 align= "right">
			      <hr>
		      <a href="home.php">  Home ||  </a> 
		       <a href="login.php">  Login ||  </a>  
		       <a href="registration.php">  Registration </a>
		   </h3>  	
    <?php       
  
 
    ?>        
		  <fieldset>
		  <legend>Login</legend>
          <form action="controller/login.php" method="POST" enctype="multipart/form-data"> 
		  
		  
		       <b> <label for="username"> Username : </label> </b>
			   <input type="text" name="username" >			  
               <br><br>
			  
			    <b> <label for="password"> Password : </label> </b>
                <input type="text" name="password" >              
                <br><br>
				
                <hr>
                <input type="checkbox" name="Remember me"> Remember Me <br><br>
                <input type="submit" name="submit" value="Submit"> 				
               			
							
         </form> <br><br>
				
            </fieldset>            		
         </form> 
	 
    </body>
</html>