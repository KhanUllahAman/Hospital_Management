<?php
// session_start();
include "../function.php";
// include "../"
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location:../parents_login.php');
} 
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>E_Vaccination</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/E_Vaccination__3_-removebg-preview.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="vendor/jquery-steps/css/jquery.steps.css" rel="stylesheet">
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Form step
        <link href="vendor/jquery-steps/css/jquery.steps.css" rel="stylesheet">
<link rel="stylesheet" href="./vendor/datatables/css/jquery.dataTables.min.css"> -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->

</head>
<style>
    body {
        background: #1d1e26;
        /* background: #1f232c; */
    }

    .footer {
        background: #1d1e26;
    }

    .bell-icon {
        background: #fa8d18;
        ;
        color: #fff;
    }

    .my_btn {
        font-size: 17px;
        text-decoration: none;
        font-weight: bold;
    }

    .my_text {
        color: #fa8d18;
        font-size: 20px;
    }
</style>

<body>


    <!-- <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> -->

    <div id="main-wrapper">


        <div class="nav-header">
            <a href="#" class="brand-logo">
                <img class="logo-abbr" src="images/E_Vaccination__3_-removebg-preview.png" alt="">
                <img class="logo-compact" src="images/aman.png" alt="">
                <img class="brand-title" src="./images/aman.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">

                        </div>

                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <button type="button" class="btn bell-icon position-relative">
                                        <i class="fa-solid fa-bell"></i>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">

                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </button>
                                    <!-- <div class="pulse-css"></div> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a> -->
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <?php 
                                    
                                        $rowid = $_SESSION['user'];  
                                        $sql = "SELECT `image` FROM `users` where id = ". $rowid;
                                        
                                        $result = mysqli_query($mysqli, $sql);
                                        
                                        if ($result) {
                                            echo "good";
                                            
                                        } else {
                                            // echo "error";
                                        }
                                  
        ?>
        
        <?php


$i = 0;
while ($row = mysqli_fetch_assoc($result)) { ?>

<img src="images/<?php echo $row["image"] ?>" width="20" alt="">



<?php $i++;} ?>
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ml-2">Profile </span>
                                    </a> -->
                                    <!-- <a href="logout.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a> -->
                                    <?php if (isset($_SESSION['success'])) : ?>
                                        <div class="error success">
                                            <h3>
                                                <?php
                                                echo $_SESSION['success'];
                                                unset($_SESSION['success']);
                                                ?>
                                            </h3>
                                        </div>
                                    <?php endif ?>
                                    <div class="profile_info">
                                        <!-- <img src="images/user_profile.png"> -->

                                        <div>
                                            <?php if (isset($_SESSION['user'])) : ?>
                                                <strong class="text-light"><?php echo $_SESSION['user']; ?></strong>

                                                <small>
                                                    <i style="color: #888;" class="d-none">(<?php echo ucfirst($_SESSION['user']); ?>)</i>
                                                    <i class="fa-solid fa-right-from-bracket my_text"></i>
                                                    <a href="index.php?logout='1'" style="color: #000;" class="my_btn">Logout</a>
                                                </small>

                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
       