<?php
$conn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($conn,'team');
	if(isset($_POST['submit']))
	{
	$hallticketnumber=$_POST['HallTicket'];
	$name=$_POST['Name'];
	$fathername=$_POST['FatherName'];
	$AdharNumber=$_POST['AadharNumber'];
	$file=addslashes(file_get_contents($_FILES["AadhaarUpload"]["tmp_name"]));
	$address=$_POST['Address'];
	$distance=$_POST['Distance'];
	$file1=addslashes(file_get_contents($_FILES["Photo"]["tmp_name"]));
	$gender=$_POST['Gender'];
	$course=$_POST['Course'];
	$year=$_POST['Year'];
	$email=$_POST['Email'];
	$phone=$_POST['PhoneNumber'];	
	$query= "INSERT INTO registration "."(Hall_Ticket, name, Father_Name, Aadhar_Number, Aadhaar_Upload, address, distance, photo, gender, course, year, email, Phone_Number)"."VALUES"."('$hallticketnumber', '$name', '$fathername', '$AdharNumber', '$file', '$address', '$distance', '$file1', '$gender', '$course', '$year', '$email', '$phone')";
	try{
     $query_run = mysqli_query($conn,$query);
    }
  catch(mysqli_sql_exception $e)
    {
     var_dump($e);
      exit;
   }
	if($query_run)
	{
		echo '<script type="text/javascript"> alert("Registration Successful")</script> ';
		echo 'Thank You';
	}
	else
	{
		echo '<script type="text/javascript"> alert("Registration Unuccessful")</script> ';
	}
	}
?>