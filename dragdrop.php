<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/dragdrop.css">
    <script type="text/javascript" src="skript/dragdrop.js"></script>
    <title> A jeni robot? </title>
</head>

<body onload="addVisitForPage('captcha')">
    
    <div class="wrapper fadeInDown">
        <p class="fadeIn first" id="info"> Vendos figurën brenda kornizës që të kaloni te forma për kyçje</p>

        <div class="fadeIn second" id="container" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

        <img class="fadeIn third" id="drag1" src="img/robot.jpg" draggable="true" ondragstart="drag(event)" width="235px" height="140px">
    </div>
</body>

</html>
