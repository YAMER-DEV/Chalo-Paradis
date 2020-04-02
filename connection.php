<!DOCTYPE html>
<html>
<head>
	<title>Connection</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>

	<link rel="stylesheet" type="text/css "href="css/file.css">
	<script src="js/jquery-331.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/util.js"></script>

	<link rel="stylesheet" href="styles/bootstrap-337.min.css">
  	<link rel="stylesheet" href="icons/font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/uikit.min.css">
	



</head>
<style type="text/css">
	.icon {
  padding: 10px;
  font-size: 20px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 100%;
  margin-bottom: 10px;
}

.icon:hover {
    opacity: 0.7;
}

.icon-facebook {
  background: #3B5998;
  color: white;
}

.icon-twitter {
  background: #55ACEE;
  color: white;
}

.icon-google {
  background: #dd4b39;
  color: white;
}

.icon-linkedin {
  background: #007bb5;
  color: white;
}
.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}




/* BASIC */

html {
  /*background-color: #56baed;*/
}

body {
  font-family: "Poppins", sans-serif;
  
}

a {
  color: #edae56 ;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}



/* STRUCTURE */
.card-body{background-color: rgba(0,0,0,0.7);padding: 0;margin:10px;}
.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;

}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #000;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  /*background-color: #f6f6f6;*/
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #edae56 ;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #edae56 ;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #edae56;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text] {
  background-color: transparent;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 7px;
  width: 85%;
  border-bottom: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
 
  border-bottom: 2px solid #edae56 ;
}

input[type=text]:placeholder {
  color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover{float: right;margin-right: 15px;}
.underlineHover:after {
  display: block;
  width: 0;
  height: 2px;
  /*background-color: #56baed;*/
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}



/* OTHERS */

*:focus {
    outline: none;
} 

#icon {
  width:30%;
}

</style>
<body style="background:url(img/formBack1.jpg) no-repeat;background-size: cover;">

<a id="botona"></a>

 
<!-- top menu -->
  <div id="top">
    <div class="container">


      <div class="col-md-6 offer">
        <a href="#" class="btn btn-warning btn-sm"> Bienvenu chez Chalo Paradise  </a>
        <!-- <a href="panier.html" class="btn navbar-btn btn-warning  right">

          <i class="fa fa-shopping-cart"></i>
        </a> -->
      </div>

      <div class="col-md-6 ">
        <ul class="menu">

          <li> <a href="inscription.php">S'inscrire</a></li>
          <li> <a href="">mon Compte</a></li>
          <li> <a href="connection.php">Connection</a></li>

        </ul>

      </div>
    </div>
  </div>





  <!-- menu -->
  <div id="navbar" style ="margin-bottom: 0px;"class="navbar navbar-default">
    <div class="container">

      <div class="navbr-header">
        <!--  -->

        <a href="index.php" style="height: 90px;padding: 0px 15px;" class="navbar-brand home">

          <img src="Logo.png" style="max-width:220px;max-height:90px" alt="Logo">

        </a>
        <!--  menu search mode mobile -->
        <button class="navbar-toggle" style="margin-top: 20px" data-toggle="collapse" data-target="#navigation">


          <i class="fa fa-align-justify"></i>

        </button>

        <button class="navbar-toggle"style="margin-top: 20px" data-toggle="collapse" data-target="#search">


          <i class="fa fa-search"></i>

        </button>

      </div>
	      <style type="text/css">


				 @media (max-width: 991px){

				          .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {margin-left: 285px;}
				          .navbar>.container  .navbar-collapse >.padding-nav>.navbar-nav {margin-left: 85px} 

				           }

				@media (max-width: 767px){.navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
				    margin-left: 2px;
				}}

	      </style>
      <div class="navbar-collapse collapse" id="navigation">
        <div class="padding-nav">
          <ul class="nav navbar-nav left" style="margin-top: 20px; margin-left: 30px">

            <li>
              <a href="index.php">Accueil</a>
            </li>
            <li>
              <a href="Produit.php">Nos produits</a>
            </li>
            <li>
              <a href="service.php">Nos Services</a>
            </li>
            <li>
              <a href="gallery.php">Gallerie</a>
            </li>
            <li>
              <a href="apropos.php">A propos</a>
            </li>

            <li>
              <a href="contact.php">Contactez nous</a>
            </li>
           

          </ul>

        </div>
        <!-- search -->

        <div class="navbar-collapse collapse right">

          <button style="margin-top: 25px" class="btn btn-warning navbar-btn" type="button" data-toggle="collapse" data-target="#search">

            <i class="fa fa-search"></i>

          </button>

        </div> 
        <!-- search form -->
        <div class="collapse clearfix" id="search">

          <form method="get" action="results.php" class="navbar-form">

            <div class="input-group">

              <input type="text" class="form-control" placeholder="Search" name="user_query" required>

              <span class="input-group-btn">

                <button type="submit" name="search" value="Search" class="btn btn-warning">

                  <i class="fa fa-search"></i>

                </button>

              </span>

            </div>

          </form>

        </div>

      </div>
    </div>   
  </div>




  <div class="container-fluid boxIndex" style="background-color: black;color: white;font-size: large;font-weight: bold;text-align: center;vertical-align: middle;opacity: 0.9;background: url(img/backbox.jpeg);background-size: cover;background-repeat: no-repeat;">
   <h2 class="" style="color: white;padding: 20px">Connection</h2> 
 </div>

 <center>
   <div class="container-fluid bg-light" style="margin-bottom: 40px">


     <div class="card">
       <article class="card-body mx-auto" style="max-width: 470px;">


            <br>            <!-- Icon -->
            <div class="fadeIn first">
              <img src="logo.png" id="icon" alt="User Icon" />
            </div>
            <br>

            <!-- Login Form -->
            <form>
              <input type="text" id="login" class="fadeIn second" name="login" placeholder="Nom d'utilisateur">
              <input type="text" id="password" class="fadeIn third" name="login" placeholder="mot de passe">
           
              <a class="underlineHover" href="#"  data-toggle="modal" data-target="#exampleModal">Mot de passe oublié?</a>
           <br><br><br>
              <input type="submit" class="fadeIn fourth btn " value="Se Connecter">
            </form>

            <!-- Remind Passowrd -->
 
            <p class="text-center text-warning" style="font-size: medium;color: white;margin-top: 0;">Accés rapide avec</p>
            <div>

               <a href="#" class="icon icon-facebook fa fa-facebook"></a>
               <a href="#" class="icon icon-twitter fa fa-twitter"></a>
               <a href="#" class="icon icon-google fa fa-google"></a>
               <a href="#" class="icon icon-linkedin fa fa-linkedin"></a>

             </div>

     </article>
   </div> <!-- card.-->
 </div>
</center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nssiti lmot de passe tani ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
           <h4>Pour rénitialiser votre mot de passe entrez votre email</h4>
           <input type="email" placeholder="Email" class="form-control" required="">
           <br>
           <button type="submit" class="btn btn-success">Envoyer</button>
        </form>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
       
      </div>
    </div>
  </div>
</div>


 <?php
include("include/footer.php");
?>
</body>
</html>