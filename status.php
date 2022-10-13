<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Management System</title>
    <link rel="stylesheet" href="./css/homestyle.css">
    <style>
        /* table{
            margin-top: -20%;
        } */
        td{
            text-align: center;
            height: 30px;
        }
        button{
            height: 30px;
            width: 80px;
        }
        .container{
            width: 90vw;
        }
    </style>
</head>
<body>
    <div class="heading">
        <h1 class="head1">Disaster Management System</h1>
    </div>
    <div class="main">
    <nav class="navig">
        <ul>
            <a href="./home.php"><li>Home</li></a>
            <a href="./status.php"><li>status</li></a>
            <a href="./project/login.php"><li>Logout</li></a>
        </ul>
    </nav>
       <div class="main1">
       <div class="container" id="basic">
       <form action="status.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" id="" placeholder="Enter your name">
    <input type="submit" value="Find">
    <br>
    <br><br><br>
    </form>
    <table border="2" align="center" width="100%">
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Location</th>
            <th>Type</th>
            <th>Problem</th>
        </tr>
       </div>
       </div>
<?php
$name = $_POST['name'];
$DBConnect = mysqli_connect("localhost","root","");
mysqli_select_db($DBConnect,"disastermanagement");
if(!$DBConnect)
	die("Not connected to the server".mysqli_connect_error());
else
$sql = "SELECT * FROM help WHERE name ='$name'";
$retval = mysqli_query($DBConnect ,$sql);
if(mysqli_num_rows($retval)>0){
    while($row=mysqli_fetch_assoc($retval)){
        
        echo '
        
        <tr>
        <td>'.$row["name"].'</td>
        <td>'.$row["mobile"].'</td>    
        <td>'.$row["location"].'</td>
        <td>'.$row["type"].'</td>
        <td>'.$row["problem"].'</td>
        </tr><br>
        ';
   
    }
}
else{
    echo "0 results.";
}




mysqli_close($DBConnect);
?>
</table>
</body>
</html>