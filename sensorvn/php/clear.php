<html>
<!
* Date : 20/09/2020 19:05:10
* Author: lxkhanh@bigclass.io
* Organization: BigClass JSC
* License: MIT
>
</html>
<?php
$servername = "localhost";
$username = "sensorvn.com";
$password = "sensorvn.com";
$dbname = "sensorvn.com";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
// sql to delete a record
$sql = "DELETE FROM `sensorvn.com` WHERE id";
if ($conn->query($sql) === TRUE) 
{
  echo "Record deleted successfully";
} 
else 
{
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>