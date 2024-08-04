<html>
<head>
<title>Table with database</title>
</head>
<body>
  <center>
    <form action="" method="POST" enctype="multipart/form-data">
	<table>
	   <thead>
	   <tr>
           <th>HallTicketNo</th>
           <th>Name</th>
           <th>FatherName</th>
           <th>AdharNo</th>
           <th>AdharUpload</th>
           <th>Address</th>
           <th>distance</th>
           <th>Image</th>
           <th>Gender</th>
           <th>Course</th>
           <th>Year</th>
           <th>email</th>
           <th>Phno</th>
        </tr>
	   </thead>
	   <?php
	       $connection=mysqli_connect("localhost","root","");
		   $db=mysqli_select_db($connection,'team');
		   $query ="SELECT * FROM  registration ";
		   $query_run =mysqli_query($connection,$query);
		   while($row = mysqli_fetch_array($query_run))
		   {
			   ?>
			    <tr>
				   
				   <td> <?php echo  $row['Hall_Ticket']; ?> </td>
				   <td> <?php echo  $row['Name']; ?> </td>
				   <td> <?php echo  $row['Father_Name']; ?> </td>
				   <td> <?php echo  $row['Aadhar_Number']; ?> </td>
				   <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['Aadhaar_Upload']).'" alt="Image" style="width: 100px;height:100px;">'; ?> </td>

				   <td> <?php echo  $row['address']; ?> </td>
				   <td> <?php echo  $row['distance']; ?> </td>
				   <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['photo']).'" alt="Image" style="width: 100px;height:100px;">'; ?> </td>

				   <td> <?php echo  $row['gender']; ?> </td>
				   <td> <?php echo  $row['course']; ?> </td>
				   <td> <?php echo  $row['year']; ?> </td>
				   <td> <?php echo  $row['email']; ?> </td>
				   <td> <?php echo  $row['Phone_Number']; ?> </td>
				</tr>
			   <?php
		   }	   
	    ?>
	   </table>
	   </form>
	</center>
</body>
</html>
	   