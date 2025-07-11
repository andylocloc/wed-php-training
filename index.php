<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css"rel="stylesheet" href="stylecss_VVHL/mycss.css"/>
    <script type="module" src="js_VVHL/jquery-3.7.1.js"></script>
    <script type="module" src="js_VVHL/jscript.js"></script>
    <title>đây là trang wed của tôi</title>
</head>
<body>
<div id="top_div"></div>
<div id="left_div">
    <?php
        require './element_VVHL/left.php'
    ?>
</div>
<div id="center_div">
     
       <?php

    require './element_VVHL/center.php';
?>

</div>
<div id="right_div"></div>
<div id="bottom_div"></div>
</body>
</html>