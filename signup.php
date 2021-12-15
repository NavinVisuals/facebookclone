<?php

    include("classes/connect.php");
    include("classes/signup.php");
   
    $first_name = "";
    $last_name = "";
    $gender = "";
    $email = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $signup = new Signup();
        $result = $signup->evaluate($_POST);

        if($result != "")
        {
            echo "<div style='text-align:center;font-size:12px;color:white;background-color:gray'>";
            echo "<br>The following errors occured:<br><br>";
            echo $result;
            echo "</div>";
        }else{
            header("Location: login.php");
            die;
        }
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
            
    }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook | Signup</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <section>
        <div class="imgBx">
            <img src="images/loginBg.jpg">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Sign up</h2>
                <form method="post">
                    <div class="inputBx">
                        <span>First Name</span>
                        <input value="<?php echo $first_name ?>" name="first_name" type="text" placeholder="First name">
                    </div>
                    <div class="inputBx">
                        <span>Last Name</span>
                        <input value="<?php echo $last_name ?>" name="last_name" type="text" placeholder="Last name">
                    </div>
                    <div class="inputBx">
                    <span>Gender</span>
                    <br>
                    <select name="gender" id="text">
                        <option><?php echo $gender ?></option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    </div>
                    <div class="inputBx">
                        <span>Email</span>
                        <input value="<?php echo $email ?>" name="email" type="email" placeholder="Email">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input name="password" type="password" placeholder="Password">
                    </div>
                    <div class="inputBx">
                        <span>Retype Password</span>
                        <input name="password2" type="password" placeholder="Retype Password">
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Sign in" name="">
                    </div>
                    <div class="inputBx">
                        <p>Already have an account? <a href="#">Log in</a></p>
                    </div>
                </form>
                <h3>Login with social media</h3>
                <ul class="sci">
                    <li><img src="images/facebook.png"></li>
                    <li><img src="images/twitter.png"></li>
                    <li><img src="images/instagram.png"></li>
                </ul>
            </div>
        </div>
    </section>
    
</body>
</html>