 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>agenda</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="fontawesome-free-5.3.1-web/css/all.min.css"> 
  <link rel="stylesheet" href="css/bootstrap.min.css">  

</head>
<body>
<!--Menu-->
<?php 
  include("menu.php");
?> 
<!--Fin Menu-->   


<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-1">        
      </div>
      <div class="col-md-10">
        <h3 class="text-dark display-5 text-center">
          Agenda
        </h3>
          <div class="embed-responsive embed-responsive-1by1">
            <iframe class="embed-responsive-item" src="calendario.php" allowfullscreen></iframe>
          </div>
        <hr>
      </div>
      
    </div>
  </div>

</div>




 <!--Footer-->
  <?php 
    include("fotter.php");
  ?>
 <!--fin Footer--> 

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
 