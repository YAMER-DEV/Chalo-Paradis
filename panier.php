<!DOCTYPE html>
<html>
<head>
  <title> Panier</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>

  <link rel="stylesheet" type="text/css "href="css/file.css">
  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
  <script src="jss/uikit-icons.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>

  <link rel="stylesheet" href="styles/bootstrap-337.min.css">
  <link rel="stylesheet" href="icons/font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/uikit.min.css">
</head>
<style type="text/css">
input[type=reset]  {
  background-color: red ;
  border: none;
  color: white;
  width: 92px;
  padding: 0px 0px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  }
  input[type=checkbox]  {
  content: ''; */
    display: block;
    /* position: absolute; */
    /* top: 86px; */
    left: 9px;
    width: 81px;
    height: 19px;
    border: solid ;
    background-color: #0079bf;
    border-width: 0 2px 2px 0;
    /* transform: rotate(45deg); */

  }
  .con {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.con input {
  position: absolute; */
    opacity: 1;
    /* cursor: pointer; */
    height: 30px;
    width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
    /* top: 0; */
    /* left: 0; */
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.con:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.con input:checked ~ .checkmark {
  background-color: #ec971f;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.con input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.con .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}


</style>
<body>
	
<?php include("include/header.php");?>

<div class="container" style="margin-top: 20px;">
	<div class="col-md-9">
		<div class="box">
			<form action="panier.php" method="post">
				<h1>Votre Panier</h1>
				<div class="table-responsive-lg">
					<table class="table">
						<thead>
							<tr>
								<th>Selectionner</th>
								<th colspan="2">Produit</th>
								<th>Prix unitaire</th>
								<th>Quantite</th>
								<th colspan="1">Suprimer</th>
								<th > Prix Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<label class="con">
										<input type="checkbox" checked="checked">
										<span class="checkmark"></span>
									</label>
								</td>
								<td>
									<img style=" width: 50px;" src="images/huile1.png">
								</td>
								<td>
									<a href="#">Huile </a>
								</td>
								<td>
									20 DH
								</td>
								<td>
									1
								</td>
								<td>
									<input type="reset" name="supprimer" value="Supprimer" class="form-control">
								</td>
								<td>
									20 DH
								</td>

							</tr>
						</tbody>
						<tbody>
							<tr>
								<td>
									<label class="con">
										<input type="checkbox" checked="checked">
										<span class="checkmark"></span>
									</label>
								</td>
								<td>
									<img style=" width: 50px;" src="images/nivea1.jpg">
								</td>
								<td>
									<a href="#">Huile </a>
								</td>
								<td>
									20 DH
								</td>
								<td>
									1
								</td>
								<td>
									<input type="reset" name="supprimer" value="Supprimer" class="form-control">
								</td>
								<td>
									20 DH
								</td>

							</tr>
						</tbody>

					</table>
				</div>
				<div class="box-footer">

					<a href="index.php" class="btn btn-default" style="">
						<i class="fa fa-chevron-left"></i> Pour suivre Vos achats                                    
					</a>

					<div class="pull-right">

						<a href="checkout.php" class="btn btn-success" style="">                                   
							Finaliser votre commande <i class="fa fa-chevron-right"></i>
						</a>
					</div>                           
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-3">
		<div id="order-summary" class="box">
			<div class="box-hearder">
				<h3>Résumé des commandes</h3>
			</div>
			<div class="table-responsive">

				<table class="table">

					<tbody>

						<tr>
							<td> sous-total</td>
							<th> 0 dh</th>

						</tr>
						<tr>
							<td> livraison</td>
							<th> 0 dh</th>

						</tr>
						<tr >

							<td> Total </td>
							<th> 0 DH </th>

						</tr>

					</tbody>
				</table>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<a  href="checkout.php" class="btn btn-warning col-xs-12 col-md-6 col-sm-6">                                   
					Acheter</a>
				</div>
			</div>
			
		</div>
	</div>
   </div>
   <?php include("include/footer.php");?>

</body>
</html>