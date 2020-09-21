<html>
<!
* Date : 20/09/2020 19:05:10
* Author: lxkhanh@bigclass.io
* Organization: BigClass JSC
* License: MIT
></html>
<?php
    $dbusername = "sensorvn.com";  
    $dbpassword = "sensorvn.com";  
    try
    {
        $conn = new PDO('mysql:dbname=sensorvn.com;host=localhost',$dbusername,$dbpassword);
        if(!isset( $_GET["value"]))
        {
            throw new Exception('value not found');
        }
        $value = $_GET["value"];
        //
        $sql = "SELECT `data` FROM `sensorvn.com`";
        if($stmt = $conn->query($sql)->fetch())//Kiem tra du lieu co ton tai
        {
            //Du lieu co ton tai -> UPDATE du lieu
            $sql = "INSERT INTO `sensorvn.com` (`data`) VALUES (:value)";
            $stm = $conn->prepare($sql);
            $stm->execute(['value'=> $value]);
        }
        else 
        {
            $sql = "INSERT INTO `sensorvn.com` (`data`) VALUES (:value)";
            $stm = $conn->prepare($sql);
            $stm->execute(['value'=> $value]);
        }
    }
    catch (Exception $e)
    {

    }
?>
