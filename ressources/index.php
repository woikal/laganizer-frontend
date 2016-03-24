<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>
    <title>Spring Boot and Thymeleaf example</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/dynamics.js"></script>
</head>
<body ng-app="">

<div id="topbar" class="">&nbsp;</div>
<nav id="navbar" class="">&nbsp;</nav>
<div id="bannerbar" class="">&nbsp;</div>
<div id="mainblock" class="wrapper">
    <div id="content" class="">
        <hr>
        <?php include 'lorem_ipsum.txt'; ?>

    </div>
    <aside id="sidebar" class="placeholder">
        <div id="devlinks">
            <a href="/saml/index.html">SAML</a>
            <a href="/steam/index.html">Steam</a>
            <a href="/google/index.html">Google</a>
            <a href="/logout">Logout</a>
            <p text="profile">No Profile</p>
            <p text="user">No User</p>
        </div>
        <hs3>Spring Boot and Thymeleaf</hs3>
        <p>Hello World!</p>
    </aside>
    <div class="clearfix"></div>
</div>
<div id="footerbar">
    <div class="wrapper">
        <div>1</div>
        <div>2</div>
        <div>3</div>
        <div>4</div>
    </div>
    <div id="copyright" class="cleafix">©2015 Woike Alexander</div>
</div>
<?php // include('templates/footer.html'); ?>
<?php // include('templates/header.html'); ?>
<div id="altnavwrapper" class="">
    <nav id="altnav" class="wrapper">
    </nav>
</div>

</body>
</html>