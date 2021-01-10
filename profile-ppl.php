<?php session_start();
$user = $_SESSION["akunCari"];
$testResult = $_SESSION["resultCari"];
$res = json_decode($testResult);
require 'auth.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profile Activities Followers Following - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/profile.css">
    <style type="text/css">
       
    </style>
</head>


<body>
<nav>
<div class="menu-icon"><span class="fas fa-bars"></span></div>
    <div class="logo">Twitter</div>
    <div class="nav-items">
        <li><a href="timeline.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="search.php">Search</a></li>
    </div>
    <div class="search-icon"><span class="fas fa-search"></span></div>
    <div class="cancel-icon"><span class="fas fa-times"></span></div>
    <div class="nav-items2">
        <li><a href="logout.php">Logout</a></li>
    </div>
</nav>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="user-profile">
            <div class="profile-header-background"><img src="http://demo.thedevelovers.com/dashboard/queenadmin-1.2/assets/img/city.jpg" alt="Profile Header Background"></div>
            <div class="row">
            <div class="col-md-4" style="background-color: white;">
                    <div class="profile-info-left">
                        <div class="text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Avatar" class="avatar img-circle">
                            <h2> <?php
                                    echo "<h1>" . $user . "</h1>";
                                    echo $res->Email;
                                    ?>
                            </h2>
                        </div>
                        <br>
                        <div class="action-buttons">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="btn btn-success btn-block"><i class="fa fa-plus-round"></i> Follow</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" class="btn btn-primary btn-block"><i class="fa fa-android-mail"></i> Message</a>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <h3>About Me</h3>
                            <p>Energistically administrate 24/7 portals and enabled catalysts for change. Objectively revolutionize client-centered e-commerce via covalent scenarios. Continually envisioneer.</p>
                        </div>
                        <div class="section">
                            <h3>Statistics</h3>
                            <p><span class="badge">332</span> Following</p>
                            <p><span class="badge">124</span> Followers</p>
                            <p><span class="badge">620</span> Likes</p>
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-8" style="background-color: white;">
                    <div class="profile-info-right">
                        <ul class="nav nav-pills nav-pills-custom-minimal custom-minimal-bottom">
                            <li class="active"><a href="#activities" data-toggle="tab">ACTIVITIES</a></li>
                            <li><a href="#followers" data-toggle="tab">FOLLOWERS</a></li>
                            <li><a href="#following" data-toggle="tab">FOLLOWING</a></li>
                        </ul>
                        <div class="tab-content">
                            <!-- activities -->
                            <div class="tab-pane fade in active" id="activities">
                                <div class="media activity-item">
                                    <a href="#" class="pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Avatar" class="media-object avatar">
                                    </a>
                                    <div class="media-body">
                                        <div class="card-body">
                                            <?php
                                            require 'config.php';
                                            $Tweet = $collection2->find();
                                            foreach ($Tweet as $tweets) {
                                                echo "<p>$tweets->Tweet</p>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="btn-group pull-right activity-actions">
                                        <button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-th"></i>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#">I don't want to see this</a></li>
                                            <li><a href="#">Unfollow Antonius</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Get Notification</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-default center-block"><i class="fa fa-refresh"></i> Load more activities</button>
                            </div>
                            <!-- end activities -->

                            <!-- followers -->
                            <div class="tab-pane fade" id="followers">
                                <div class="media user-follower">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">Antonius<br><span class="text-muted username">@mrantonius</span></a>
                                        <button type="button" class="btn btn-sm btn-toggle-following pull-right"><i class="fa fa-checkmark-round"></i> <span>Following</span></button>
                                    </div>
                                </div>
                                <div class="media user-follower">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">Michael<br><span class="text-muted username">@iamichael</span></a>
                                        <button type="button" class="btn btn-sm btn-default pull-right"><i class="fa fa-plus"></i> Follow</button>
                                    </div>
                                </div>
                                <div class="media user-follower">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">Stella<br><span class="text-muted username">@stella</span></a>
                                        <button type="button" class="btn btn-sm btn-default pull-right"><i class="fa fa-plus"></i> Follow</button>
                                    </div>
                                </div>
                                <div class="media user-follower">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">Jane Doe<br><span class="text-muted username">@janed</span></a>
                                        <button type="button" class="btn btn-sm btn-toggle-following pull-right"><i class="fa fa-checkmark-round"></i> <span>Following</span></button>
                                    </div>
                                </div>
                                <div class="media user-follower">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">John Simmons<br><span class="text-muted username">@jsimm</span></a>
                                        <button type="button" class="btn btn-sm btn-default pull-right"><i class="fa fa-plus"></i> Follow</button>
                                    </div>
                                </div>
                                <div class="media user-follower">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">Antonius<br><span class="text-muted username">@mrantonius</span></a>
                                        <button type="button" class="btn btn-sm btn-toggle-following pull-right"><i class="fa fa-checkmark-round"></i> <span>Following</span></button>
                                    </div>
                                </div>
                                <div class="media user-follower">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">Michael<br><span class="text-muted username">@iamichael</span></a>
                                        <button type="button" class="btn btn-sm btn-default pull-right"><i class="fa fa-plus"></i> Follow</button>
                                    </div>
                                </div>
                                <div class="media user-follower">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">Stella<br><span class="text-muted username">@stella</span></a>
                                        <button type="button" class="btn btn-sm btn-default pull-right"><i class="fa fa-plus"></i> Follow</button>
                                    </div>
                                </div>
                                <div class="media user-follower">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">Jane Doe<br><span class="text-muted username">@janed</span></a>
                                        <button type="button" class="btn btn-sm btn-toggle-following pull-right"><i class="fa fa-checkmark-round"></i> <span>Following</span></button>
                                    </div>
                                </div>
                                <div class="media user-follower">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">John Simmons<br><span class="text-muted username">@jsimm</span></a>
                                        <button type="button" class="btn btn-sm btn-default pull-right"><i class="fa fa-plus"></i> Follow</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end followers -->

                            <!-- following -->
                            <div class="tab-pane fade" id="following">
                                <div class="media user-following">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">Stella<br><span class="text-muted username">@stella</span></a>
                                        <button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-close-round"></i> Unfollow</button>
                                    </div>
                                </div>
                                <div class="media user-following">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">Jane Doe<br><span class="text-muted username">@janed</span></a>
                                        <button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-close-round"></i> Unfollow</button>
                                    </div>
                                </div>
                                <div class="media user-following">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">John Simmons<br><span class="text-muted username">@jsimm</span></a>
                                        <button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-close-round"></i> Unfollow</button>
                                    </div>
                                </div>
                                <div class="media user-following">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">Antonius<br><span class="text-muted username">@mrantonius</span></a>
                                        <button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-close-round"></i> Unfollow</button>
                                    </div>
                                </div>
                                <div class="media user-following">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">Michael<br><span class="text-muted username">@iamichael</span></a>
                                        <button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-close-round"></i> Unfollow</button>
                                    </div>
                                </div>
                                <div class="media user-following">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="User Avatar" class="media-object pull-left">
                                    <div class="media-body">
                                        <a href="#">Stella<br><span class="text-muted username">@stella</span></a>
                                        <button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-close-round"></i> Unfollow</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end following -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>