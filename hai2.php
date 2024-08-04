<?php
$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'btech');
if(isset($_POST['upload']))
{
  $file1=addslashes(file_get_contents($_FILES["file"]["tmp_name"]));
  $file2=addslashes(file_get_contents($_FILES["ifile"]["tmp_name"]));
  $Hallticketno=$_POST['hallticketnumber'];
  $Name= $_POST['Name1'];
  $Fathername=$_POST['Name2'];
  $AdharNo=$_POST['AdharNumber'];
  $Address=$_POST['address'];
  $distance=$_POST['distance'];
  $course=$_POST['course'];
  $gender=$_POST['gen'];
  $Year=$_POST['year'];
  $email=$_POST['email'];
  $Phno=$_POST['phone'];
  $query = "INSERT INTO hostel"."(Hallticketno,Name,Fathername,AdharNo,AdharUpload,Address,distance,Image,Gender,course,Year,email,Phno)"." VALUES"."('$Hallticketno','$Name','$Fathername','$AdharNo','$file1','$Address','$distance','$file2','$gender','$course','$Year','$email','$Phno')";
 try{
 $query_run = mysqli_query($connection,$query);
    }
  catch(mysqli_sql_exception $e)
    {
     var_dump($e);
      exit;
   }
  if($query_run)
  {
    echo '<script type="text/javascript"> alert("Applied Successfully") </script>';
  }
  else
  {
    echo '<script type="text/javascript"> alert(" not Applied Successfully") </script>';
  }
}
?>
