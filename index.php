<?php

    session_start();

    include("classes/connect.php");
    include("classes/login.php");
    include("classes/user.php");
    include("classes/post.php");

    $login = new Login();
    $user_data = $login->check_login($_SESSION['facebook_userid']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Timeline - Navin Visuals</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
</head>

<body>

    <?php include("header.php"); ?>

    <div class="container">
        <!------------------------left-sidebar---------  -->
        <div class="left-sidebar">
            <div class="imp-links">
                <a href="#"><img src="images/news.png">Latest News</a>
                <a href="#"><img src="images/friends.png">Friends</a>
                <a href="#"><img src="images/group.png">Groups</a>
                <a href="#"><img src="images/marketplace.png">Marketplace</a>
                <a href="#"><img src="images/watch.png">Watch</a>
                <a href="#">See more</a>
            </div>
            <div class="shortcut-links">
                <p>Your Shortcuts</p>
                <a href="#"><img src="images/shortcut-1.png">Web Developers</a>
                <a href="#"><img src="images/shortcut-2.png">Web Design Course</a>
                <a href="#"><img src="images/shortcut-3.png">Navin Visuals</a>
                <a href="#"><img src="images/shortcut-4.png">Video Editing</a>
            </div>
        </div>
        <!------------------------main-content---------  -->
        <div class="main-content">

            <div class="story-gallery">
                <div class="story story1">
                    <img src="images/upload.png">
                    <p>Post Story</p>
                </div>
                <div class="story story2">
                    <img src="images/member-1.png">
                    <p>Alison</p>
                </div>
                <div class="story story3">
                    <img src="images/member-2.png">
                    <p>Jackson</p>
                </div>
                <div class="story story4">
                    <img src="images/member-3.png">
                    <p>Mark</p>
                </div>
                <div class="story story5">
                    <img src="images/member-4.png">
                    <p>Samona</p>
                </div>
            </div>

            <div class="write-post-container">
                <div class="user-profile">
                    <img src="images/profile-pic.png">
                    <div>
                        <p>Navin Visuals</p>
                        <small>Public <i class="fas fa-caret-down"></i></small>
                    </div>
                </div>

                <div class="post-input-container">
                    <textarea rows="3" placeholder="What's on your mind, Navin?"></textarea>
                    <div class="add-post-links">
                        <a href="#"><img src="images/live-video.png"> Live Video</a>
                        <a href="#"><img src="images/photo.png"> Photo/Video</a>
                        <a href="#"><img src="images/feeling.png"> Feeling Activity</a>
                    </div>
                </div>

            </div>

            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="images/profile-pic.png">
                        <div>
                            <p>Navin Visuals</p>
                            <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </div>

                <p class="post-text">Subscribe <span>@Navin Visuals </span> Youtube channel to learn Video editing on
                    Edius and Premiere Pro and become Professional on video editing work.
                    <a href="#">#NavinVisuals</a> <a href="#">#YouTubeChannel</a>
                </p>
                <img src="images/feed-image-1.png" class="post-img">

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
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="images/profile-pic.png">
                        <div>
                            <p>Navin Visuals</p>
                            <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </div>

                <p class="post-text">Like and share this video of <span>@Navin Visuals </span> and support us and our
                    team for good work motivation so we will make awsome projects like this only for you.
                    <a href="#">#NavinVisuals</a> <a href="#">#YouTubeChannel</a>
                </p>
                <img src="images/feed-image-2.png" class="post-img">

                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="images/like.png">425</div>
                        <div><img src="images/comments.png">250</div>
                        <div><img src="images/share.png">50</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="images/profile-pic.png"> <i class="fas fa-caret-down"></i>
                    </div>
                </div>

            </div>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="images/profile-pic.png">
                        <div>
                            <p>Navin Visuals</p>
                            <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </div>

                <p class="post-text">Like and share this video of <span>@Navin Visuals </span> and support us and our
                    team for good work motivation so we will make awsome projects like this only for you.
                    <a href="#">#NavinVisuals</a> <a href="#">#YouTubeChannel</a>
                </p>
                <img src="images/feed-image-3.png" class="post-img">

                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="images/like.png">425</div>
                        <div><img src="images/comments.png">250</div>
                        <div><img src="images/share.png">50</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="images/profile-pic.png"> <i class="fas fa-caret-down"></i>
                    </div>
                </div>

            </div>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="images/profile-pic.png">
                        <div>
                            <p>Navin Visuals</p>
                            <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </div>

                <p class="post-text">Like and share this video of <span>@Navin Visuals </span> and support us and our
                    team for good work motivation so we will make awsome projects like this only for you.
                    <a href="#">#NavinVisuals</a> <a href="#">#YouTubeChannel</a>
                </p>
                <img src="images/feed-image-4.png" class="post-img">

                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="images/like.png">425</div>
                        <div><img src="images/comments.png">250</div>
                        <div><img src="images/share.png">50</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="images/profile-pic.png"> <i class="fas fa-caret-down"></i>
                    </div>
                </div>

            </div>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="images/profile-pic.png">
                        <div>
                            <p>Navin Visuals</p>
                            <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </div>

                <p class="post-text">Like and share this video of <span>@Navin Visuals </span> and support us and our
                    team for good work motivation so we will make awsome projects like this only for you.
                    <a href="#">#NavinVisuals</a> <a href="#">#YouTubeChannel</a>
                </p>
                <img src="images/feed-image-5.png" class="post-img">

                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="images/like.png">425</div>
                        <div><img src="images/comments.png">250</div>
                        <div><img src="images/share.png">50</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="images/profile-pic.png"> <i class="fas fa-caret-down"></i>
                    </div>
                </div>

            </div>

            <button type="button" class="load-more-btn">Load More</button>






        </div>
        <!------------------------right-sidebar---------  -->
        <div class="right-sidebar">

            <div class="sidebar-title">
                <h4>Events</h4>
                <a href="#">See All</a>
            </div>

            <div class="event">
                <div class="left-event">
                    <h3>18</h3>
                    <span>March</span>
                </div>
                <div class="right-event">
                    <h4>Social Media</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Willson Tech Park</p>
                    <a href="#">More Info</a>
                </div>
            </div>

            <div class="event">
                <div class="left-event">
                    <h3>22</h3>
                    <span>April</span>
                </div>
                <div class="right-event">
                    <h4>Photograpty Learn</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Willson Tech Park</p>
                    <a href="#">More Info</a>
                </div>
            </div>

            <div class="sidebar-title">
                <h4>Advertizements</h4>
                <a href="#">Close</a>
            </div>
            <img src="images/advertisement.png" class="sidebar-ads">
            <div class="sidebar-title">
                <h4>Conversation</h4>
                <a href="#">Hide Chat</a>
            </div>

            <div class="online-list">
                <div class="online">
                    <img src="images/member-1.png">
                </div>
                <p>Alison Mina</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="images/member-2.png">
                </div>
                <p>Jackson Aston</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="images/member-3.png">
                </div>
                <p>Samona Rose</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="images/member-4.png">
                </div>
                <p>Vishal Soni</p>
            </div>

        </div>
    </div>

    <div class="footer">
        <p>Copyright 2021 - Navin Visuals</p>
    </div>
    <script src="script.js"></script>
</body>

</html>