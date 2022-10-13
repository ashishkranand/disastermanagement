<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="rosh.css" />
    <title>Disaster Safety</title>
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <style>
    body {
      font-family: Arial, Helvetica, sans-serif;font-size: 22px;
    }
    li{

      display: inline-block;
    }
    li:hover{
      color: #31B0D5;
    }
    </style>
</style>
  </head>
  <body background="1.jpg">

    <div class="topic">
      <ul><a href="../index.php" style="list-style-type: none; text-decoration: none;color: white;"><li>Home</li></a></ul>
    <h1 style="color:red;"> Disaster Safety Web Application</h1>
    </div>
    <div class="login-wrapper">
      <form action="" class="form">
        <h2>Login</h2>
        <div class="input-group">
          <input type="text" name="loginUser" id="loginUser" required />
          <label for="loginUser">User Name</label>
        </div>
        <div class="input-group">
          <input
            type="password"
            name="loginPassword"
            id="loginPassword"
            required
          />
          <label for="loginPassword">Password</label>
        </div>
        <input type="submit" value="Login" class="submit-btn" />
        <p align="left">Create Account <a href="./reg.php">Sign up</a></p>
      </form>
      <br> 
      <div class="iconbg">
        <div class="imm">
          <div class="imcard"><img class="icprop" id="one" src="https://png.pngtree.com/png-clipart/20201107/ourlarge/pngtree-earthquake-safety-sign-for-round-house-png-image_2387646.jpg" alt=""><br> EarthQuake</div>
          <div class="imcard"><img class="icprop" id="one" src="https://png.pngtree.com/png-clipart/20201208/original/pngtree-round-rainstorm-flood-safety-sign-png-image_5569936.jpg" alt=""><br>Flood</div>
          <div class="imcard"><img class="icprop" id="one"  src="https://png.pngtree.com/png-clipart/20201107/ourlarge/pngtree-house-fire-safety-sign-png-image_2387639.jpg" alt=""><br>Fire</div>
          <div class="imcard"><img class="icprop" id="one"  src="https://blogs.iadb.org/ciudades-sostenibles/wp-content/uploads/sites/17/2018/09/Photo-by-NASA-NOAA_Hurricane-Florence.jpg" alt=""><br>Hurricane</div>
         
        </div>
 </div>
    </div>
  </body>
</html>
