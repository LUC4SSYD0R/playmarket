<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Market</title>
    <!--awsme icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!---fave icon-->
    <!-- <link rel="shotrcut icon" href="img/fav.png" type="image x-icon"> -->
    <!--css link-->
    <link rel="stylesheet" href="css/style.css">
    <!--box icon-->
    <link href='https://unpkg.com/boxicons@2.1.0/css/boxicons.min.css' rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.css">
    <title>Document</title>
</head>
<body>
<header>
        <div class="nav container"></div>
        <a href="index.html" class="logo">Play<span>Market</span></a>
        <div class="nav-icons" style="margin-left: auto;">
            <i class='bx bxs-bell bx-tada' id="bell-icon"><span></span></i>
            <div class="profile-dropdown-btn" onclick="toggle()"><i class='bx bxs-user'></i></div>
            <div class="menu-icon">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            
        </div>
        <div class="profile-dropdown">
            <ul class="profile-dropdown-list">
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <i class="fa-regular fa-user">
                                edit
                            </i>
                        </a>
                    </li>
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <i class="fa-regular fa-envelope">
                                Inbox
                            </i>
                        </a>
                    </li>
                    <hr />
                    <li class="profile-dropdown-list-item">
                        <a href="login.php">
                            <i class="fa-solid fa-arrow-right-from-bracket">
                                Login
                            </i>
                        </a>
                    </li>
                </ul>
        </div>
        <div class="menu">
            <img src="img/menu.png" alt="">
            <div class="navbar">
                <li><a href="index.html">home</a></li>
                <li><a href="#trending">Trending</a></li>
                <li><a href="#new">New Games</a></li>
                <li><a href="#action">Action Games</a></li>
                <li><a href="#contact">Contact us</a></li>
            </div>
        </div>
        <!-- Carrinho -->
        <div class="notification">
            <div class="notification-box">
                <i class='bx bxs-check-circle'></i>
                <p>Sim</p>
            </div>
            <div class="notification-box box-color">
                <i class='bx bxs-x-circle'></i>
                ta
            </div>
        </div>
    </header>