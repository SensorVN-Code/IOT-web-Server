<html>
<!
* Date : 20/09/2020 19:05:10
* Author: lxkhanh@bigclass.io
* Organization: BigClass JSC
* License: MIT
></html>
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="css/sensorvn.css">

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
    // Read data database
    $sql = "SELECT `date_create`,`date_update`,`data` FROM `sensorvn.com`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            echo  "<date>".date_format( date_create($row["date_update"]),"d/m/Y-H:i:s"."</date>");
            echo  "<data> - Data : ".$row["data"]."</data>"."</br>";
        }
    } 
    $conn->close();
?>

</body>
</html>
