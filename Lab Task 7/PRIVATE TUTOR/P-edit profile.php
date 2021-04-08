<!DOCTYPE html>
<html>
<head>
	<title>EDIT PROFILE</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	</style>
</head>
<body>
	<?php
	include('P-top.php');
	?>
	<br>
	<div class="container" align="left">
  		<div class="row">
  			<div class="col-12" align="center">
  				<?php
				include('P-link.php');
				?><br>
  			</div>


    		<div class="col-12">
    			<div id="bb"><br>
				      <img src="emon.jpg" height="200" width="200"><br><br>
				      <meta><b>Name :</b> <input type :"text" /></meta><br><br>
				      <meta><b>ID :</b> <input type :"text" /></meta><br><br>
				      <meta><b>EMAIL : <input type :"text" /></b></meta><br><br>
				      <meta><b>CONTACT NO : <input type :"text" /></b></meta><br><br>
				      <input type="submit" name="submit" value="Submit">
      			</div>
   			</div>
  		</div><br>
	</div>


	<?php
	include('footer.php');
	?>

</body>
</html>