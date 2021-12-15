<div class="post-container">
    <div class="post-row">
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
                <p><?php echo $ROW_USER['first_name'] . " " . $ROW_USER['last_name'] ?></p>
                <span>
                    <?php echo date('d M Y', strtotime($ROW_USER['date'])) ?>
                </span>
            </div>
        </div>
        <a href="#"><i class="fas fa-ellipsis-v"></i></a>
    </div>
    
    <p class="post-text">
        <?php echo $ROW['post'] ?>
    </a></p>
     <!--   <img src="images/feed-image-1.png" class="post-img">   -->

        <div class="post-row">
            <div class="activity-icons">
                <div><img src="images/like-blue.png">125</div>
                <div><img src="images/comments.png">89</div>
                <div><img src="images/share.png">8</div>
            </div>
            <div class="post-profile-icon">
                <img src="images/profile-pic.png"> <i class="fas fa-caret-down"></i>
            </div>
        </div>

</div>