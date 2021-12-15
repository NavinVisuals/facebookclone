<?php

    session_start();

    include("classes/connect.php");
    include("classes/login.php");
    include("classes/user.php");
    include("classes/post.php");

    $login = new Login();
    $user_data = $login->check_login($_SESSION['facebook_userid']);

    // for posting
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $post = new Post();
        $id = $_SESSION['facebook_userid'];
        $result = $post->create_post($id, $_POST);

        if($result == "")
        {
            header("Location: profile.php");
            die;
        }else
        {
            
            echo "<div style='text-align:center;font-size:12px;color:white;background-color:gray'>";
            echo "<br>The following errors occured:<br><br>";
            echo $result;
            echo "</div>";
        }
    }

    // collect posts
    $post = new Post();
    $id = $_SESSION['facebook_userid'];
    $posts = $post->get_posts($id);

    //collect friends
    $user = new User();
    $id = $_SESSION['facebook_userid'];
    $friends = $user->get_friends($id);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Facebook</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!--  ---------------------------------------------- TOP BAR -------------------------------------- -->
    
    <?php include("header.php"); ?>

    <!-- ------------------------------------------ COVER AREA ------------------------------------ -->
    <div class="profile-container">
        <?php
            $image = "images/cover_image.jpg";
            if(file_exists($user_data['cover_image']))
            {
                $image = $user_data['cover_image'];
            }
        ?>
            <img src="<?php echo $image ?>" class="cover-img">
            <div class="profile-details">
                <div class="pd-left">
                    <div class="pd-row">
                        <span style="font-size:12px;">

                            <?php
                                $image = "images/user_male.jpg";
                                if($user_data['gender'] == "Female")
                                {
                                    $image = "images/user_female.jpg";
                                }
                                if(file_exists($user_data['profile_image']))
                                {
                                    $image = $user_data['profile_image'];
                                }
                            ?>

                            <img src="<?php echo $image ?>" class="pd-image"><br/>

                            <a style="text-decoration:none;color:#f0f;" href="change_profile_image.php?change=profile">Change Profile</a><br/>
                            <a style="text-decoration:none;color:#f0f;" href="change_profile_image.php?change=cover">Change Cover</a>
                        </span>
                        <div>
                            <a href="index.php" style="text-decoration:none;"><h3><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?></h3></a>
                            <p>405 Friends - 8 Mutuals</p>
                            <img src="images/member-1.png">
                            <img src="images/member-2.png">
                            <img src="images/member-3.png">
                            <img src="images/member-4.png">
                        </div>
                    </div>
                </div>
                <div class="pd-right">

                    <button type="button"><img src="images/add-friends.png"> Friend</button>
                    <button type="button"><img src="images/message.png"> Message</button>
                    <br>
                    <a href="#"><img src="images/more.png"></a>
                </div>
            </div>

            <div class="profile-info">
                <div class="info-col">

                    <div class="profile-intro">
                        <h3>Intro</h3>
                        <p class="intro-text">Believe in yourself and you can do unbelievable things.
                            <img src="images/feeling.png">
                        </p>
                        <hr>
                        <ul>
                            <li><img src="images/profile-job.png"> Director at Navin Visuals Ltd.</li>
                            <li><img src="images/profile-study.png">Studied at Kumoun University Nanital</li>
                            <li><img src="images/profile-study.png">Went to DPS Delhi</li>
                            <li><img src="images/profile-home.png">Lives in Uttarakhand, India</li>
                            <li><img src="images/profile-location.png">From Uttarakhand, India</li>
                        </ul>
                    </div>

                    <div class="profile-intro">
                        <div class="title-box">
                            <h3>Photos</h3>
                            <a href="#">All Photos</a>
                        </div>
                        
                        <div class="photo-box">
                            <div><img src="images/photo1.png"></div>
                            <div><img src="images/photo2.png"></div>
                            <div><img src="images/photo3.png"></div>
                            <div><img src="images/photo4.png"></div>
                            <div><img src="images/photo5.png"></div>
                            <div><img src="images/photo6.png"></div>
                        </div>
                    </div>
                    <div class="profile-intro">
                        <div class="title-box">
                            <h3>Friends</h3>
                            <a href="#">All Friends</a>
                        </div>
                        <p>128 (10 mutual)</p>                        
                        <div class="friends-box">
                            
                        <?php
                        
                        if($friends)
                        {
                            foreach ($friends as $FRIEND_ROW) {
                                # code...

                                

                                include("user.php");
                            }
                        }

                    ?>
                            
                        </div>
                    </div>


                </div>




                <!-- -------------------------------Post colom -------------- -->
                <div class="post-col">
                    <div class="write-post-container">
                        <div class="user-profile">
                            <?php
                                $image = "images/user_male.jpg";
                                if($user_data['gender'] == "Female")
                                {
                                    $image = "images/user_female.jpg";
                                }
                                if(file_exists($user_data['profile_image']))
                                {
                                    $image = $user_data['profile_image'];
                                }
                            ?>
                            <img src="<?php echo $image ?>">

                            <div>
                                <p><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?></p>
                                <small>Public <i class="fas fa-caret-down"></i></small>
                            </div>
                        </div>
    
                        <div class="post-input-container">
                            <form method="post">
                                <textarea name="post" rows="3" placeholder="What's on your mind, <?php echo $user_data['first_name'] ?>?"></textarea>
                                <input id="post_button" type="submit" value="Post" style="background:#1289E6;color:white;margin:2px;padding:2px 7px;">
                            </form>
                            <div class="add-post-links">
                                <a href="#"><img src="images/live-video.png"> Live Video</a>
                                <a href="#"><img src="images/photo.png"> Photo/Video</a>
                                <a href="#"><img src="images/feeling.png"> Feeling Activity</a>
                            </div>
                            
                        </div>
    
                    </div>
                
                    <?php
                        
                        if($posts)
                        {
                            foreach ($posts as $ROW) {
                                # code...

                                $user = new User();
                                $ROW_USER = $user->get_user($ROW['userid']);

                                include("post.php");
                            }
                        }

                    ?>

                    
                </div>

            </div>



        </div>








        <div class="footer">
            <p>Copyright 2021 - Navin Visuals</p>
        </div>
       <script src="script.js"></script> 
    </body>
</html>