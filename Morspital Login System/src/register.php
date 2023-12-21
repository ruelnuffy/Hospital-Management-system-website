<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","morspital");
if(isset($_POST['register_btn']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $hname=mysqli_real_escape_string($db,$_POST['hname']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']);  
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result=mysqli_query($db,$query);
      if($result)
      {
     
        if( mysqli_num_rows($result) > 0)
        {
                
                echo '<script language="javascript">';
                echo 'alert("Username already exists")';
                echo '</script>';
        }
        
          else
          {
            
            if($password==$password2)
            {           //Create User
                $password=md5($password); //hash password before storing for security purposes
                $sql="INSERT INTO users(username, email, hname, password ) VALUES('$username','$email','$hname','$password')"; 
                mysqli_query($db,$sql);  
                $_SESSION['message']="You are now logged in"; 
                $_SESSION['username']=$username;
                header("location:../get-ready-master");  //redirect home page
            }
            else
            {
                $_SESSION['message']="The two password do not match";   
            }
          }
      }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Morspital</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    
}
body{
    background-color: white;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #d91760,
        #d91760
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(112, 112, 112, 0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #252525;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #d91760;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #313131;
  text-align: center;
}
.social div:hover{
  background-color: rgba(223, 177, 177, 0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="register.php" class="tab" style="height: 950px;">
        
      <img src="./MORS.png"  style="width: 100%; height: auto;">
     <center> <h2 style="color:black;">Register</h2></center>
        <label for="username" style="color: #080710;">Username</label>
        <input style="color:black;" type="text" placeholder="Username" id="username" name="username" required>

        <label for="email" style="color: #080710;">E-mail</label>
        <input style="color:black;" type="email" placeholder="Email" id="email" name="email" required>

        <label for="hname" style="color: #080710;">Hospital Name</label>
        <input style="color:black;" type="text" placeholder="Hospital name" id="hname" name="hname" required>

        <label for="password" style="color: #080710;">Password</label>
        <input style="color:black;" type="password" placeholder="Password" id="password" name="password" required>

        <label for="cpassword" style="color: #080710;">Confirm Password</label>
        <input style="color:black;" type="password" placeholder="Confirm Password" id="password2" name="password2" required>
        <button name="register_btn">Register</button>
        <div class="social">
          <div class="go"><i class="fab fa-google" style="color:black;"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook" style="color:black;"></i>  Facebook</div>
        </div>
        <p style="color:black;">Already Have an Acoount? <a  style="color:black;" href="./index.php">Login Here</a></p>

    </form>
    
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
</body>
</html>
