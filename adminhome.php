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
            font-size: larger;
            border: 2px solid black;

        }
        th{
            border: 2px solid black;
            background-color: yellow;
            font-weight: bolder;
        }
        button{
            height: 30px;
            width: 80px;
        }
        .container{
            width: 90vw;
        }
        table{
            border: 5px solid black;
            outline: 5px solid red;
            outline-offset: 2px;
            margin-top: -40%;
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
            <a href="./index.php"><li>Home</li></a>
            <a href="./addstatus.php"><li>Update</li></a>
            <a href="./admin.php"><li>Logout</li></a>
        </ul>
    </nav>
       <div class="main1">
       <div class="container" id="basic">
       <!-- <form action="status.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" id="" placeholder="Enter your name">
    <input type="submit" value="Find">
    <br>
    <br><br><br>
    </form> -->
    <table border="2" align="center" width="100%">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Location</th>
            <th>Type</th>
            <th>Problem</th>
            <th>Status</th>
        </tr>
    </div>
</div>

<?php
// $name = $_POST['name'];
$DBConnect = mysqli_connect("localhost","root","");
mysqli_select_db($DBConnect,"disastermanagement");
if(!$DBConnect)
	die("Not connected to the server".mysqli_connect_error());
else
$sql = "SELECT * FROM help";
$retval = mysqli_query($DBConnect ,$sql);
if(mysqli_num_rows($retval)>0){
    while($row=mysqli_fetch_assoc($retval)){
        
        echo '
        
        <tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["name"].'</td>
        <td>'.$row["mobile"].'</td>    
        <td>'.$row["location"].'</td>
        <td>'.$row["type"].'</td>
        <td>'.$row["problem"].'</td>
        <td>'.$row["status"].'</td>
        </tr><br>
        <tr><br>
        <br>
        
        <br> <?php
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