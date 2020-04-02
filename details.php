<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
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
  <script src="js/jquery.exzoom.js"></script>

	<link rel="stylesheet" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" href="icons/font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/uikit.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.exzoom.css">

</head>
<style>
	body {
  font-family: 'open sans';
  overflow-x: hidden; }

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  
  
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  /*text-transform: UPPERCASE;*/
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */
</style>

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
	
	

    
    <!-- slider -->
    <div class="col-md-9">
      

   <div id="productMain" class="row"><!-- row Begin -->
       <div class="container">
        <div class="warpper row">
      <div class="container">
        <div class="col-md-10">
          <div class="box" id="details">
            <div class="container-fliud">
              <div class="row">
                <h4>Product Detail</h4>
                           <hr>
                           <div>
                              <div class="col-md-6">
                              <ul>
                      <li>Contenu du packaging: 3 x 150 ml </li>
                                <li>Garantie: 12 mois après ouverture</li>
                                <li>Dimensions: 9,7 x 2,5 x 9,7 cm</li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li>Le soin idéal pour toute la famille, adapté à tous les types de peau et qui s'applique sur tout le corps.</li>
                                <li>Sans agents conservateurs. Testé sous contrôle dermatologique</li>
                                
                              </ul>
                            </div>

                </div>
              </div>
                      </div>
                    
                  </div><!-- box Finish -->
        </div>
        
      </div>
            
    </div>
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-5">
						
						<div class="exzoom" id="exzoom">

              <!-- Images -->

              <div class="exzoom_img_box">

                <ul class='exzoom_img_ul'>

                  <li><img src="images/nivea1.jpg"/></li>

                  <li><img src="images/nivea2.jpg"/></li>

                  <li><img src="images/nivea3.jpg"/></li>

                  <li><img src="images/nivea4.jpg"/></li>

                  <li><img src="images/nivea5.jpg"/></li>

                  ...

                </ul>

              </div>

              <!-- <a href="https://www.jqueryscript.net/tags.php?/Thumbnail/">Thumbnail</a> Nav-->

              <div class="exzoom_nav"></div>

              <!-- Nav Buttons -->

              <p class="exzoom_btn">

                  <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>

                  <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>

              </p>

            </div>

						
					</div>
					<div class="col-md-7">
           			<div class="box " style="width: 489px;">
           				
           					<h1 class="text-center">Nivea Cream</h1>
			               
							<center><h4>Contenu du packaging: 3 x 150 ml</h4></center>
								
		
						

			               <form action="details.php" class="form-horizontal" method="post">
			                   <div class="form-group">
			                       <label for="" class="col-md-5 control-label">Quantité</label>
			                       
			                       <div class="col-md-4">
			                              <input type="number" name="Quantity" class="form-control">
			                       
			                        </div>
			                       
			                   </div>
			                   
			                   
			                   
			                   <center><h4 class="price">Prix: <span>70 DH</span></h4></center>
			                   
			                   
			                  <div class="action">
			                  	<div class="row">
			                  		<button class="add-to-cart btn btn-default col-md-4" type="button">Acheter maintenant</button>
			                  		<div class="col-md-1"></div>
								<button class="add-to-cart btn btn-default col-md-4" type="button">Ajouter au Panier</button>
								<div class="col-md-1"></div>
								<button class="like btn btn-default col-md-2" type="button"><span class="fa fa-heart"></span></button>
			                  	</div>
			                  	
							</div>
			                   
			                </form>
           				
               
               
							<h4 class="price">Livraison Gratuite </h4>
           			</div>
           
           
           
      			 </div>
				</div>
				

			</div>

		</div>
		
	</div>
    
       
       
   </div><!-- row Finish -->
   
   
   
  </div>
  </div>  

<script>
    $(function(){
 

  $("#exzoom").exzoom({

 

    // thumbnail nav options

    "navWidth": 60,

    "navHeight": 60,

    "navItemNum": 19,

    "navItemMargin": 7,

    "navBorder": 1,

 

    // autoplay

  "autoPlay":false,

 

    // autoplay interval in milliseconds

    "autoPlayTimeout": 2000

     

  });

 

});

</script>

<?php
include("include/footer.php");
?>
</body>
</html>
