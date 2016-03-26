<!DOCTYPE html>
<html>
<head>
    <title>LAGanizer - Frontend Design Draft</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/dynamics.js"></script>
</head>
<body>
<header>
    <div id="authbar" class=""><p class="wrapper">Logged in as <a href="/profile" class="user">Test User</a>.
            Click to <a href="/logout" class=logout">Logout</a></p></div>
    <nav id="navbar" class="">&nbsp;</nav>
    <div id="bannerbar" class="">
        <div class="wrapper">
            <div id="logo" class="">&nbsp;</div>
            <div id="banner" class="">&nbsp;</div>
        </div>
    </div>

</header>
<main class="wrapper">
    <div id="content" class="">
        <hr>
        <?php include 'lorem_ipsum.txt'; ?>

    </div>
    <aside id="sidebar" class="placeholder">
        <div id="devlinks">
            <!-- <a href="/saml/index.html">SAML</a>
             <a href="/steam/index.html">Steam</a>
             <a href="/google/index.html">Google</a>
             <a href="/logout">Logout</a> -->
            <p>No Profile</p>
            <p>No User</p>
        </div>
        <h3>Spring Boot and Thymeleaf</h3>
        <p>Hello World!</p>
    </aside>
    <div class="clearfix"></div>
</main>
<footer>
    <div class="wrapper">
        <div>1</div>
        <div>2</div>
        <div>3</div>
        <div>4</div>
    </div>
    <div id="copyright" class="cleafix">©2015 Woike Alexander</div>
</footer>
<?php // include('templates/footer.html'); ?>
<?php // include('templates/header.html'); ?>
<div id="notification" class="">
    <div class="wrapper"><p>Notfication 1</p>
        <p>Notfication 2</p></div>
</div>

</body>
</html>