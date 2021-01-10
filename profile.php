<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
<nav>
    <div class="menu-icon"><span class="fas fa-bars"></span></div>
    <div class="logo">Twitter</div>
    <div class="nav-items">
        <li><a href="timeline.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="#">Blogs</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
    </div>
    <div class="search-icon"><span class="fas fa-search"></span></div>
    <div class="cancel-icon"><span class="fas fa-times"></span></div>
    <form action="#">
        <input type="search" class="search-data" placeholder="Search" required>
        <button type="submit" class="fas fa-search"></button>
    </form>
    <div class="nav-items2">
        <li><a href="#">Logout</a></li>
    </div>
</nav>
    
    <div class="container">
        <div class="user-profile">
            <div class="profile-header-background"><img src="http://demo.thedevelovers.com/dashboard/queenadmin-1.2/assets/img/city.jpg" alt="Profile Header Background"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-info-left">
                        <div class="text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Avatar" class="avatar img-circle">
                            <h2>Jack Bay</h2>
                        </div>
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
                        <div class="section">
                            <h3>Social</h3>
                            <ul class="list-unstyled list-social">
                                <li><a href="#"><i class="fa fa-twitter"></i> @jackbay</a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i> Jack Bay</a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i> jackdribs</a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> Jack Bay</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
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
                                        <p class="activity-title"><a href="#">Antonius</a> started following <a href="#">Jack Bay</a> <small class="text-muted">- 2m ago</small></p>
                                        <small class="text-muted">Today 08:30 am - 02.05.2014</small>
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
                                <div class="media activity-item">
                                    <a href="#" class="pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Avatar" class="media-object avatar">
                                    </a>
                                    <div class="media-body">
                                        <p class="activity-title"><a href="#">Jane Doe</a> likes <a href="#">Jack Bay</a> <small class="text-muted">- 36m ago</small></p>
                                        <small class="text-muted">Today 07:23 am - 02.05.2014</small>
                                    </div>
                                    <div class="btn-group pull-right activity-actions">
                                        <button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-th"></i>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#">I don't want to see this</a></li>
                                            <li><a href="#">Unfollow Jane Doe</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Get Notification</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="media activity-item">
                                    <a href="#" class="pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Avatar" class="media-object avatar">
                                    </a>
                                    <div class="media-body">
                                        <p class="activity-title"><a href="#">Michael</a> posted something for <a href="#">Jack Bay</a> <small class="text-muted">- 1h ago</small></p>
                                        <small class="text-muted">Today 07:23 am - 02.05.2014</small>
                                        <div class="activity-attachment">
                                            <div class="well well-sm">
                                                Professionally evolve corporate services without ethical leadership. Proactively re-engineer client-focused infrastructures before alternative potentialities. Competently predominate just in time e-tailers for leveraged solutions. Intrinsicly initiate end-to-end collaboration and idea-sharing after 24/365 ROI. Rapidiously.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group pull-right activity-actions">
                                        <button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-th"></i>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#">I don't want to see this</a></li>
                                            <li><a href="#">Unfollow Michael</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Get Notification</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="media activity-item">
                                    <a href="#" class="pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Avatar" class="media-object avatar">
                                    </a>
                                    <div class="media-body">
                                        <p class="activity-title"><a href="#">Jack Bay</a> has uploaded two photos <small class="text-muted">- Yesterday</small></p>
                                        <small class="text-muted">Yesterday 06:42 pm - 01.05.2014</small>
                                        <div class="activity-attachment">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="#" class="thumbnail">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Uploaded photo">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group pull-right activity-actions">
                                        <button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-th"></i>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#">I don't want to see this</a></li>
                                            <li><a href="#">Unfollow Jack Bay</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Get Notification</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="media activity-item">
                                    <a href="#" class="pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Avatar" class="media-object avatar">
                                    </a>
                                    <div class="media-body">
                                        <p class="activity-title"><a href="#">Jack Bay</a> has changed his profile picture <small class="text-muted">- 2 days ago</small></p>
                                        <small class="text-muted">2 days ago 05:42 pm - 30.04.2014</small>
                                        <div class="activity-attachment">
                                            <a href="#" class="thumbnail">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Uploaded photo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="btn-group pull-right activity-actions">
                                        <button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-th"></i>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#">I don't want to see this</a></li>
                                            <li><a href="#">Unfollow Jack Bay</a></li>
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