<html>
<!
* Date : 20/09/2020 19:05:10
* Author: lxkhanh@bigclass.io
* Organization: BigClass JSC
* License: MIT
>
</html>
<?php
echo "Start.....</br>";
/***** Connect to database and create table *****/
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
// Create table
$sql = "CREATE TABLE `sensorvn.com`
(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  date_create DATETIME DEFAULT CURRENT_TIMESTAMP,
  date_update TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  data INT(4)
)";

if ($conn->query($sql) === TRUE)
{
  echo "Table logs created successfully";
} 
else 
{
  echo "Error creating table: " . $conn->error;
}
$conn->close();

?>
