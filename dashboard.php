<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!--DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
        <p><a href="home.html">Home</a></p>
    </div>
</body>
</html-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/userpost.css">
    <title>E-Bookopolis</title>
</head>

<body>
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <span> E-BOOKOPOLIS</span>

            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="review.html">Review</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="/settings">Settings</a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="upload.html">Upload</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>

        <div class="nav-right">
            <form action="search.html">
                <input class="form-input" type="text" name="query" placeholder="Search">
                <button class="btn">Search</button>   
            </form>
            
        </div>

    </nav>
    <div class="max-width-1 m-auto">
        <hr>

    </div>
    <div class="content max-width-1 m-auto my-2">
        <div class="content-left">
            <h1>FIRST EXCEED THEN SUCCEED</h1>
            <h3>E-Bookopolis is a platform which will help you grow in terms of reading, writing and publishing. You can
                read, review and publish your dream books with the help of our platform.</h3><p><b></b></p>

        </div>
        <div class="content-right">
            <img src="img/home.svg.jpeg" alt="E-BOOKOPOLIS">
        </div>
    </div>
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="home-articles max-width-1 m-auto font1">
        <div class="year-box">
            <h3>year</h3>
            <div>
                <input type="radio" name="year" id="">2020
            </div>
            <div>
                <input type="radio" name="year" id="">2021
            </div>
        </div>
        <h2>Posts</h2>
        <div class="home-article">
            <div class="home-article-image">
                <img src="img/book.svg.jpeg" alt="Posts">
            </div>
            <div class="home-article-content font2">
                <a href="userpost.html"><h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3></a>
                <span>Author Name</span>
                <span>12 January | 06 mins ago</span>

            </div>

        </div>
        <div class="home-article">
            <div class="home-article-image">
                <img src="img/16.svg.jpeg" alt="Posts">
            </div>
            <div class="home-article-content font2">
                <a href="userpost.html"><h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3></a>
                <span>Author Name</span>
                <span>12 January | 06 mins ago</span>

            </div>

        </div>
        <div class="home-article">
            <div class="home-article-image">
                <img src="img/15.svg.jpeg" alt="Posts">
            </div>
            <div class="home-article-content font2">
                <a href="userpost.html"><h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3></a>
                <span>Author Name</span>
                <span>12 January | 06 mins ago</span>

            </div>

        </div>
        <div class="home-article">
            <div class="home-article-image">
                <img src="img/post.svg.jpeg" alt="Posts">
            </div>
            <div class="home-article-content font2">
                <a href="userpost.html"><h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3></a>
                <span>Author Name</span>
                <span>12 January | 06 mins ago</span>

            </div>

        </div>
        <div class="home-article">
            <div class="home-article-image">
                <img src="img/11.svg.jpeg" alt="Posts">
            </div>
            <div class="home-article-content font2">
                <a href="userpost.html"><h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3></a>
                <span>Author Name</span>
                <span>12 January | 08 mins ago</span>

            </div>

        </div>
    </div>

    <div class="footer max-width-2 m-auto">
        <p>Cpoyright &copy; EBookopolis.com</p>
        <a href="https://www.vecteezy.com/free-vector/book-icon">Vector Credits: Vecteezy</a>

    </div>
</body>

</html>