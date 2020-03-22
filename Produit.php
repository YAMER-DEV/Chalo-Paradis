

<!DOCTYPE html>
<html>
<head>
  <title>Produit</title>
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
<body>
  
  <!-- header -->
  <?php
include("include/header.php");
?>



<!-- contenu -->
  <div id="content">
    <div  class="container-fluid"> <!-- container begain -->

      <!-- breadcrumb -->
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li>
            <a href="accueil.html">Accueil</a>
          </li>
          <li>
            Shop
          </li>
        </ul>        
      </div>

      <!-- sidebar -->
           <?php
      include("include/sidebar.php");
      ?>



      <!-- contenu -->
      <div class="col-md-9">
        <!-- <div class="box">
          <h1>Produit</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
          </p>
        </div> -->

        <div class="row" style="margin-bottom: 10px">
          <div>   
            <div class="block-filter col-md-5" style="display: inline;">

              <select data-icon="fa-heart" class="form-control">
                <div id="demo" class="collapse ">
                  <option>Toutes les categories</option>
                  <option>Gamme 1</option>
                  <option>Gamme 2</option>
                  <option>Gamme 3</option>
                </div>
                
              </select>            
             
            </div>
          </div>
          <div class="block-sort input-group col-md-3 col-xs-3 " style=" float: right;">
            <input type="text" class="form-control" placeholder="trier...">
              <a style="background-color: #ec971f; color: white;" class="input-group-addon" >
                <i class="fa fa-chevron-down" ></i>
              </a>
          </div>
        </div>
        <!-- produit -->
        <div class="row">

            <div class="col-md-4 col-sm-6 center-responsive">
              <div class="box text-center">
                <a href="#"><img class="" src="img/ghasol.jpg"></a>
                <div class="text">
                  <h3 class=""style="color: black" >Huile de graine barbarie </h3>
                  <p style="text-align: center; color: red;"class="price">  190.00DH </p>
                  <div class="button"style="text-align: center;">
                      <a href="#">
                        <button style="margin-bottom: 10px" class="btn btn-warning"> <i style="margin-right: 10px"class="fa fa-shopping-cart "></i> Ajouter au panier
                        </button>
                      </a>
                      <a href="#">
                        <button style="margin-bottom: 10px" class="btn btn-warning"><i style="margin-right: 10px" class="fa fa-eye "></i>voir details</button>
                      </a>
                  </div>
                </div> <!-- text finish -->
              </div> <!-- <box finish -->
            </div>

            <div class="col-md-4 col-sm-6 center-responsive">
              <div class="box text-center">
                <a href="#"><img class="" src="img/huileargan.jpg"></a>
                <div class="text">
                  <h3 class=""style="color: black" >Huile de graine barbarie </h3>
                  <p style="text-align: center; color: red;"class="price">  190.00DH </p>
                  <div class="button"style="text-align: center;">
                      <a href="#">
                        <button style="margin-bottom: 10px" class="btn btn-warning"> <i style="margin-right: 10px"class="fa fa-shopping-cart "></i> Ajouter au panier
                        </button>
                      </a>
                      <a href="#">
                        <button style="margin-bottom: 10px" class="btn btn-warning"><i style="margin-right: 10px" class="fa fa-eye "></i>voir details</button>
                      </a>
                  </div>
                </div> <!-- text finish -->
              </div> <!-- <box finish -->
            </div>

            <div class="col-md-4 col-sm-6 center-responsive">
              <div class="box text-center">
                <a href="#"><img class="" src="img/eaurose.jpg"></a>
                <div class="text">
                  <h3 class=""style="color: black" >Huile de graine barbarie </h3>
                  <p style="text-align: center; color: red;"class="price">  190.00DH </p>
                  <div class="button"style="text-align: center;">
                      <a href="#">
                        <button style="margin-bottom: 10px" class="btn btn-warning"> <i style="margin-right: 10px"class="fa fa-shopping-cart "></i> Ajouter au panier
                        </button>
                      </a>
                      <a href="#">
                        <button style="margin-bottom: 10px" class="btn btn-warning"><i style="margin-right: 10px" class="fa fa-eye "></i>voir details</button>
                      </a>
                  </div>
                </div> <!-- text finish -->
              </div> <!-- <box finish -->
            </div>
        </div>  <!-- row finish -->

        <center>
          <ul class="pagination">
            <li class="active;"><a href="#">First Page</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">Last Page</a></li>
          </ul>
        </center>

      </div> <!-- contenu finish -->




    </div> <!-- container finish -->
  </div>




  

 

<!-- footer  -->
<?php
include("include/footer.php");
?>

</body>
</html>