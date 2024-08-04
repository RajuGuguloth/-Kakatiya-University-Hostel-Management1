<!DOCTYPE html>
<html>
<head>
  <title>Hostel Application Form</title>
  
</head>
<body>

 
   
<h1> <centre>Hostel Application Form </centre></h1><br>
     <form method="post" action="hai2.php" enctype="multipart/form-data">
     HallTicket:<input type="varchar" id="hallticketnumber" name="hallticketnumber" required><br><br>
     
     Name:<input type="name" name="Name1" required><br><br>
     FatherName:<input type="name" name="Name2" required><br><br>
     Adhar Number: <input type="number" id="Adhar Number" name="AdharNumber" required><br><br>
     Adhar Upload:<input type="file" id="file" name="file" accept="Image"><br><br>
     Address:<textarea id="address" name="address" required></textarea><br><br>
     Distance from college to native place:<input type="number" id="number" name="distance"><br><br>
     Passport size photo:<input type="file" id="file" name="ifile" accept="Image"><br><br>
     Gender:<input type="name" name="gen"><br><br>
     Course:<input type="text" id="course" name="course"><br><br>
     Year:<input type="number" id="year" name="year"><br><br>
     Email:<input type="email" name="email" id="email" required><br><br>
     Phone Number: <input type="text" id="phone" name="phone" required> <br><br>
   
     <input type="submit" name="upload" value="Submit Application"><br>
  
  </form>
</body>
</html>



