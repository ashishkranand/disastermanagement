<html>
<head>
<title>Admin page of disaster management system</title>
<link rel="stylesheet" href="./style.css"/>
<script src="./login.js"></script>
</head>
<body>
<div class="container">
<div class="main">
<h2>Update status</h2>
<form method="POST" action="addstatus.php" enctype="multipart/form-data">
<label>id :</label>
<input type="text" name="id" id="id"/>
<label>Status :</label>
<input type="text" name="status" id="status"/>
<input type="submit" name="update" value="Update status" id="submit" style="width: 100%; height: 40px; background-color: red; color:white;border-radius:5px;font-size:larger;cursor: pointer;"/> <br> <br>
<a href="./adminhome.php"><input type="button" name="home" value="Home" id="submit" /></a>
</form>

</div>
</div>
<?php
$id=$_POST['id'];
$status=$_POST['status'];
$update=$_POST['update'];

if (isset($update)) {
if($id=="" || $status="")
{
    ?> <script>
            alert("Please insert record"); 
        </script><?php
}
else{
$DBConnect = mysqli_connect("localhost","root","","disastermanagement");
if(!$DBConnect)
	die("Not connected to the server".mysqli_connect_error());
else
$sql = "update help set status= '$status' where id=$id";
    if(mysqli_query($DBConnect,$sql)){
        ?> <script>
            alert("Status update successfully."); 
        </script><?php
    }
    else{
        die ("Sorry , Insertion failed.mysqli_error($DBConnect)");
    }
mysqli_close($DBConnect);
}
}

?>
</body>
</html>