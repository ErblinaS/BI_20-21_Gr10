<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
body {
   margin: 0;
    float: center;
}
canvas {
    border:1px solid black;
    background-color: #c495b2;
}
button
{
  cursor: pointer;
  width: 150px;
  border: none;
  background: #b56098;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
  border-radius: 2rem;
  margin-left: 250px;
}
</style>
</head>
<body onload="startGame()">
<script>
var myGamePiece;
var lart;
var posht;
var majtas;
var djathtas;

function startGame() {
    myGamePiece = new component(30, 30, "hotpink", 240, 120);
    lart = new component(50, 50, "rebeccapurple", 300, 0);    
    posht = new component(50, 50, "rebeccapurple", 300, 300);    
    majtas = new component(50, 50, "rebeccapurple", 0, 150);    
    djathtas = new component(50, 50, "rebeccapurple", 550, 150);
    mesazhi = new component(30,30,"black",Math.floor(Math.random()*550),Math.floor(Math.random()*300)); 
    myGameArea.start();
}


var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 600;
        this.canvas.height = 350;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.interval = setInterval(updateGameArea, 20);
        window.addEventListener('mousedown', function (e) {
            myGameArea.x = e.pageX;
            myGameArea.y = e.pageY;
        })
        window.addEventListener('mouseup', function (e) {
            myGameArea.x = false;
            myGameArea.y = false;
        })
        window.addEventListener('touchstart', function (e) {
            myGameArea.x = e.pageX;
            myGameArea.y = e.pageY;
        })
        window.addEventListener('touchend', function (e) {
            myGameArea.x = false;
            myGameArea.y = false;
        })
    }, 
    clear : function(){
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }

}

function component(width, height, color, x, y) {
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;
    this.x = x;
    this.y = y;

    this.update = function() {
        ctx = myGameArea.context;
        ctx.fillStyle = color;
        ctx.fillRect(this.x, this.y, this.width, this.height);
    }
    this.clicked = function() {
        var myleft = this.x;
        var myright = this.x + (this.width);
        var mytop = this.y;
        var mybottom = this.y + (this.height);
        var clicked = true;
        if ((mybottom < myGameArea.y) || (mytop > myGameArea.y) || (myright < myGameArea.x) || (myleft > myGameArea.x)) {
            clicked = false;
        }
        
        return clicked;
    }

}

function updateGameArea() {
    myGameArea.clear();
    if (myGameArea.x && myGameArea.y) {
        if (lart.clicked()) {
            myGamePiece.y -= 1;
           
        }
        if (posht.clicked()) {
            myGamePiece.y += 1;
        }
        if (majtas.clicked()) {
            myGamePiece.x += -1;
            
        }
        if (djathtas.clicked()) {
            myGamePiece.x += 1;
            
        }
        if ((myGamePiece.x == mesazhi.x) && (myGamePiece.y == mesazhi.y) ) {
            document.write('Keni përfunduar lojën me sukses! ');
            
        }
    }

    lart.update();        
    posht.update();        
    majtas.update();        
    djathtas.update();
    mesazhi.update();                                
    myGamePiece.update();
    
}

</script>

<p></p>
<button name="again" type="text" id="contact-submit"><a style="text-decoration: none;" href="loja.html">Rifillo lojën</a> </button>


<div style="padding-left: 30%; margin:2%; border: dotted;">
<p style="padding-left: 200px;">Mblidh tre numra</p>
<form oninput="x.value=parseInt(a.value)+parseInt(b.value)+parseInt(c.value)">
    <input style="width: 26%;" type="range" id="a" value="50" max="1000">
    + <input type="number" id="b" value="25">
    + <input type="number" id="c" placeholder="Nj&euml; num&euml;r i &ccedil;fardosh&euml;m">
    = <output name="x" for="a b c"></output>
</form>
<p style="padding-left: 200px;">Zbrit dy numra</p>
<form oninput="x.value=parseInt(a.value)-parseInt(b.value)">
    <input type="number" id="b" value="0">
    - <input style="width: 26%;" type="range" id="a" value="0" max="1000">
    = <output name="x" for="a b"></output>
</form>
<p></p>

</div>

<svg width="250" height="250" style="border:5px solid; border-color: black; background-color: #c495b2; margin-left: 20px; ">
    <polygon points="100, 10, 40, 198 190, 78, 10, 78 160, 198" stroke-width="3 " stroke="black " fill="white "/>
    <text x="70" y="200" fill="white" font-size="30px"> SVG </text>
   
</svg>

</body>
</html>
