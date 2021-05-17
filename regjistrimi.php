
<html lang="en">
<head>
    <link rel="shortcut icon"  type="image/x-icon" href="img/favicon.ico" />
    <meta charset="utf-8">
    <title>Regjistrimi</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/contact.css">
    <link rel="stylesheet" href="style/responsive.css">
    <script type="text/javascript" src="skript/regjistrimi.js"></script>
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
          <a href="#">Regjistrimi</a>
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
                  
  <main >
       
    <div class="container" id="part1">  
        <form id="contact" action="newDB.php" method="post">           

          <!--<h3>LifeStyle</h3>-->
          <fieldset>
          <!--<legend>Regjistrimi</legend>-->
            <p style="text-align: center; font-size: 25px; font-weight: bolder; padding: 15px;">Regjistrohu</p>
                
                 <?php
   try {
      $error = 'Mbiemri';
      throw new Exception($error);
      
      // Kodi që ndjek një përjashtim nuk ekzekutohet.
      echo 'Nuk është ekzekutuar kurrë';
   }catch (Exception $e) {
      echo 'Emri dhe ',  $e->getMessage(), "\n";
   }
   
   // Vazhdoni ekzekutimin
   echo ':';
?> 
                <input type="text" name="name" required autofocus>

                <?php
   try {
      $error = 'maili';
      throw new Exception($error);
      
      // Kodi që ndjek një përjashtim nuk ekzekutohet.
      echo 'Nuk është ekzekutuar kurrë';
   }catch (Exception $e) {
      echo 'E- ',  $e->getMessage(), "\n";
   }
   
   // Vazhdoni ekzekutimin
   echo ':';
?>
                <input type="email" name="email" autocomplete="on" required>

                
                <?php
   try {
      $error = 'kalimi';
      throw new Exception($error);
      
      // Kodi që ndjek një përjashtim nuk ekzekutohet.
      echo 'Nuk është ekzekutuar kurrë';
   }catch (Exception $e) {
      echo 'Fjalë',  $e->getMessage(), "\n";
   }
   
   // Vazhdoni ekzekutimin
   echo ':';
?>
                <input id="password" type="password" name="password" required>

                <label> Rishkruaj fjalëkalimin: </label>
                <input type="password" name="rpassword" required><br>
                                       
                                           
         </fieldset>   
         <!-- <button name="next" type="submit" id="contact-submit" onclick="next()">Vazhdo</button> -->
         <fieldset>
            <button onclick="next1()" name="submit" type="text" id="contact-submit"> Vazhdo &rarr; </button>
          </fieldset>
         <!--<span onclick="next()" >Vazhdo</span> -->
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

   <div class="container" id="part2" style="display: none;">  
    <form id="contact" action="" method="post">      
     <fieldset>
       <!--<legend>Sign Up</legend>--> 
       <fieldset>
        <button onclick="back1()" name="submit" type="text" id="contact-submit"> &larr; Kthehu</button>
      </fieldset>    
       
       <label> Numri i telefonit: </label>
       <input type="tel" name="phoneNumber" >

       <label> E-mail rezervë: </label>
       <input type="email" name="email" autocomplete="on" >

       <label>Shteti:</label>
       <p>&nbsp;</p>
       <input id="lista" list="country" name="country" required>
       <datalist id="lista">
            <option value="Kosovë">
            <option value="Shqipëri">
            <option value="Maqedoni e Veriut">
            <option value="Mali i Zi">
            <option value="Serbi">
            <option value="Tjetër">
       </datalist>

       <p>&nbsp;</p>
       <label> Adresa e plotë: </label>
       <input type="text" name="adress" required>
       <p>&nbsp;</p>
             
     <fieldset style="padding-top: 15px;">
        <button onclick="next2()" name="submit" type="text" id="contact-submit"> Vazhdo &rarr; </button>
      </fieldset>
    </form>
   </div>

   <div class="container" id="part3" style="display: none;">  
    <form id="contact" action="" method="post">      
     <fieldset>
       <!--<legend>Sign Up</legend>--> 
       <fieldset>
        <button onclick="back2()" name="submit" type="text" id="contact-submit"> &larr; Kthehu</button>
      </fieldset>    
       
       <label> Ditëlindja: </label>
       <input type="date" name="birthday" required>

       <label> Gjinia:</label>
       <p>&nbsp;</p>
       <div class="controls">
        <label class="radio">
          <input type="radio" name="femer" value="femer">Femër
        </label>
                 
        <label class="radio">
          <input type="radio" name="mashkull" value="mashkull">Mashkull
        </label>
        
        <label class="radio">
          <input type="radio" name="other" value="other">Tjetër
        </label>
        
      </div>
      <p>&nbsp;</p>
       <label> Profesioni: </label>
       <input type="text" name="profession" required>
 

        <input type="checkbox" value="yes" id="terms_conditions" 
            name="terms_conditions" required> 
           Duke krijuar llogarinë, ju pajtoheni me Afatet dhe Kushtet tona
          <p style="text-align: center;"> <br><a href="doc/TermsConditions.pdf">Terms & Conditions</a></p>
          <p> &nbsp; </p>
                   
         
        <div>   
            <fieldset>
                <button type="submit" name="submit" value="Regjistrohu" id="submit">Regjistrohu</button>
            </fieldset> 
            
            <fieldset>
                <button type="reset" name="reset" value="fshij" id="submit">Fshij</button>
            </fieldset> 
                                   
        </div>       
     </fieldset>
    </form>
   </div>
       
       
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
                <?php

  define ("BR","<BR>");

  // define a custom function to sanitize the user input data as a precuation from any malicious attacks
  function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  //initialize variables for value as well as errors
  $name=$email=$gender=$comment=$website="";
  $name_err=$email_err=$gender_err=$comment_err=$website_err="";

  // Check if coming from submitted form and do the validations on user inputs in form
  if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (empty($_POST["name"])) {
      $name_err = "Name cannot be left blank.";
    }
    else {
      $name = test_input($_POST["name"]);
      // check for correctness of name or validate our name test_input
      if (!preg_match("/^[a-zA-z ]*$/",$name)) {
        $name_err = "Name is not in valid format, can contain only letters.";
      }
    }

    if (empty($_POST["email"])) {
      $email_err = "Email cannot be left blank.";
    }
    else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_err = "Email format is not correct.";
      }
    }
    if (!empty($_POST["website"])) {
      $website = test_input($_POST["website"]);

     if (!filter_var($website,FILTER_VALIDATE_URL)){
        $website_err = "Website format is not correct.";
      }

    }
    if (!empty($_POST["comment"])) {
      $comment = test_input($_POST["comment"]);
    }
    if (!empty($_POST["gender"])) {
      $gender = test_input($_POST["gender"]);
    }

  }
 ?>
<body>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" target="_self">

    Emeri: <input type="text" name="name" id="name" value="<?php echo $name; ?>"> <br>
    <span style="color:red"> <?php echo $name_err; ?></span><br>
    Email:<input type = "text" name="email" id="email" value="<?php echo $email; ?>"><br>
    <span style="color:red"> <?php echo $email_err; ?></span><br>
    Website:<input type = "text" name="website" id="website" value="<?php echo $website; ?>"><br>
    <span style="color:red"> <?php echo $website_err; ?></span><br>

    Gjinia:<br>
    <input type = "radio" name="gender" id="female" value="female" <?php if ($gender=="female") {echo "checked";} ?> >Female
    <input type = "radio" name="gender" id="male" value="male" <?php if ($gender=="male") {echo "checked";} ?>>Male
    <input type = "radio" name="gender" id="other" value="other" <?php if ($gender=="other") {echo "checked";} ?>>other<br><br>
    <span style="color:red"> <?php echo $gender_err; ?></span><br>
    Coment:
    <textarea name="comment" id="comment" value="" cols="50" rows="10"><?php echo $comment; ?></textarea> <br><br><br>
    <span style="color:red"> <?php echo $comment_err; ?></span><br>
    <input type="Submit" value="Submit" name="Submit">

    

  </form>

  <?php


   // if the form is submitted and no errors are found in any of the fields, show the success message with all of the data
   if (($_SERVER["REQUEST_METHOD"]=="POST")
        and ($name_err=="" and $email_err=="" and $website_err=="" and $gender_err=="" and $comment_err=="")){
     echo BR.BR.BR.'Submission Successful: '.BR.BR;
     echo 'Name: '.$name.BR;
     echo 'E-mail: '.$email.BR;
     echo 'Portal: '.$website.BR;
     echo 'Gender: '.$gender.BR;
     echo 'Comment: '.$comment.BR;

   }

   ?>
                    <?php
   try {
      $error = 'Mbiemri';
      throw new Exception($error);
      
      // Kodi që ndjek një përjashtim nuk ekzekutohet.
      echo 'Nuk është ekzekutuar kurrë';
   }catch (Exception $e) {
      echo 'Emri dhe ',  $e->getMessage(), "\n";
   }
   
   // Vazhdoni ekzekutimin
   echo 'Pershendetje';
?>
</br>
<?php
   function exception_handler($exception) {
      echo "Pershendetje: " , $exception->getMessage(), "\n";
   }
	
   set_exception_handler('exception_handler');
   throw new Exception('nga une!');
   
   echo "Not Executed\n";
?>
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
        <p> Copyright © <?php
					$subject = "27.-5.-2021";
					//Zevendeson vizat me hapesira
					$stringa_e_re = str_replace('-', ' ', $subject);
					echo $stringa_e_re; 
					?>-All Rights Reserved - Domain Name
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
<?php
extract($_REQUEST);
$file=fopen("register.txt","a");
fwrite($file,"Emri :");
fwrite($file,$name."\n");
fwrite($file,"Email :");
fwrite($file,$email."\n");
fwrite($file,"Password-i :");
fwrite($file,$password."\n");
fclose($file);
?>

                                                                                                                 
