<!DOCTYPE html>
<html>
<head>
	<title>Disaster Safety </title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</head>
<body background="1.jpg">

<div class="wrapper">
	<div class="r_form_wrap">
		<ul><a href="../index.php" style="list-style-type: none; text-decoration: none;color: white;"><li>Home</li></a></ul>
		

		<div class="r_form">
			<form action="../databases/reginsert.php" method="POST" class="form">
				<h2> Registration Form</h2>
				<div class="input_wrap">
					<label for="yourname">Your Name</label>
					<div class="input_item">
						<span class="icon">
							<ion-icon name="person-sharp"></ion-icon>
						</span>
						<input type="text" name="name" class="input" id="yourname">
					</div>
				</div>
				<div class="input_wrap">
					<label for="emailaddress">Email Address</label>
					<div class="input_item">
						<span class="icon">
							<ion-icon name="mail-sharp"></ion-icon>
						</span>
						<input type="email" name="email" class="input" id="emailaddress">
						
					</div>
					<br>
	
					<div class="input_wrap">
						<label for="Aadhar Number">Aadhar Number</label>
						<div class="input_item">
							<span class="icon">
								<ion-icon name="card"></ion-icon>
							</span>
							<input type="number" name="aadhaar" class="input" id="Aadhar">
						</div>
					</div>
					<div class="input_wrap">
						<label for="DOB">Date of birth</label>
						<div class="input_item">
							<span class="icon">
								<ion-icon name="calendar"></ion-icon>
							</span>
							<input type="date" name="dob" class="input" id="DOB">
						</div>
					</div>

				</div>
				<div class="input_wrap">
					<label for="password">Password</label>
					<div class="input_item">
						<span class="icon">
							<ion-icon name="key-sharp"></ion-icon>
						</span>
						<input type="password" name="password" class="input" id="password">
					</div>
				</div>
				<div class="input_wrap">
					<label for="confirmpassword">Confirm Password</label>
					<div class="input_item">
						<span class="icon">
							<ion-icon name="key-sharp"></ion-icon>
						</span>
						<input type="password" name="cnfpassword" class="input" id="confirmpassword">
					</div>
				</div>
				<div class="input_wrap">
					<label for="phone">Phone</label>
					<div class="input_item">
						<span class="icon">
							<ion-icon name="call-sharp"></ion-icon>
						</span>
						<input type="number" name="phone" class="input" id="phone">
					</div>
				</div>
				<div class="input_wrap">
					<label>Gender</label>
					<div class="input_radio">
						<div class="input_radio_item">
							<input type="radio" id="male" name="gender" class="radio" value="male">
							<label for="male" class="radio_mark">
								<ion-icon class="i" name="male-sharp"></ion-icon>
							Male</label>
						</div>
						<div class="input_radio_item">
							<input type="radio" id="female" name="gender" class="radio" value="female">
							<label for="female" class="radio_mark">
								<ion-icon class="i" name="female-sharp"></ion-icon>
								Female</label>
						</div>
						<div class="input_radio_item">
							<input type="radio" id="others" name="gender" class="radio" value="others">
							<label for="others" class="radio_mark">
								<ion-icon class="i" name="male-female-sharp"></ion-icon>
								Others</label>
						</div>
					</div>
				</div>

				<input type="submit" class="button" name="register" value="Register">
			</form>
		</div>
	</div>
	
 </div>
</div>
</div>


</body>
</html>