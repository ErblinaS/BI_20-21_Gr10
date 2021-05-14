<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="shortcut icon"  type="image/x-icon" href="img/favicon.ico" />
  <meta charset="utf-8">
  <title>Na kontaktoni këtu</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/contact.css">
  <link rel="stylesheet" href="style/responsive.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&display=swap"> 
  <link rel="stylesheet" href="style/contact.css">
   <script type="text/javascript">
var now = new Date();
var hours = now.getHours();
//dita
if (hours > 6 && hours < 19){
 document.write ('<body style="background-color: #f0cef2">');
}
//nata
else {
 document.write ('<body style="background-color:#f0e5c9">');
}

</script>
 <style type="text/css">

   @font-face 
  {
    font-family: myFirstFont;
    src: url(doc/Ubuntu-Italic.ttf);
  }

  
  .container{
  background: white;
  border-radius: 1.2rem;
  border-radius: 5px;
  box-shadow: 4px 4px 2px #865473; 
}

.container h2
{
  font-family: myFirstFont;
  text-align: center;
  margin-bottom: 20px;
  margin-top: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #332902;
}

.container .input_field{
  margin-bottom: 10px;
}

.container .input_field input[type="text"],
.container textarea{
  border: 1px solid #e0e0e0;
  width: 100%;
  padding: 10px;
  background: white;
  color: black;
}

.container textarea{
  /*resize: none;*/
  height: 80px;

}

.container .btn input[type="submit"]{
  border: 0px;
  margin-top: 15px;
  margin-bottom: 40px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background: #c495b2;
  color: black;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 25px;
  cursor: pointer;
}
.container .btn input[type="submit"]:hover{
  background: #cfa9c0;
}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}
</style>
<script type="text/javascript">
  function validate(){
  var name = document.getElementById("name").value;
  var subject = document.getElementById("subject").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(name.length < 3){
    text = "Ju lutem vendosni emrin tuaj të plotë";
    error_message.innerHTML = text;
    return false;
  }
  if(subject.length < 5){
    text = "Tema duhet të përmbajë të paktën 5 shkronja";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length < 9){
    text = "Ju lutem vendosni numër telefoni valid";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Ju lutem vendosni e-mail adresë valide";
    error_message.innerHTML = text;
    return false;
  }
  if(message.length <= 10){
    text = "Ju lutem përdorni te pakten 10 shkronja në mesazhin tuaj";
    error_message.innerHTML = text;
    return false;
  }
  alert("Forma e kontaktit u dërgua me sukses! :)");
  return true;
}
</script>
</head>
<body>
  <div id="wrapper" class="wrapper">
    <header id="head">
      <div class="wrapper1">
        <div class="logo">
          <a href="#">Kontakti</a>
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
               <li><a href="ballina.html">BALLINA</a></li>
               <li><a href="#">FULL WIDTH</a></li>
               
               <li id="dropdowni"><a href="#">KATEGORITË</a>
                <ul>    
                  <li><a href="mode.html">Modë</a></li>
                  <li><a href="shendet.html">Shëndet</a></li>
                  <li><a href="hobi.html">Hobi</a></li>
                  <li><a href="storjet.html">Storje</a></li>
                </ul>
               </li>

               <li><a href="loja.html">LOJA</a></li>
               <li><a href="gallery.html">GALERIA</a></li>
               
   						<li id="dropdowni"><a href="#">KYÇU/REGJISTROHU</a>
               <ul>    
                <li><a href="dragdrop.html">Kyçu</a></li>
                <li><a href="regjistrimi.html">Regjistrohu</a></li>
                <li><a href="contact.html">Na kontakto</a></li>
               </ul>
              </li>
          

                 </ul>
                </nav>
        </div>  
      </header>
      
                  
    <main>

       <div class="container" style="margin-bottom: 20px;">  
  <h2>Na kontaktoni këtu</h2>
  <div id="error_message"></div>
  <form id="myform" onsubmit="return validate();" style="padding: 20px;">
    <div class="input_field">
        <input type="text" placeholder="Emri*" id="name" required autofocus>
    </div>
    <div class="input_field">
        <input type="text" placeholder="Tema*" id="subject">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Numri i telefonit*" id="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="E-mail adresa*" id="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Mesazhi*" id="message"></textarea>
    </div>
    <div class="btn">
        <input type="submit">
    </div>
    <p>Fushat me "*" janë obligative për tu plotësuar</p>
  </form>
</div>
      
          
       
          
      
      <section id="footer_ContactUs">
        <ul>
          <li>
            <div class="f_ContactUs">
                <h4>Na kontaktoni</h4>  
              <address>
               
               Revista Lifestyle  <br>
               Rr. "Eqrem Çabej"<br>
               Prishtinë, Kosovë <br>
               10000 <br>
               Tel: +383 44 000 000 <br>
               Fax: +383 38 000 000 <br>
               E-mail: revistalifestyleks@gmail.com <br>
               
              </address>
               </div>
             </li>
               <li>
             <div class="f_ContactUs">
               <h4>Vegëza </h4>
               <ul>
                 <li><a href="https://www.elle.com/">Revista Elle</a></li>
                 <! -- qysh me bo contact us shembull te qekjo ma poshte -->
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
                                                                                                                 
