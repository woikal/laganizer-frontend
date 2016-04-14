<!DOCTYPE html>
<html>
<head>
    <?php include('templates/head.php'); ?>
    <link type="text/javascript" rel="js/angular-min.js" />
    <script type="text/javascript">
        function draw() {
            var canvas = document.getElementById("canvas");
            var ctx = canvas.getContext("2d");

            ctx.fillStyle = "rgb(200,0,0)";
            ctx.fillRect(10, 10, 55, 50);

            ctx.fillStyle = "rgba(0, 0, 200, 0.5)";
            ctx.clearRect(30, 30, 55, 50);
            ctx.fillRect(32, 32, 55, 50);
        }
    </script>
</head>
<body onload="draw();">

<?php include('templates/header.php'); ?>
<main class="wrapper">
    <div id="content" class="">
        <canvas id="canvas" height="400" width="1200" class="" style="border: 1px solid red;">no-canvas text</canvas>

    </div>
    <div class="clearfix"></div>

</main>
<?php include('templates/footer.php'); ?>

</body>
</html>