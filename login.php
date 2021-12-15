<?php

session_start();

    include("classes/connect.php");
    include("classes/login.php");
   
    $email = "";
    $password = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $login = new Login();
        $result = $login->evaluate($_POST);

        if($result != "")
        {
            echo "<div style='text-align:center;font-size:12px;color:white;background-color:gray'>";
            echo "<br>The following errors occured:<br><br>";
            echo $result;
            echo "</div>";
        }else
        {
            header("Location: profile.php");
            die;
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        
            
    }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook | Login</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <section>
        <div class="imgBx">
            <img src="images/loginBg.jpg">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Login</h2>
                <form method="post">
                    <div class="inputBx">
                        <span>Email</span>
                        <input value="<?php echo $email ?>" name="email" type="email" placeholder="Email">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input name="password" value="<?php echo $password?>" type="password" placeholder="Password">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name="">Remember me</label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Sign in" id="button">
                    </div>
                    <div class="inputBx">
                        <p>Don't have an account? <a href="#">Sign up</a></p>
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