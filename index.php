<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mi corazón</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/sandstone/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="imag.css">


<script type="text/javascript" src="wow.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg ncolornav animate__animated animate__bounce" style="color:white">
  <a class="navbar-brand" href="index.php" style="font-size:30px ;color:white; font-family: 'Valentijn-FreeVersion'">Para mi princesa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
          
     
    </ul>
  </div>
</nav>

<div class="divinicio" id="inicio" style="margin-top:-50px; width: 100%; ">
    <div id="princ" class="" style="display:none">
        <h1 class="animate__animated animate__fadeInBottomLeft text"  style="font-family: 'Valentijn-FreeVersion';color:white; max-height:100px; margin-right: 30%; width: 100%; text-align: center">Mi corazón está de cumpleaños</h1>
        <div  class="img1" style="float:left" >
            
            
<img id="fotop" style="cursor:pointer;" class="animate__animated animate__fadeIn imgN" data-toggle="modal" data-target="#myModal2" src="./images/foto.jpg" alt="hola">
    
    </div>
        
        <div style="background-color:rgba(242, 112, 156, 0.6); " id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="border: 5px dotted white;">
<div class="container" >
      <p style="color: white; margin: 30% 25%; font-size: 30px; font-family: 'Valentijn-FreeVersion'; position:relative; width:50%;">Te amo princesa,
    no puedo dejar de agradecer,
    que estés en mi vida,
    hoy hace <strong style="font-family:'Verdana'">22</strong> años, Dios
    te dió la vida y le doy
    gracias por que hoy nos permite compartirla
    espero que podamos celebrar juntos,
    todos los cumpleaños que tengamos por vivir.     
    Te amo princesa con toda el alma, te amo para siempre.
    
    
    </p>
    </div>
  
  </div>
</div>
        <div style="background-color:rgba(242, 112, 156, 0.6); " id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog" style="border: 5px dotted white;">

    <!-- Modal content-->
   
      
      
        <?php
        require_once 'slid.html';
        ?>
    
      
    

  </div>
</div>
        <img id="certi" class="" data-toggle="modal" data-target="#myModal" src="./images/cert.png" style=" margin-top:30%; margin-left: 3%; position: absolute; width:10%; cursor:pointer"> 
        <div class="" >
            <audio src="audion.mp3" id="player" ></audio>
            </div>

<div class="animate__animated animate__backInRight text2" style="float:right; position:relative; min-width:300px "><h2 style="color:white; margin-top:10px">22 años</h2>
<img src="https://media.giphy.com/media/LnQoAUr1UlBCBaqjaI/giphy.gif" style=""> 
<h2 style="color:white;">¡Feliz cumpleaños!</h2>
</div>

</div>
  <div id="corazon" style=" width:40%; height: 50%; margin-left:30% ; position:absolute; align-content: center">
    <img style="width:50%; margin-left:13%; margin-top: -10% " src="https://media.giphy.com/media/QXDgZof3pNNrHAc7bL/giphy.gif">
    <img style="width:50%; margin-left:13%; margin-top: -10%; cursor:pointer " onclick="mostrar()" src="https://media.giphy.com/media/H1k9ZEdtGNfi96LtPi/giphy.gif">
</div>  
</div>
    
    <?php
    require_once 'slid.html';
    ?>

    <script type="text/javascript" src="appjss.js"></script>
</body>

</html>


