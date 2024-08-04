<!DOCTYPE html>
<html>
<head>
  <title>Hostel Application Form</title>
  
</head>
<body>

    <form action="send.php" method="post" enctype="multipart/form-data">
	<table width="600" border="3" cellspacing="2" cellpadding="2" align="center">
	<tr>
 <td><h1 align="center">Hostel Application Form</h1><br>
 
      <strong>Hall Ticket:</strong><input type="varchar" id="hallticketnumber" name="HallTicket" required><br><br>
      <strong>Name:</strong><input type="name" id="Name" name="Name" required><br><br>
      <strong>Father Name:</strong><input type="name" id="Name" name ="FatherName" required><br><br>
      <strong>Aadhaar Number:</strong> <input type="varchar" id="Adhar Number" name="AadharNumber" required><br><br>
      <strong>Aadhaar Upload:</strong><input type="file" id="file" name="AadhaarUpload" accept="Image"><br><br>
      <strong>Address:</strong><textarea id="address" name="Address" required></textarea><br><br>
      <strong>Distance from home</strong><input type="number" id="number" name="Distance"><br><br>
      <strong>Passport size photo:</strong><input type="file" id="file" name="Photo" accept="Image"><br><br>
      <strong>Gender:</strong> 
	  <input type="radio" name="Gender" value="M"/>Male
	  <input type="radio" name="Gender" value="F"/>Female<br><br>
      <strong>Course:</strong><input type="text" id="course" name="Course"><br><br>
      <strong>Year:</strong><input type="number" id="year" name="Year"><br><br>
      <strong>Email:</strong><input type="email" name="Email" id="email" required><br><br>
      <strong>Phone Number:</strong> <input type="text" id="phone" name="PhoneNumber" required> <br><br>
   <center><input type="submit" name="submit" value="Submit"></center><br><td>
   </tr>	
	</table>
  </form>
</body>
</html>