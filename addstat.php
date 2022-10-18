<?php
$id=$_POST['id'];
$status=$_POST['status'];
if($id=="" || $status="")
{
    echo ("Please insert record in textbox.");
}
else{
$DBConnect = mysqli_connect("localhost","root","","disastermanagement");
if(!$DBConnect)
	die("Not connected to the server".mysqli_connect_error());
else
$sql = "update table help set status= '$status' where id='$id'";
    if(mysqli_query($DBConnect,$sql)){
        echo "Status Updated";
    }
    else{
        die ("Sorry , Insertion failed.mysqli_error($DBConnect)");
    }
mysqli_close($DBConnect);
}

?>