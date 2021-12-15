<?php

    session_start();

    include("classes/connect.php");
    include("classes/login.php");
    include("classes/user.php");
    include("classes/post.php");
    include("classes/image.php");

    $login = new Login();
    $user_data = $login->check_login($_SESSION['facebook_userid']);

    // for posting
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        if(isset($_FILES['file'] ['name']) && $_FILES['file'] ['name'] != "")
        {

          
            if($_FILES['file'] ['type'] == "image/jpeg")
            {
                $allowed_size = (1024 * 1024) * 8;
                if($_FILES['file'] ['size'] < $allowed_size)
                {
                    //everything is fine
                    $folder = "uploads/" . $user_data['userid'] . "/";
                    
                    //create folder
                    if(!file_exists($folder))
                    {
                        mkdir($folder,0777,true);
                    }

                    $image = new Image();

                    $filename = $folder . $image->generate_filename(15) . ".jpg";
                    move_uploaded_file($_FILES['file'] ['tmp_name'], $filename);

                    $change = "profile";
                        
                        if(isset($_GET['change']))
                        {
                            $change = $_GET['change'];
                        }

                    

                    if($change == "cover")
                    {
                        if(file_exists($user_data['cover_image']))
                        {
                            unlink($user_data['cover_image']);
                        }
                        $image->crop_image($filename, $filename, 1905, 601);
                    
                    }else
                    {
                        if(file_exists($user_data['profile_image']))
                        {
                            unlink($user_data['profile_image']);
                        }
                        $image->crop_image($filename, $filename, 800, 800);
                    }
                    if(file_exists($filename))
                    {
                        $userid = $user_data['userid'];
                        
                        if($change == "cover")
                        {
                            $query = "update users set cover_image = '$filename' where userid = '$userid' limit 1";
                        }else
                        {
                            $query = "update users set profile_image = '$filename' where userid = '$userid' limit 1";
                        }
                        
                        

                        $DB = new Database();
                        $DB->save($query);

                        header("Location: profile.php");
                        die;
                    }
                }else
                {
                    echo "<div style='text-align:center;font-size:12px;color:white;background-color:gray'>";
                    echo "<br>The following errors occured:<br><br>";
                    echo "Image size should be 8MB or less!";
                    echo "</div>";
                }
            }else
            {
                echo "<div style='text-align:center;font-size:12px;color:white;background-color:gray'>";
            echo "<br>The following errors occured:<br><br>";
            echo "Only images of Jpeg type are allowed!";
            echo "</div>";
            }


            
        }else
        {
            echo "<div style='text-align:center;font-size:12px;color:white;background-color:gray'>";
            echo "<br>The following errors occured:<br><br>";
            echo "Please add a valid image!";
            echo "</div>";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile Image | Facebook</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    <?php include("header.php"); ?>

    <div class="main-container">

    
        <div style="display: flex;">
            
            <div style="min-height: 400px; flex: 2.5; padding: 20px;">

                <form method="post" enctype="multipart/form-data">
                    <div style="border: solid thin #aaa; padding: 10px; background-color:white; ">

                    <input type="file" name="file">
                    <input style="float: right; background-color: #405d9b; border: none; color: white; padding: 4px; font-size: 14px; border-radius: 2px; width: 100px;" type="submit" value="Change" id="post_button">
                    
                    </div>
                    <div style="text-align:center;">
                    <br><br>
                        <?php
                            
                            if(isset($_GET['change']) && $_GET['change'] == "cover")
                            {
                                $change = "cover";
                                echo "<img src='$user_data[cover_image]' style='max-width:500px;'>";
                            }else
                            {
                                echo "<img src='$user_data[profile_image]' style='max-width:500px;'>";
                            }
                            
                        ?>
                    </div>
                </form>
            </div>

        </div>

    </div>
    
        <script src="script.js"></script> 
</body>
</html>