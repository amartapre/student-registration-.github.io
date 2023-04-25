  <?php include("connection.php");?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<title>Student  registration </title>

 </head>
 <body>
 
<div class="container">
	<form action="#" method="POST">
	<div class="title">
		Student Registration Form
	</div>
    
    <div class="form">
 	<div class="input_field">
		<label>First Name</label>
		<input type="text" class="input"name="fname" required>
	</div>

  <div class="input_field">
		<label>Last Name</label>
		<input type="text" class="input"name="lname"required>
	</div>

	<div class="input_field">
		<label for="exampleInputpassword1">Password</label>
		<input type="Password" class="input" name="pass"required>
	</div>

	<div class="input_field">
		<label for="exampleInputpassword1"> Confirm Password</label>
		<input type="Password" class="input"  name="conpassword"required>
	</div>

	<div class="input_field">
		<label>Gender</label>
		<div class="custom_select">
		<select name="gender"required>
			<option value="">Select</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>
	</div>
	</div>

	<div class="input_field">
		<label>Email id</label>
		<input type="text" class="input"name="email"required>
	</div>

	<div class="input_field">
		<label>Phone Number</label>
		<input type="text" class="input"name="Phone"required>
	</div>

	<div class="input_field">
		<label>Address</label>
		<textarea class="textarea"name="Address"required></textarea>
	</div>

	<div class="input_field terms">
		<label class="check">
		<input type="checkbox"required>	
		<span class="checkmark"></span>
       </label>
		<p>Agree to terms and conditions </p>
	</div>

  <div class="input_field">
    <input type="submit" value="submit" class="btn"name="sub">
   </div>
   <p >Amar</p> 

</div>
</form>
</div>

 </body>
 </html>

 <?php
 error_reporting(0);
  if($_POST['sub'])
  {
  	$fname=$_POST['fname'];
  	$lname=$_POST['lname'];
  	$password=$_POST['pass'];
  	$Confirmpassword=$_POST['conpassword'];
  	$gender=$_POST['gender'];
  	$email=$_POST['email'];
  	$Phone=$_POST['Phone'];
  	$Address=$_POST['Address'];

  	 
   
  	$query="INSERT INTO form values ('$fname','$lname','$password','$Confirmpassword','$gender','$email','$Phone','$Address')";
  	$data = mysqli_query($conn,$query);    
  
   if($data)
    {
 	 // echo "data inserted into database";
    }
   else
    {
    	echo "failed";
    }

 

 
  }
 ?>