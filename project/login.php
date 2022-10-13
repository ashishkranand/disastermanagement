 <?php
include("class/users.php");
$signup=new users;
$signin=new users;


?>
 
 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Disaster Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  
  
  $(document).ready(function() {

    $(document)[0].oncontextmenu = function() { return false; }

    $(document).mousedown(function(e) {
        if( e.button == 2 ) {
            alert('Sorry, this functionality is disabled!');
            return false;
        } else {
            return true;
        }
    });
});
  </script>
   <style>
	.navig{
    /* display: inline-block; */
    /* background-color: black;
    color: white; */
    padding: 1%;
}
.navig ul{
    display: flex;
}
.navig ul li{
    list-style-type: none;
}
a{
	padding: 1%;
    background-color: black;
    text-decoration: none;
    color: white;
    border-right: 2px solid white;
    font-size: 23px;
    font-weight: 600;
    letter-spacing: 2px;
}
a::first-letter{
    color: red;
}
a:hover{
	color: red;
}
   </style>
  </head>
  <body>
	<div class="container">
	   <div class="row">
	   <br>   
		    <div class="panel panel-info">
			  <div class="panel-heading" style="background-color: red; color: white;"><center><h1>Disaster Management System</h1></center></div>
		<nav class="navig">
        <ul>
            <a href="../index.php"><li>Home</li></a>
        </ul>
    </nav>
			</div>
		<div class="col-sm-5">
				<br>   
				<br>   
				<br>   
				<br>   
			<div class="panel panel-info">
				  <div class="panel-heading" style="background-color: red; color: white;font-size: larger;">login</div>
				  <div class="panel-body"style="background-color: black; color:white">
				      <?php
						if(isset($_GET['run'])&& $_GET['run']=="failed")
						{ 
					        echo "<mark>Check you email or password</mark>";
					    }
					       ?>
					  <form role="form" method="post" action="signin_sub.php">
						  <div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" name="e" id="email">
						  </div>
						  <div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" name="p" id="pwd">
						  </div>
						  <div class="checkbox">
							<label><input type="checkbox"> Remember me</label>
						  </div>
						  <button type="submit" class="btn btn-default" name="signin">Login</button>
					 </form>
				 </div> 
			</div>
		</div>
		<div class="col-sm-2"></div>
			<div class="col-sm-5">
				<br>
			
				
				<div class="panel panel-info">
					<div class="panel-heading" style="background-color: red; color: white; font-size: larger;">Signup</div>
						  <div class="panel-body" style="background-color: black; color:white;">
			            <?php
						if(isset($_GET['run'])&& $_GET['run']=="success")
						{ 
					        echo "<mark>Registrataion succesfull</mark>";
					    }
					       ?>
							  <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data" >
								  <div class="form-group">
									<label for="firstname">Name</label>
									<input type="text" class="form-control" name="n" id="firstname">
								  </div>
								
								  <div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" name="e" id="email">
								  </div>
								  <div class="form-group">
									<label for="pwd">Password:</label>
									<input type="password" class="form-control" name="p" id="pwd">
								  </div>
								  <div class="form-group">
									<label for="pwd">Password:</label>
									<input type="file" class="form-control" name="img">
								  </div>
								  <div class="checkbox">
									<label><input type="checkbox"> Remember me</label>
								  </div>
								  <button type="submit" class="btn btn-default" name="signup">Create account</button>
							 </form>
						 </div> 
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-footer">&copy; copyright for CA of PHP CA3<p style="float:right">Designed by Ashish kumar anand</p></div>
			</div>
		</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

   <script src="js/bootstrap.min.js"></script>
  </body>
</html>
 