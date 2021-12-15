<div>
    <?php

        $image = "images/user_male.jpg";
        if($FRIEND_ROW['gender'] == "Female")
        {
            $image = "images/user_female.jpg";
        }
    ?>    
    <img style="width:60px;height:80px;aligh:center" src="<?php echo $image ?>">
        <p>
            <?php echo $FRIEND_ROW['first_name'] . " " . $FRIEND_ROW['last_name'] ?>
        </p>
</div>