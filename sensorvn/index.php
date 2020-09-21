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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/sensorvn.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<div style="margin: 15px 15px 15px 15px!important">


<!-- LOGO -->
<p style="margin:15px 15px 15px 15px" class="aligncenter">
    <img src="image/sensorvn.png" alt="centered image" width="480px" height="200px" />
</p>


<!-- TITLE -->
<div>
<h3>Sensor data <button type="button" class="button button1">Clear Data <i style="font-size:25px" class="fa fa-trash-o"></i></button></h3>
<script type="text/javascript">
    $(document).ready(function()
    {
        $("button").click(function()
        {
            $.ajax
            ({
                type: 'POST',
                url: 'php/clear.php',
            });
        });
    });
</script>
</div>


<!-- DATA -->
<script> 
$(document).ready(function () 
{
    ajax_call = function() 
    {
        $.ajax(
        { //create an ajax request to load_page.php
            type: "GET",
            url: "php/upload.php",
            dataType: "html", //expect html to be returned                
            success: function (response) 
            {
                $("#responsecontainer").html(response);
            }
        });
    };
    var interval = 1000;
    setInterval(ajax_call, interval);
});
</script>
<div class="div1" style="font-family:Arial,Helvetica,sans-serif;font-weight:500;font-size:25px;text-align:center;letter-spacing: 1px;" id="responsecontainer"></div>
</div>
</body>
</html>



