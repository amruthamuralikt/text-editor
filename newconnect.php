<?php

include_once 'connect.php';

	

if(isset($_POST['submit']))
{
  
  
	$usname=$conn->real_escape_string($_POST['uname']);
  if(empty($_POST['usname']))
  {
    $goback='index.php';
    echo"Please Enter something..<a href='".$goback."'>back to page</a>";
  }
 
else
{

$sql = "INSERT INTO nregister (name) VALUES ('$usname')";

mysqli_query($conn, $sql);

 echo "<h3>Welcome... you have submitted data successfully</h3>..."."<br><br>";

}}
else
 {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

			
mysqli_close($conn);
?>