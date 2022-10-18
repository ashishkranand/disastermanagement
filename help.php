<?php
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$location=$_POST['location'];
$type=$_POST['type'];
$problem=$_POST['problem'];
if($name=="" || $mobile="" ||$location="" || $type="" || $problem="")
{
    echo ("Please insert record in textbox.");
}
else{
$DBConnect = mysqli_connect("localhost","root","","disastermanagement");
if(!$DBConnect)
	die("Not connected to the server".mysqli_connect_error());
else
$sql = "Insert into help(name,mobile,location,type,problem) VALUES
('$name','$mobile','$location','$type','$problem')";
    if(mysqli_query($DBConnect,$sql)){
        echo "$type";
        ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Management System</title>
    <link rel="stylesheet" href="./css/homestyle.css">
</head>
<body>
    <div class="heading">
        <h1 class="head1">Disaster Management System</h1>
    </div>
    <div class="main">
    <nav class="navig">
        <ul>
            
            <a href="./status.php"><li>status</li></a>
            <a href="./project/login.php"><li>Logout</li></a>
        </ul>
    </nav>
       <div class="main1">
       <div class="container" id="basic">
            <h2>Your response is submitted successfully , our team will contact you shortly.Thank you for asking us for help, Be patience..</h2>  
            <br><h2>You can contact us on 8434463000.</h2>
            <h2>Thank you</h2>

        </div>
       </div>
    



    
</body>
</html>

<?php
    }
    else{
        die ("Sorry , Insertion failed.mysqli_error($DBConnect)");
    }
mysqli_close($DBConnect);
}

?>