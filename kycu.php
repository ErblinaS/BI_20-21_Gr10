<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="shortcut icon"  type="image/x-icon" href="img/favicon.ico" />
  <meta charset="utf-8">
  <title>Kyçuni në llogarinë tuaj</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/contact.css">
  <link rel="stylesheet" href="style/responsive.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&display=swap"> 
	 <script type="text/javascript">
var now = new Date();
var hours = now.getHours();
//dita
if (hours > 6 && hours < 19){
 document.write ('<body style="background-color: #f0cef2">');
}
//nata
else {
 document.write ('<body style="background-color: #f0e5c9">');
}

</script>
 
</head>
<body bgcolor="<?php echo $bgColor ?>" text="<?php echo $txtColor ?>">
	<?php

    $silver = "";
    $purple = "";
    $white = "";
    $black = "";

    $hour = time() + 3600;

    if (isset($_POST['order'])) {
        $color = $_POST['order'];
        $$color = "selected";
        setcookie("Free_cookies", $color, $hour);
    }
    else{
        $color = "silver";
        $silver = "selected";
    }
    if(isset($_COOKIE['Free_cookies'])){
        $color = $_COOKIE['Free_cookies'];
        $$color = "selected";
    }

?>
<?php
setcookie("Free_cookies",$color,time()-3600);
?>
  <div id="wrapper" class="wrapper" <?php echo "STYLE='background-color:".$color.";'";?>>
    <header id="head">
      <div class="wrapper1">
        <div class="logo">
          <a href="#">Kyçja</a>
        </div>
      
          <div class="search">
          <form action="post">
          <input type="text" placeholder="Kërko në faqe">
          <button type="submit"><i class="fas fa-search"></i></button>
          </form>
          </div>
            <br><br><br>

          <nav>
               <ul class="navigation" style="padding-top: 20px;">
               <li><a href="ballina.php">BALLINA</a></li>
               <li><a href="#">FULL WIDTH</a></li>
               
               <li id="dropdowni"><a href="#">KATEGORITË</a>
                <ul>    
                  <li><a href="mode.php">Modë</a></li>
                  <li><a href="shendet.php">Shëndet</a></li>
                  <li><a href="hobi.php">Hobi</a></li>
                  <li><a href="storjet.php">Storje</a></li>
                </ul>
               </li>

               <li><a href="loja.php">LOJA</a></li>
               <li><a href="gallery.php">GALERIA</a></li>
               
					   	<li id="dropdowni"><a href="#">KYÇU/REGJISTROHU</a>
                <ul>    
                  <li><a href="dragdrop.php">Kyçu</a></li>
                  <li><a href="regjistrimi.php">Regjistrohu</a></li>
                  <li><a href="contact.php">Na kontakto</a></li>
                </ul>
             </li>
      
                 </ul>
                </nav>
        </div>  
      </header>
      
                  
    <main>

       <div class="container">  
         <form id="contact" action="" method="post" style="height: 400px"> 
          <p style="text-align: center; font-size: 25px; font-weight: bolder; padding: 15px;">
            Kyçu në llogarinë tënde</p>
                    

                <label ><b> E-mail-i juaj</b><p><br></p></label>
                <input style="border-radius: 0px; border: 2px solid #c495b2;" 
                type="email" placeholder="E-mail-i" required>
                
                <label style="padding-bottom: 30px;"><b>Fjalëkalimi</b></label>                
                <input type="password" placeholder="Fjalëkalimi" required>
                <br>
                
                <label style="padding-top: 30px;">
                <input type="checkbox" checked="checked" name="remember">&nbsp; Më mbajë në mend <br><br>
                </label>

                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Duke u procesuar">
                        Kyçu</button>
                    <p style="text-align: center; padding-top: 20px;"> 
                        <br><a href="regjistrimi.php"> Nuk keni llogari? Dëshironi të regjistroheni? <br></a></p>
                </fieldset>
            </div>
            </form>
    
  </form>
</div>
  <form method='post'<?php echo "STYLE='background-color:".$color.";'";?> ><p id='txtorder'  >Ngjyra: </p>
    <select name='order' id='order'>
        <option value="silver"<?php echo $silver; ?> >silver</option>
        <option value="purple"<?php echo $purple; ?> >purple</option>
        <option value="white"<?php echo $white; ?> >white</option>
        <option value="black"<?php echo $black; ?> >black</option>
    </select>
    <input type='submit' value='Ndrysho'/>
</form>          
       
<section style="padding-top: 10px;" id="footer_ContactUs">
    <ul>
        <li>
            <div class="f_ContactUs">
                <h4>Na kontaktoni</h4>	
                 <p>
                
                Revista Lifestyle  <br>
                Rr. "Eqrem Çabej"<br>
                Prishtinë, Kosovë <br>
                10000 <br>
                Tel: +383 44 000 000 <br>
                Fax: +383 38 000 000 <br>
                E-mail: revistalifestyleks@gmail.com <br>
                
                  </p>
                </div>
            </li>
                <li>
            <div class="f_ContactUs">
                <h4>Vegëza </h4>
                <ul>
                    <li><a href="https://www.elle.com/">Revista Elle</a></li>
                    <! -- si të bëjmë contact us shembull tek qekjo më poshtë -->
                    <li><a href="http://lifestylemagazineonline.com/">Revista Lifestyle US</a></li> 
                    <li><a href="https://www.theguardian.com/us/lifeandstyle">The Guardian / Lifestyle</a></li>
                    <li><a href="https://www.lifestylesports.com/eu/">Lifestyle Sports</a></li>
                </ul>
                </div>
            </li>
        
            <li>
               <div class="f_ContactUs">
                <h4>Nga faqja </h4>
                <h3>Menaxhimi i faqes</h3>
                <p>
                   Kjo faqe kontrollohet dhe menaxhohet nga stafi i Revistës Lifestyle. <br>
                   Revista filloi si projekt gjatë studimeve në fakultet.
                   </p>
            
                    <div class="footer_read">
                 <a href="doc/per_faqen.pdf">Lexo më shumë >></a>
                    </div>
                   </div>
               </li>
        
                <li>
               <div class="f_ContactUs">
                <h4> Porositni revistën e shtypur </h4>
                <div class="footer_form">
                    <form action="">
                     <input style="background-color: white;" type="text" placeholder="Emri">
                    <input type ="email" placeholder="E-mail-i">
                    <input id="submitbutton" type="submit" value="SUBMIT">
                    </form>
                    </div>
                </div>
            </li>
        </ul>
    <ul id="icons" class="social-icons">
         <li><a href="https://www.instagram.com/revistalifestyleks/"><i id="instagram" class="fab fa-instagram"></i></a></li>
         <li><a href="https://www.facebook.com/reviste.lifstyl.7/"><i id="facebook" class="fab fa-facebook"></i></a></li>
         <li><a href="https://twitter.com/RLifestyle_Ks"><i id="twitter" class="fab fa-twitter"></i></a></li>
         </ul>
         <br> <br>
    </section>

<footer>
    
    <div class="footer_text">
        <p> Copyright © 2013-All Rights Reserved - Domain Name
        <span> 
            Template by OS Templates
        </span>
         </p>
        </div>
  </footer>	
</main>	
</div>		
</body>
</html>
