 <?php
 session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}else{
    if($_SESSION['role'] == 'user'){
        header("location:user.php");
    }else{
    /*if else{
        if ($_SESSION['role']=='admin'){
          header("location:admin.php");
        */
        
      
  $host ="localhost";
  $user="root";
  $pass="";
  $db="Useer";

  $data= mysqli_connect($host,$user,$pass,$db);
  if($data===false)
  {
    die("connection_error");
  }

  if($_SERVER["$REQUEST_METHOD"]=="POST")
  {
    $username=$_POST["user"];
    $password=$_POST["pass"];


    $sql="select* from login where username='".$user."' AND password='".$pass."'";
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user")
    {
      header("location:user.php");
    }
    if($row["usertype"]=="admin")
    {
      header("location:admin.php");
    }
    else{
      echo"username or password incorrect";
    }

  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
  <title>Login</title>
  <style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background: url('login.jpg') no-repeat center;
  background-size: cover;
  font-family: sans-serif;
}
.login-wrapper {
  height: 100vh;
  width: 100vw;
  display: flex;
  justify-content: center;
  align-items: center;
}
.form {
  position: relative;
  width: 100%;
  max-width: 380px;
  padding: 80px 40px 40px;
  background: rgba(0,0,0,0.7);
  border-radius: 10px;
  color: #fff;
  box-shadow: 0 15px 25px rgba(0,0,0,0.5);
}
.form::before {
  content:'';
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: rgba(255,255,255, 0.08);
  transform: skewX(-26deg);
  transform-origin: bottom left;
  border-radius: 10px;
  pointer-events: none;
}
.form img {
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
  width: 100px;
  background: rgba(255,255,255, 0.8);
  border-radius: 50%;
}
.form h2 {
  text-align: center;
  letter-spacing: 1px;
  margin-bottom: 2rem;
  color: maroon;
}
.form .input-group {
  position: relative;
}
.form .input-group input {
  width: 100%;
  padding: 10px 0;
  font-size: 1rem;
  letter-spacing: 1px;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background-color: transparent;
  color: inherit;
}
.form .input-group label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 1rem;
  pointer-events: none;
  transition: .3s ease-out;
}
.form .input-group input:focus + label,
.form .input-group input:valid + label {
  transform: translateY(-18px);
  color: maroon;
  font-size: .8rem;
}
.submit-btn {
  display: block;
  margin-left: auto;
  border: none;
  outline: none;
  background: maroon;
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}
.forgot-pw {
  color: inherit;

}


#forgot-pw {
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  top: 0;
  left: 0;
  right: 0;
  height: 0;
  z-index: 1;
  background: #fff;
  opacity: 0;
  transition: 0.6s;
}
#forgot-pw:target {
  height: 100%;
  opacity: 1;
  background: url('reset.jpg') no-repeat center;
  background-size: cover;
}
.close {
  position: absolute;
  right: 1.5rem;
  top: 0.5rem;
  font-size: 2rem;
  font-weight: 900;
  text-decoration: none;
  color: inherit;
}
  </style>
  
</head>
<body>
 
<div class="login-wrapper">
    
    <form  class="form">
      <center>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" id="IconChangeColor" height="81" width="81"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M419.2 25.6L496 128H576C593.7 128 608 142.3 608 160V224C625.7 224 640 238.3 640 256C640 273.7 625.7 287.1 608 288C578.8 249.1 532.3 224 480 224C427.7 224 381.2 249.1 351.1 288H288C258.8 249.1 212.3 224 160 224C107.7 224 61.18 249.1 31.99 288C14.32 287.1 0 273.7 0 256C0 238.3 14.33 224 32 224V160C32 142.3 46.33 128 64 128H224V48C224 21.49 245.5 0 272 0H368C388.1 0 407.1 9.484 419.2 25.6H419.2zM288 128H416L368 64H288V128zM168 256C180.1 256 190.1 264.9 191.8 276.6C199.4 278.8 206.7 281.9 213.5 285.6C222.9 278.5 236.3 279.3 244.9 287.8L256.2 299.1C264.7 307.7 265.5 321.1 258.4 330.5C262.1 337.3 265.2 344.6 267.4 352.2C279.1 353.9 288 363.9 288 376V392C288 404.1 279.1 414.1 267.4 415.8C265.2 423.4 262.1 430.7 258.4 437.5C265.5 446.9 264.7 460.3 256.2 468.9L244.9 480.2C236.3 488.7 222.9 489.5 213.5 482.4C206.7 486.1 199.4 489.2 191.8 491.4C190.1 503.1 180.1 512 167.1 512H151.1C139.9 512 129.9 503.1 128.2 491.4C120.6 489.2 113.3 486.1 106.5 482.4C97.09 489.5 83.7 488.7 75.15 480.2L63.83 468.9C55.28 460.3 54.53 446.9 61.58 437.5C57.85 430.7 54.81 423.4 52.57 415.8C40.94 414.1 31.1 404.1 31.1 392V376C31.1 363.9 40.94 353.9 52.57 352.2C54.81 344.6 57.85 337.3 61.58 330.5C54.53 321.1 55.28 307.7 63.83 299.1L75.15 287.8C83.7 279.3 97.09 278.5 106.5 285.6C113.3 281.9 120.6 278.8 128.2 276.6C129.9 264.9 139.9 255.1 151.1 255.1L168 256zM160 432C186.5 432 208 410.5 208 384C208 357.5 186.5 336 160 336C133.5 336 112 357.5 112 384C112 410.5 133.5 432 160 432zM448.2 276.6C449.9 264.9 459.9 256 472 256H488C500.1 256 510.1 264.9 511.8 276.6C519.4 278.8 526.7 281.9 533.5 285.6C542.9 278.5 556.3 279.3 564.9 287.8L576.2 299.1C584.7 307.7 585.5 321.1 578.4 330.5C582.1 337.3 585.2 344.6 587.4 352.2C599.1 353.9 608 363.9 608 376V392C608 404.1 599.1 414.1 587.4 415.8C585.2 423.4 582.1 430.7 578.4 437.5C585.5 446.9 584.7 460.3 576.2 468.9L564.9 480.2C556.3 488.7 542.9 489.5 533.5 482.4C526.7 486.1 519.4 489.2 511.8 491.4C510.1 503.1 500.1 512 488 512H472C459.9 512 449.9 503.1 448.2 491.4C440.6 489.2 433.3 486.1 426.5 482.4C417.1 489.5 403.7 488.7 395.1 480.2L383.8 468.9C375.3 460.3 374.5 446.9 381.6 437.5C377.9 430.7 374.8 423.4 372.6 415.8C360.9 414.1 352 404.1 352 392V376C352 363.9 360.9 353.9 372.6 352.2C374.8 344.6 377.9 337.3 381.6 330.5C374.5 321.1 375.3 307.7 383.8 299.1L395.1 287.8C403.7 279.3 417.1 278.5 426.5 285.6C433.3 281.9 440.6 278.8 448.2 276.6L448.2 276.6zM480 336C453.5 336 432 357.5 432 384C432 410.5 453.5 432 480 432C506.5 432 528 410.5 528 384C528 357.5 506.5 336 480 336z" id="mainIconPathAttribute" fill="white  "></path></svg>
      </center>
      <h2>Log in</h2>
      <div class="input-group">
        <input type="text" name="user" id="loginUser" required>
        <label for="loginUser">User Name</label>
      </div>
      <div class="input-group">
        <input type="password" name="pass" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <input type="submit" value="Login" name="submit" class="submit-btn">
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
    </form>

    <div id="forgot-pw" >
      
      <form class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>  
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label> 
        </div>
        <input type="submit" value="Submit" class="submit-btn">
      </form> 
    </div>
  </div>

   
</body>
</html>
<?php
}
}

?>