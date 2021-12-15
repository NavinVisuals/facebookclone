<?php

    $corner_image = "images/user_male.jpg";
        if($user_data['gender'] == "Female")
            {
                $image = "images/user_female.jpg";
            }
        if(isset($user_data))
        {
            $corner_image = $user_data['profile_image'];
        }
?>
<nav>
            <div class="nav-left">
                <!-- <img src="images/logo.png" class="logo"> -->
                <h2 style="color:white;font-size:30px;">
                   <a href="index.php" style="color:white;text-decoration:none;">Facebook</a>
                </h2>
                <ul>
                    <li><img src="images/notification.png" alt=""></li>
                    <li><img src="images/inbox.png" alt=""></li>
                    <li><img src="images/video.png" alt=""></li>
                </ul>
            </div>
            <div class="nav-right">

                <div class="search-box">
                    <img src="images/search.png">
                    <input type="text" placeholder="Search">
                </div>
                <div class="nav-user-icon online" onclick="settingsMenuToggle()">
                    
                    <img src="<?php echo $corner_image ?>">
                    
                </div>

            </div>
<!------------------------settings menu---------  -->
            <div class="settings-menu">

                <div id="dark-btn">
                    <span></span>
                </div>


                <div class="settings-menu-inner">
                    <div class="user-profile">
                    <a href="profile.php">
                        
                        <img src="<?php echo $corner_image ?>">

                    </a>
                        <div>
                            <p><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?></p>
                            <a href="profile.php">See your profile</a>
                        </div>
                    </div>
                    <hr>
                    <div class="user-profile">
                        <img src="images/feedback.png">
                        <div>
                            <p>Give Feedback</p>
                            <a href="#">Help us to improve new design</a>
                        </div>
                    </div>
                    <hr>
                    <div class="settings-links">
                        <img src="images/setting.png" class="settings-icon">
                        <a href="#">Settings & Privacy <img src="images/arrow.png" width="10px"></a>
                    </div>
                    <div class="settings-links">
                        <img src="images/help.png" class="settings-icon">
                        <a href="#">Help & Support <img src="images/arrow.png" width="10px"></a>
                    </div>
                    <div class="settings-links">
                        <img src="images/display.png" class="settings-icon">
                        <a href="#">Display & Accessibility <img src="images/arrow.png" width="10px"></a>
                    </div>
                    <div class="settings-links">
                        <img src="images/logout.png" class="settings-icon">
                        <a href="logout.php">Logout <img src="images/arrow.png" width="10px"></a>
                    </div>



                </div>
                
            </div>

        </nav>