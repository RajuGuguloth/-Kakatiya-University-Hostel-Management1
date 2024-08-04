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
		   $db=mysqli_select_db($connection,'btech');
		   $query ="SELECT * FROM  hostel ";
		   $query_run =mysqli_query($connection,$query);
		   while($row = mysqli_fetch_array($query_run))
		   {
			   ?>
			    <tr>
				   
				   <td> <?php echo  $row['Hallticketno']; ?> </td>
				   <td> <?php echo  $row['Name']; ?> </td>
				   <td> <?php echo  $row['Fathername']; ?> </td>
				   <td> <?php echo  $row['AdharNo']; ?> </td>
				   <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['AdharUpload']).'" alt="Image" style="width: 100px;height:100px;">'; ?> </td>

				   <td> <?php echo  $row['Address']; ?> </td>
				   <td> <?php echo  $row['distance']; ?> </td>
				   <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['Image']).'" alt="Image" style="width: 100px;height:100px;">'; ?> </td>

				   <td> <?php echo  $row['Gender']; ?> </td>
				   <td> <?php echo  $row['course']; ?> </td>
				   <td> <?php echo  $row['Year']; ?> </td>
				   <td> <?php echo  $row['email']; ?> </td>
				   <td> <?php echo  $row['Phno']; ?> </td>
				</tr>
			   <?php
		   }	   
	    ?>
	   </table>
	   </form>
	</center>
</body>
</html>
	   