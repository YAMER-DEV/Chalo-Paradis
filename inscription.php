<!DOCTYPE html>
<html>
<head>
	<title>incription</title>
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
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


</head>
<style type="text/css">
	

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}

</style>
<body>


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

<div class="container-fluid boxIndex" style="background-color: black;color: white;font-size: large;font-weight: bold;text-align: center;vertical-align: middle;opacity: 0.9;background: url(img/backbox.jpeg);background-size: cover;background-repeat: no-repeat;">
 <h2 class="" style="color: white;padding: 20px">INSCRIPTION</h2> 
</div>

<div class="container">






<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 470px;">
	
	
	<br><br>
	<form style="width: 400px;">
		<div class="form-group input-group" >
			<div class="input-group-prepend" >
			    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
			 </div>
	        <input name="" class="form-control" placeholder="Nom et Prénom" type="text">
	    </div> 
	    <div class="form-group input-group">
	    	<div class="input-group-prepend">
			    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
			 </div>
	        <input name="" class="form-control" placeholder="adresse email" type="email">
	    </div> 
	    <div class="form-group input-group">
	    	<div class="input-group-prepend">
			    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
			</div>
			
	    	<input name="" class="form-control" placeholder="Numero de telephone" type="text">
	    </div> 
	     
	    <div class="form-group input-group">
	    	<div class="input-group-prepend">
			    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
	        <input class="form-control" placeholder="Mot de passe" type="password">
	    </div> 
	    <div class="form-group input-group">
	    	<div class="input-group-prepend">
			    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
	        <input class="form-control" placeholder="Comfirmer le mot de passe" type="password">
	    </div>                                     
	    <div class="form-group">
	        <button type="submit" class="btn btn-warning btn-block"> Créer Compte  </button>
	    </div>      
	    <p class="text-center">Vous avez un compte? <a href="Connection.php">Connection</a> </p>                                                                 
	</form>
	
	<br>
	<p class="text-center">Accés rapide avec</p>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fa fa-twitter"></i>   Connectez-vous via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fa fa-facebook-f"></i>   Connectez-vous via facebook</a>
	</p>
	
</article>
</div> <!-- card.-->

</div> 
<?php
include("include/footer.php");
?>
</body>
</html>