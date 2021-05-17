<!DOCTYPE html>
<html lang="en" manifest="offline.appcache">
<head>
	 <link rel="shortcut icon"  type="image/x-icon" href="img/favicon.ico" />
	<meta charset="utf-8">
	<title>Life Style</title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/responsive.css">
	<link rel="stylesheet" href="style/storjet.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<script type="text/javascript" src="skript/fullwidth.js"></script>
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
<body id="body">
	<div id="wrapper" class="wrapper">
		<header id="head">
			<div class="wrapper1">
			<div class="logo">
				<a href="#">Lifestyle</a>
			</div>
       				    <div class="search">
						<form action="ballina.php" method="get">
						<input id="Button" type="text" placeholder="Kërko në faqe" name="name">
						<button id="Button" type="submit"><i class="fas fa-search"></i></button>
					</form>
				    </div>
				    Te gjitha kerkimet me :
				    <?php   
				    echo $_GET["name"] ?>
				 <script type="text/javascript">document.getElementById("Button").disabled = false;</script>
				<br>
				<br>
				<br>
					<nav>
		 			     <ul class="navigation">
				  		 <li><a href="ballina.php">BALLINA</a></li>
				  		 <li id="width"><a onclick="narroved_width()" href="#">FULL WIDTH</a></li>
						   
						 <li id="dropdowni"><a href="#">KATEGORITË</a>
							<ul>    
								<li><a href="mode.php">Modë</a></li>
								<li><a href="shendet.php">Shëndet</a></li>
								<li><a href="hobi.php">Hobi</a></li>
								<li><a href="storjet.php">Storje</a></li>
							</ul>
						 </li>						   

				   		 <li><a href="loja.html">LOJA</a></li>
				   		 <li><a href="Gallery.html">GALERIA</a></li>
						
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

<!-- 				<div class="coverpic" style="padding-top: 90px;">

					<div style="position: absolute; left: 0; padding: 20px 50px;">
					  <span class="change_click" onclick="currentSlide(1)"></span> 
					  <span class="change_click" onclick="currentSlide(2)"></span> 
					  <span class="change_click" onclick="currentSlide(3)"></span> 
					</div>
					<img id="cover-i" style="width:100%; height:380px">

					<div class="caption">
					  <h3 id="h3">Lifestyle</h3>
					  <p id="p">Cfarë do të shihni në webfaqen tonë?</p>
					</div>
					
				  <a class="back" onclick="nextSlide(-1)">&#10096;</a>
				  <a class="next" onclick="nextSlide(1)">&#10097;</a>

			 	 </div> -->


<!-- 		      <section> -->
				<section id="image">
	         		 	<div class="imagewrapper">
				<div class="image_img">
						<div class="galleryslide">
		      		<div class="slider">
					<div class="slides">
						<input type="radio" name="radio-btn" id="radio1">
						<input type="radio" name="radio-btn" id="radio2">
						<input type="radio" name="radio-btn" id="radio3">
						<input type="radio" name="radio-btn" id="radio4">
						<div class="slide first">
			          <img src="img/lifestylecover.jpg" alt="Fotoja e kopertinës"style="width: 100%"></div>
					<div class="slide"><img src="img/cover2.jpg"style="width: 100%"></div>
					<div class="slide"><img src="img/cover3.jpg"style="width: 100%"></div>
					<div class="slide"><img src="img/cover4.jpg"style="width: 100%"></div>
					<div class="navigation-auto">
			        <div class="auto-btn1"></div>
					<div class="auto-btn2"></div>
					<div class="auto-btn3"></div>
					<div class="auto-btn4"></div>
					</div>
					</div>
					<div class="navigation-manual">
					<label for="radio1" class="manual-btn"></label>
					<label for="radio2" class="manual-btn"></label>
					<label for="radio3" class="manual-btn"></label>
					<label for="radio4" class="manual-btn"></label>
				</div>
				</div>
				</div>
				</div>
				</div>
				<div class="contact">
			
					<h2><mark style="background-color: #e7e7e7;"><?php
				    $array = array( 'Që të bëheni pjesë e faqes sonë,', 'na tregoni storjen tuaj <br>
				     dhe ne e ndajmë atë me botën!!');

                    $string = implode(' ', $array); // Perdoret nje hapesire si bashkues midis elementeve

                    echo $string;
                   ?></mark></h2>
					<a href="contact.html"><?php
				$string = " \n NA KONTAKTONI \t\t";
				echo trim($string);
			   ?></a>
  		   	          </div>
				</section>
				<<?php

				class Titulli{
				public $title;
				function __construct($aTitle){
				$this->title = $aTitle;
				             }

				function getTitle(){
				return $this->title;
					           }
				function setTitle($title) {
				if(strlen($title)  >= 4){
				$this->title = $title;
							}
				else {
				$this->title = "Pa titull";
				     }
						          }
						          }

				$title1 = new Titulli("Modë");
				$title2 = new Titulli("Shëndet");
				$title3 = new Titulli("Hobi");
							?>

	 
				<div>
					<section id="facilis">
	
						<div class="facilis_content"> 
							<ul>
							   <li>
							  <div class="service_s">
								<h4><a href="mode.php"><?php echo $title1->getTitle(); ?></a></h4>
								<img src="img/mode.jpg" width="100" height="100" alt="Imazh">
									<!--indexed arrays -->
								<?php
								$trendet = array("Trendet 2020", "Trendet 2021", "Brende","Blogere"); 
								echo "<br>";
								echo $trendet[0];
								echo "<br>";
								echo $trendet[1];
								echo "<br>";
								echo $trendet[2];
								echo "<br>";
								echo $trendet[3];
								?>
							  </div>
							  </li>
	
									
							  <li>
								<div class="service_s">
								  <h4><a href="shendet.php"><?php echo $title2->getTitle(); ?></a></h4>
								  <img src="img/shendet.jpg" width="100" height="100" alt="Imazh">
								  <!-- associative array -->
								  <?php
								  $shendet=array(4=>"Ushqime",2=>"Fitnes dhe joga",8=>"Ecje në natyrë",5=>"Sport",9=>"Muzikë për aktivitetet tuaja sportive");
								 # $shendet[4] = "Ushqime";
								 # $shendet[2] = "Fitnes dhe joga";
							     # $shendet[8] = "Ecje në natyrë";
							     # $shendet[5] = "Sport";
							     # $shendet[9] = "Muzikë për aktivitetet tuaja sportive";
							    echo "<br>";
								#definimi i konstantes
								define("FOOD", "Ushqime");
								echo FOOD;
								echo "<br>";
								echo $shendet[2];
								echo "<br>";
								echo $shendet[8];
								echo "<br>";
								echo $shendet[5];
								echo "<br>";
								echo $shendet[9];
								  ?>
								</div>
								</li>
								
								<li>
									<div class="service_s">
									  <h4><a href="hobi.php"><?php echo $title3->getTitle(); ?></a></h4>
									  <img src="img/hobi.jpg" width="100" height="100" alt="Imazh">
									  <!--multidimensional array -->
									  <?php
									  $udhetime=array(
									  		   array("Udhëtime","Hike"),
									  		   array("Fotografi","Dekorime")

									  );
									  echo "<br>";
									  echo $udhetime[0][0];
									  echo "<br>";
									  echo $udhetime[0][1];
										echo "<br>";
									  echo $udhetime[1][0];
										echo "<br>";
									  echo $udhetime[1][1];
										 ?>
									</div>
									</li>
							  
				   
					   </ul>
					  </div>
	
						  
							 </section>
						</div>
					
					
					     <section id="facilis">
						<div class="facilis_title">	
							
							
							
						<h2 id="s_button"><a href="storjet.php" >Historitë tuaja </a></h2>
						<div class="facilis_border"></div>
					   </div>
						     
					   <div class="facilis_content"> 
					     <ul>
					        <li>
						   <div class="single_facilis">
							<img src="img/pikture.jpg" width="300" height="170" alt="img1">
							<h4> Inspiruese </h4>
							<p> Një vajzë e re në moshë, por që ka arritur majat e suksesit që në klasë të pestë. 
								Vanesa na frymëzon me historinë e saj rreth pasionit për pikturën.</p>
						   </div>
					       </li>
						     
				            <li>
						<div class="single_facilis">
						  <img src="img/wheelchair.jpg" width="300" height="170" alt="img2">
						  <h4> Emocionale</h4>
						  <p> Genti, një djalë me shumë energji dhe pozitivitet, 
							  na rrëfen për jetën e tij me plotë sfida, pasionin e shuar për futbollin,
							  planet për të ardhmen dhe shumëçka tjetër..	</p>
					   </div>
					</li>
						     
					<li>
					   <div class="single_facilis">
					      <img src="img/writing.jpg" width="300" height="170" alt="img3">
					      <h4> Heroike</h4>
					      <p> Si arriti një grua e vetme, në kushte shtëpie, 
							  të ju mësojë shkrim-leximin rreth 200 personave të lagjes 
							  së saj në vitet e 60-ta? Lexoni rrëfimin e Natyrës.. </p>
					    </div>
					</li>
			
			
					<li>
					   <div class="single_facilis">
					   <img src="img/argetuese.jpg" width="300" height="170" alt="img4">
					   <h4> Argëtuese </h4>	
					   <p> Përmes programit argëtues "Qielli është i të gjithëve",
							u argëtuan 23 të rinjë. Të rinjtë sëbashku performuar lojra për njohjen e 
						    <?php
							class Foo
								{
  								  protected $title;

    							public function __construct($title)
    								{
       								 $this->title = $title;
    								}

   							     public function __toString()
    								{
        							   return $this->title;
    								}
								}

								$array = [
   							     new Foo('njëri –tjetrit'),
   								 new Foo('lojra'),
   								 new Foo('role të ndryshme')
								];

								echo implode('; ', $array);
							?> etj. </p>
				
				       </div>
				   </li>
						   
				<li>
				   <div class="single_facilis">
					<img src="img/festa.jpg" width="300" height="170" alt="img5">
					<h4> Festive </h4>
					<p> Nxënësit e klasëve të para të shkollës fillore "Hasan Prishtina"
						 në Prishtinë, organizojnë festën e abetares, këtë herë më ndryshe
					    se sa çdo vit tjetër në kushte pandemie. </p>
				    </div>
				</li>
						   
				<li>
				   <div class="single_facilis">
					<img src="img/kreative.jpg" width="300" height="170" alt="img6">
					<h4> Kreative </h4>
					<p> Gresa dhe Aida tregojnë për punimin e kartolinave unike.
						Tregojnë se si u rrit kërkesa pas pranverës së vitit 2020 dhe 
						se si me mjetet e fituara shkojnë për bamirësi.
					</p>
					</div>
				    </li>
			        </ul>
				   </div>
				   <h2 id="stories" style="margin-left: 27%;"><a href="storjet.html" >LEXO MË SHUMË STORJE DHE LAJME >></a></h2>
	             </section>
			
		     <section id="footer_ContactUs" style="margin-top: -80px;">
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
							<a href="mailto:revistalifestyleks@gmail.com">E-mail: revistalifestyleks@gmail.com</a> <br>
							
						     </address>
							<!-- date and time -  built-in function-->
						     <?php 
						    $date = date('d-m-y h:i:s');
							echo $date; ?>
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
							 	<input type="text" placeholder="Emri">
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
					<p> Copyright © 
						<?php
					$subject = "27.-5.-2021";
					//Zevendeson vizat me hapesira
					$stringa_e_re = str_replace('-', ' ', $subject);
					echo $stringa_e_re; 
					?>
						-All Rights Reserved - Domain Name
					<span> 
						Template by OS Templates
					</span>
				     </p>
			        </div>
			  </footer>	
		</main>	
	</div>		
  </body>
  <script>
	   var counter = 1;
	setInterval(function(){
		document.getElementById('radio' + counter).checked = true;
		counter++;
		if(counter > 4){
			counter =1;
		}

	}, 5000)

//     var slideIndex = 1;
//     slide(slideIndex);
    
// 	function nextSlide(n)
// 	 {
//         slide(slideIndex += n);
//      }   
// 	function currentSlide(n)
// 	 {
//         slide(slideIndex = n);
//      }   
// 	function slide(n) 
// 	{
//       var covers = ["img/lifestylecover.jpg","img/lifestylecover2.jpg","img/lifestylecover3.jpg"];
//       var h3 = ["Stile jetese","Shendet","Mode"];
//       var p = ["dicka","shendet dicka 222","mode dicka 333"];
//       var i;
// 	  var changes_click = document.getElementsByClassName("change_click");
	  
// 	  if (n > covers.length)
// 	   {
// 		   slideIndex = 1
// 	    }    

// 	  if (n < 1)
// 	   {
// 		   slideIndex = covers.length
// 	    }
      
//       var img = document.getElementById("cover-i");
//       img.src = covers[slideIndex - 1];
//       document.getElementById("h3").innerHTML = h3[slideIndex - 1];
//       document.getElementById("p").innerHTML = p[slideIndex - 1];
       
// 	  for (i = 0; i < covers.length; i++) 
// 	   {
// 		changes_click[i].className = changes_click[i].className.replace(" active", "");
// 		}
		
// 	  changes_click[slideIndex-1].className += " active";
//     }
	  
    </script>

  </html>
