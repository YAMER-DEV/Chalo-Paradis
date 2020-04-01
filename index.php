

<!DOCTYPE html>

<html>

<head>
  
  <title>Accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>

  <link rel="stylesheet" type="text/css "href="css/file.css">
  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
  <script src="jss/uikit-icons.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/util.js"></script>

  <link rel="stylesheet" href="styles/bootstrap-337.min.css">
  <link rel="stylesheet" href="icons/font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/uikit.min.css">
  


</head>

<body>
<?php
include("include/header.php");
?>
  <!-- sidebar+slider -->
  <div class="container-fluid" style="margin-top: 10px" >
    <!-- side bar -->
         <?php
      include("include/sidebar.php");
      ?>



    <div class="col-md-1"><br></div>
    <!-- slider -->
    <div class="col-md-8">
      <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push">

        <ul class="uk-slideshow-items">
          <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-left">
              <img src="images/slideE.jpg" alt="" uk-cover>
            </div>
          </li>
          <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
              <img src="images/slideC.jpg" alt="" uk-cover>
            </div>
          </li>
          <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-right">
              <img src="images/slideD.jpg" alt="" uk-cover>
            </div>
          </li>
          <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-left">
              <img src="images/slideB.jpg" alt="" uk-cover>
            </div>
          </li>
           <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-left">
              <img src="images/slidA.jpg" alt="" uk-cover>
            </div>
          </li>
          <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-left">
              <img src="images/slideF.jpg" alt="" uk-cover>
            </div>
          </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

      </div>
    </div>
  </div>  


   <!-- Categories -->
  <h3 class="uk-heading-line uk-text-center"><span> Categories </span></h3>
  <div class="  uk-child-width-1-4@m uk-child-width-1-2@s " uk-grid style="margin-left:30px;margin-bottom: 10px">
    
    <div class="">
      <center>  
       <div class="carduk uk-inline ">
            <a href="#"><img src="images/visageA.jpg" alt=""></a>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                <p>Beauté du Visage</p>
            </div>
        </div>
      </center>
    </div>  

    <div class="">
      <center>  
       <div class="carduk uk-inline">
            <a href="#"><img src="images/corps.jpg" alt=""></a>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                <p>Beauté du corps</p>
            </div>
        </div>  
      </center> 
    </div >  
    <div class="">
      <center>  
       <div class="carduk uk-inline">
            <a href="#"><img src="images/huileA.jpg" alt=""></a>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                <p>Huiles alimentaire</p>
            </div>  
        </div>
        </center>
    </div>  
    <div class="">
      <center>  
       <div class="carduk uk-inline">
            <a href="#"><img src="images/cheveaux (1).jpg" alt=""></a>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                <p>beaute de cheveaux</p>
            </div>  
        </div>
      </center>
    </div>  

    <div class="">
      <center>  
       <div class="carduk uk-inline">
            <a href="#"><img src="images/food.jpg" alt=""></a>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                <p>Super food</p>
            </div>
        </div> 
      </center> 
    </div>  


     <div class="">
      <center>  
       <div class="carduk uk-inline">
            <a class="href"><img src="images/bijou.jpg" alt=""></a>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                <p>Les accessoires</p>
            </div>
        </div> 
      </center> 
    </div>  

    <div class="">
      <center>  
       <div class="carduk uk-inline">
            <a href="#"><img src="images/makeup.jpg" alt=""></a>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                <p>Make up</p>
            </div>
        </div> 
      </center> 
    </div >  
    <div style="margin-bottom: 0px;margin-right: -20px"><center>  
       <div class="carduk uk-inline">
            <a href="#"><img src="images/visageA.jpg" alt=""></a>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                <p>Beauté du Visage</p>
            </div>
        </div>
    </div> </center>  
  </div>

<!-- Les services du site -->
  <h3 class="uk-heading-line uk-text-center"><span> Nos Services </span></h3>
  <div class="  uk-child-width-1-4@m uk-child-width-1-2@s " uk-grid style="margin-right: 30px; margin-bottom: 10px">
      
    <div class="card-flip" >
      <center>  
        <div class=" uk-inline card-flip " >
          <div class="card-front">
            <a href="#"><img src="images/soin.jpg" alt="" style="border-radius: 30px;width: 100%"></a>
            <div style=""  class="uk-overlay uk-overlay-primary uk-position-bottom In_Service_Text">
              <p>Massage</p>
            </div>
          </div> 
          <div class="card-back" style=" color : white; width: 100%">
           <p style="margin-top: 80px">Découvrez les meilleure adresse de massage sélectionnées à Marrakech. Le temps s’arrête, bye bye maux de dos, stress et noeuds musculaires, place à la relaxation !</p>
          </div>
        </div>  
      </center>
    </div>

    <div class="card-flip" >
      <center>  
        <div class=" uk-inline card-flip " >
          <div class="card-front">
            <a href="#"><img src="images/spa.jpg" alt="" style="border-radius: 30px;width: 100%"></a>
            <div style=""  class="uk-overlay uk-overlay-primary uk-position-bottom In_Service_Text">
              <p>SPA</p>
            </div>
          </div>     
          <div class="card-back" style="width: 100%">
            <p style="margin-top: 80px">Votre escapade spa est une invitation à suspendre le cours du temps et à vous ressourcer pour un moment de relaxation intense. </p>
          </div>
        </div>  
      </center>
    </div>

    <div class="card-flip" >
      <center>  
         <div class=" uk-inline card-flip " >
          <div class="card-front">
            <a href="#"><img src="images/soin (2).jpg" alt="" style="border-radius: 30px;width: 100%"></a>
            <div style=""  class="uk-overlay uk-overlay-primary uk-position-bottom In_Service_Text">
              <p>Soins</p>
            </div>
          </div>
          <div class="card-back"  style="width: 100% ">
            <p style="margin-top: 80px;">Accordez-vous toujours un moment pour prendre soin de vous. Chalo paradise  et un spas vous offrent de de produits pour vous faire vivre des expériences bien-être inédites ! Hammam, soins du visage, massages…</p>
          </div>
        </div>
      </center>
    </div>

  
    <div class="card-flip" >
    <center>  
      <div class=" uk-inline card-flip " >
        <div class="card-front">
          <a href="#"><img src="images/esthetique.jpg" alt="" style="border-radius: 30px;width: 100%"></a>
          <div style=""  class="uk-overlay uk-overlay-primary uk-position-bottom In_Service_Text">
            <p>Coifure et Esthetique</p>
          </div>
        </div>
        
        <div class="card-back" style="width: 100%">
          <p style="margin-top: 80px">Accordez-vous un moment pour vous refaire une beauté à Chalo Paradise. Une escapade dans notre Salon vous permettra de mettre en valeur votre image et votre personnalité.</p>
        </div>
      </div>
    </center>
    </div>    
  </div>      
  </div>  
  <!-- Nouveautés  -->
  <h3 style ="margin-top: 30px;"class="uk-heading-line uk-text-center"><span> Nouveautés</span></h3>
  <div class="container-fluid" style="margin-bottom:25px;border:solid 1px #ec971f; border-top: 0px;">   
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider  >
      <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid" >
        <li class="center-responsive article">
          <center>
            <div style="color: black" class=" carduk row">
              <a href="#"><img class="imgpro" src="img/huileargan.jpg"></a>
              <h3 class="uk-width-expand"style="color: black" >Huile de graine barbarie </h3>
              <p class="uk-width-expand">  190.00DH </p>
              <p class="uk-width-expand">  L’huile de graines  100% naturel et certifié BIO et sans aditifs. </p>
              <div>
                <div class="col-md-12 "style=" margin-bottom: 10px ;">
                  <a href="#"><button  class="uk-button  uk-button-warning"> <i style="margin-right: 10px"class="fa fa-shopping-cart "></i> Ajouter au panier
                  </button></a>
                </div>
                <div class=" col-md-12" style="margin-bottom: 10px ; ">
                  <a href="#"><button class="uk-button  uk-button-warning"><i style="margin-right: 10px" class="fa fa-eye "></i>voir details</button></a>
                </div>
              </div>
            </div>
          </center>
        </li>
        <li class="center-responsive article">
          <center>
            <div style="color: black" class=" carduk row  ">
              <img class="imgpro" src="img/ghasol.jpg">
              <h3  style="color: black" class="uk-width-expand"> Ghassool facemask 250g</h3>
              <p class="uk-width-expand">  50.00DH </p>
              <p class="uk-width-expand"> Grâce à sa riche appliqué en masque pour le visage,le corps.</p>
              
              <div>
                <div class="col-md-12 "style=" margin-bottom: 10px ;">
                  <button  class="uk-button  uk-button-warning js-cd-add-to-cart"> <i style="margin-right: 10px"class="fa fa-shopping-cart cd-add-to-cart  "></i> Ajouter au panier  
                  </button>
                </div>
                <div class=" col-md-12" style="margin-bottom: 10px ; ">
                  <button class="uk-button  uk-button-warning">
                  <i style="margin-right: 10px" class="fa fa-eye "></i>voir details</button>
                </div>
            </div>
          </center>
        </li>
        <li class="center-responsive article">
          <center>
            <div style="color: black" class=" carduk row  ">
              <a href="#"><img class="imgpro" src="img/ghasol.jpg"></a>
              <h3  style="color: black" class="uk-width-expand">Eau de rose biologiqu</h3>
              <p class="uk-width-expand">  150.00 Dhs </p>
              <p class="uk-width-expand"> L'eau est obtenue après distillation de pétales de roses d’un endroit  </p>
              
              <div>
                <div class="col-md-12 "style=" margin-bottom: 10px ;">
                  <a href="#"><button  class="uk-button  uk-button-warning"> <i style="margin-right: 10px"class="fa fa-shopping-cart "></i> Ajouter au panier  
                  </button></a>
                </div>
                <div class=" col-md-12" style="margin-bottom: 10px ; ">
                  <a href="#"><button class="uk-button  uk-button-warning">
                  <i style="margin-right: 10px" class="fa fa-eye "></i>voir details</button></a>
                </div>
            </div>
          </center>
        </li>
        <li style="margin-bottom: 10px" class="center-responsive article">
          <center>
            <div style="color: black" class=" carduk row   ">
              <a href="#"><img class="imgpro" src="img/eaurose.jpg"></a>
              <h3  style="color: black" class="uk-width-expand">  Eau de rose biologique</h3>
              <p class="uk-width-expand">150.00 Dhs</p>
              <p class="uk-width-expand">L'eau est obtenue après distillation de pétales de roses d’un endroit </p>
              <div  >
                <div class="col-md-12 "style=" margin-bottom: 10px ;">
                  <a href="#"><button  class="uk-button  uk-button-warning"> <i style="margin-right: 10px"class="fa fa-shopping-cart "></i> Ajouter au panier
                </button></a>
                </div>
                <div class=" col-md-12" style="margin-bottom: 10px ; ">
                  <a href="#"><button class="uk-button  uk-button-warning">
                    <i style="margin-right: 10px" class="fa fa-eye "></i>
                  voir details</button></a>
                </div>
              </div>
            </div>
          </center>
        </li>           
      </ul>
      <a class="uk-position-center-left uk-position-small " href="#" uk-slidenav-previous uk-slider-item="previous" style="margin-left: 0px;background-color: #ec971f"></a>
      <a class="uk-position-center-right uk-position-small " href="#" uk-slidenav-next uk-slider-item="next" style=" margin-right: 0px; background-color: #ec971f"></a>
    </div>
  </div>


  <!-- Nos promotions -->
  <h3 style ="margin-top: 30px;"class="uk-heading-line uk-text-center"><span> Nos promotions </span></h3>
  <div class="container-fluid" style="margin-bottom:25px;border:solid 1px #ec971f; border-top: 0px;">   
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider  >
      <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid" >
        <li class="article" style="margin-bottom: 10px">
          <center>
            <div style="color: black" class=" carduk row">
              <img class="imgpro" src="img/huileargan.jpg">
              <h3 class="uk-width-expand"style="color: black" >Huile de graine barbarie </h3>
              <p class="uk-width-expand">  190.00DH </p>
              <p class="uk-width-expand">  L’huile de graines  100% naturel et certifié BIO et sans aditifs. </p>
              <div>
                <div class="col-md-12 "style=" margin-bottom: 10px ;">
                  <button  class="uk-button  uk-button-warning"> <i style="margin-right: 10px"class="fa fa-shopping-cart "></i> Ajouter au panier
                  </button>
                </div>
                <div class=" col-md-12" style="margin-bottom: 10px ; ">
                  <button class="uk-button  uk-button-warning"><i style="margin-right: 10px" class="fa fa-eye "></i>voir details</button>
                </div>
              </div>
            </div>
          </center>
        </li>
        <li class="article">
          <center>
            <div style="color: black" class=" carduk row  ">
              <img class="imgpro" src="img/ghasol.jpg">
              <h3  style="color: black" class="uk-width-expand"> Ghassool facemask 250g</h3>
              <p class="uk-width-expand">  50.00DH </p>
              <p class="uk-width-expand"> Grâce à sa riche appliqué en masque pour le visage,le corps.</p>
              
              <div>
                <div class="col-md-12 "style=" margin-bottom: 10px ;">
                  <button  class="uk-button  uk-button-warning"> <i style="margin-right: 10px"class="fa fa-shopping-cart "></i> Ajouter au panier  
                  </button>
                </div>
                <div class=" col-md-12" style="margin-bottom: 10px ; ">
                  <button class="uk-button  uk-button-warning">
                  <i style="margin-right: 10px" class="fa fa-eye "></i>voir details</button>
                </div>
            </div>
          </center>
        </li>
        <li class="article">
          <center>
            <div style="color: black" class=" carduk row   ">
              <img class="imgpro" src="img/eaurose.jpg">
              <h3  style="color: black" class="uk-width-expand">  Eau de rose biologique</h3>
              <p class="uk-width-expand">150.00 Dhs</p>
              <p class="uk-width-expand">L'eau  obtenue après distillation de pétales de roses d’un endroit </p>
              <div  >
                <div class="col-md-12 "style=" margin-bottom: 10px ;">
                  <button  class="uk-button  uk-button-warning"> <i style="margin-right: 10px"class="fa fa-shopping-cart "></i> Ajouter au panier
                </button>
                </div>
                <div class=" col-md-12" style="margin-bottom: 10px ; ">
                  <button class="uk-button  uk-button-warning">
                    <i style="margin-right: 10px" class="fa fa-eye "></i>
                  voir details</button>
                </div> 
              </div>
            </div>
          </center>
        </li>
        <li class="article">
          <center>
            <div style="color: black" class=" carduk row   ">
              <img class="imgpro" src="img/eaurose.jpg">
              <h3  style="color: black" class="uk-width-expand">  Eau de rose biologique</h3>
              <p class="uk-width-expand">150.00 Dhs</p>
              <p class="uk-width-expand">L'eau est obtenue après distillation de pétales de roses d’un endroit</p>
              <div  >
                <div class="col-md-12 "style=" margin-bottom: 10px ;">
                  <button  class="uk-button  uk-button-warning"> <i style="margin-right: 10px"class="fa fa-shopping-cart "></i> Ajouter au panier
                </button>
                </div>
                <div class=" col-md-12" style="margin-bottom: 10px ; ">
                  <button class="uk-button  uk-button-warning">
                    <i style="margin-right: 10px" class="fa fa-eye "></i>
                  voir details</button>
                </div>
              </div>
            </div>
          </center>
        </li>           
      </ul>
      <a class="uk-position-center-left uk-position-small " href="#" uk-slidenav-previous uk-slider-item="previous" style="margin-left: 0px;background-color: #ec971f"></a>
      <a class="uk-position-center-right uk-position-small " href="#" uk-slidenav-next uk-slider-item="next" style=" margin-right: 0px; background-color: #ec971f"></a>
    </div>
  </div>


 <!-- service client -->     
  <h3 class="uk-heading-line uk-text-center"><span> service client </span></h3>
  <div class="customer_support">
    <div class="container">
    	<div class="row">
	        <div class="col-xs-12 col-lg-4" style="margin-bottom: 40px;margin-top: 20px">         
	        	<div class="info">
		            <table width="100%"> 
		            	<tr>  
		              		<td align="right"><i style="font-size: 80px" class="fa fa-hourglass"></i>  </td>
		              		<td> 
				                <div class="txt">
				                  <span class="txt1">Lun - Ven / 09:00 - 18:00</span> <span class="txt2"> Jours / heures de travail</span>
				                </div>
		              		</td>
		            	</tr>
		          	</table>
	        	</div>
	        </div>
	        <div class="col-xs-12 col-lg-4 " style="margin-bottom: 40px;margin-top: 20px">
	        	<div class="info" style="padding: 5px">
	           		<table width="100%"> 
	            		<tr>  
	            			<td align="right"><i style="font-size: 120px" class="fa fa-mobile"></i>  </td>
	            			<td> 
		                		<div class="txt">
		                  			<span class="txt1">05 22 97 65 42</span> <span class="txt2"> Allo Boutika</span>
		                		</div>
	              			</td>
	            		</tr>
	          		</table>
	         	</div>
	        </div>
	        <div class="col-xs-12 col-lg-4" style="margin-bottom: 40px;margin-top:20px">
	        	<div class="info">
	            	<table width="100%"> 
		             	<tr>  
		            		<td align="right"><i style="font-size: 80px" class="fa fa-envelope"></i>  </td>
		            		<td> 
			                	<div class="txt">
			                  		<span class="txt1">contact@boutika.ma</span> <span class="txt2"> Contactez-nous par e-mail</span>
			                	</div>
		              		</td>
		            	</tr>
	          		</table>
	        	</div>
	      	</div>
    	</div>
  	</div>
  </div>

  <!-- footer  -->
<?php
include("include/footer.php");
?>




</body>

</html>