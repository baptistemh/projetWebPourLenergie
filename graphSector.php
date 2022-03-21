<!-- PIGUET MAHIEU REGNIER TP4 S2 WEB DEV-->

<!-- https://bilan-electrique-2020.rte-france.com/production-production-totale/
https://developers.google.com/chart/interactive/docs/gallery/histogram-->
<!DOCTYPE html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<main class="main">
  <link rel="stylesheet" href="style.css">
<html>
<main class="main">
<head>


<title>TP4</title>

</head>
<style>

.body{
    position: relative;
    
  background-color: #11181C;
}


h1 {
    text-align:center;
      color: white;
}
.maps {
   margin-left:20%;
     width: 100%; 
    }
        .logo5{
   
     margin-top: 2%;
    }
</style>


<header class="header"  >
    

  <div class="icon-bar" >
    <img class="logo5" src="logo.png" width="50" height="50" onclick="window.location.href = 'pageAcc.php';" >
      <div class="wrap">
        <div class="search">
           <input type="text" id="text_a" class="searchTerm"  placeholder="What are you looking for?" onclick="myFunction1()" >
           <button type="submit" class="searchButton" onclick="myFunction1()"> 
            
             <i class="fa fa-search"></i>
          </button>
        </div>
     </div>

     

<script src="http://code.jquery.com/jquery-latest.js"></script>

<script >

$(document).ready(function(){
  $("#Next").click(function(){
    var currentImg= $('.active');
    var nextImg= currentImg.next();

    if(nextImg.length){
      currentImg.removeClass('active').css('z-index',-10);
      nextImg.addClass('active').css('z-index',10);
    }
  });

  $("#Previous").click(function(){
    var currentImg= $('.active');
    var prevImg= currentImg.prev();

    if(prevImg.length){
      currentImg.removeClass('active').css('z-index',-10);
      prevImg.addClass('active').css('z-index',10);
    }
  });



function slideImg(){
  setTimeout(function(){ 
  $("#Next").click();
slideImg(); 
  },2000); 
}

slideImg(); 

});

</script>

</header>

<section class="first">
<div class="second">
  <div class="content">
    <div class="carousel">
          <div class="slide">
              <ul class="gallery">
                  <li>P</li>
                  <li>O</li>
                  <li>W</li>
                  <li>E</li>
                  <li>R</li>
                  <li>R</li>
                  <li>A</li>
                  <li>N</li>
                  <li>G</li>
                  <li>E</li>
                  <li>R</li>
                  <li>S</li>
              </ul>
            
          </div>
    </div>
  </div>
  <br>
          <br>
          <br>   <br>
          <br>
          <br>
</div>
<body class="body" >
  <?php
                session_start();
                if($_SESSION['input2'] !== ""){
                    $user = $_SESSION['name'];
					          $userforname = $_SESSION['forname'];
                    $password = $_SESSION['password'];
                    $consoJanvier = $_SESSION['consoJanvier'];
                    $consoFevrier = $_SESSION['consoFevrier'];
                    $consoMars = $_SESSION['consoMars'];
                    $consoAvril = $_SESSION['consoAvril'];
                    $consoMai = $_SESSION['consoMai'];
                    $consoJuin = $_SESSION['consoJuin'];
                    $consoJuillet = $_SESSION['consoJuillet'];
                    $consoAout = $_SESSION['consoAout'];
                    $consoSeptembre = $_SESSION['consoSeptembre'];
                    $consoOctobre = $_SESSION['consoOctobre'];
                    $consoNovembre = $_SESSION['consoNovembre'];
                    $consoDecembre = $_SESSION['consoDecembre'];
                    $sommeConso = $consoDecembre + $consoNovembre + $consoOctobre +$consoSeptembre + $consoAout +$consoJuillet + $consoJuin +$consoMai + $consoAvril +$consoMars + $consoFevrier + $consoJanvier;
                    // afficher un message
                    echo '<h1 style="text-align: center; color: white";> Bonjour '.$user. ', voici votre graphique de consommation annuelle ! </h1>';
                    
					
                }
            ?>
            

</div>

  </header>
<div>
  <html>
    
  <div class="maps">
 

  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

  var data = google.visualization.arrayToDataTable([
         ['Sector', 'Production (TWh) ', { role: 'style' }],
         ['Nuclear', (0,671*<?php echo $sommeConso; ?>), '#e4a700'],            
         ['Hydro', (0,13*<?php echo $sommeConso; ?>), '#2571BO'],           
         ['Wind', (0,079*<?php echo $sommeConso; ?>), '#72CBB7'],
         ['Thermic', (0,075*<?php echo $sommeConso; ?>), '#F20808' ], 
         ['Solar', (0,025*<?php echo $sommeConso; ?>), '#D66B0E'],           
         ['BioEnergy', (0,019*<?php echo $sommeConso; ?>), '#146856'], ]);


      var options = {
        legend: 'none',
        title: 'Electricity production by sector in TWh',titleTextStyle: {color: 'white'},
        hAxis: {  title: 'Sector', textStyle: {color: 'white'},titleTextStyle: {color: 'white'} },
       vAxis: { title: 'Production',  textStyle: {color: 'white'},titleTextStyle: {color: 'white'}},
            backgroundColor:'#11181C',
  

     }


      ;

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>
  </head>


    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  
</div>
</html>
  
      <div id="chart_div" style="width: 100%; height: 500px;  "></div>
    </body>

    <footer class="footer">
  <div class="Global">
      <div class="gauche"> 
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=15%20quai%20de%20grenelle&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
    
              </iframe><a href="https://123movies-to.org"></a><br>
              <style>.mapouter{position:relative;text-align:right;height:170px;width:360px;margin-right: 200px;}</style>
              <a href="https://www.embedgooglemap.net">embed maps on website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:150px;width:350px;margin-right: 200px;}
                </style>

              </div>
          </div>
      </div>

      <div class="conteneur">
        <p class="colp">
          ABOUT US
          <br>
          <br>
          <br>
          <a href="AboutUs.html">Who are we?</a>
          <br>
          <br>
          <a href="ourstory.html">Our Story</a>
          </p>
        <p class="colp">
          OTHER
          <br>
          <br>
          <br>
          <a href="legalnotice.html">Legal notice</a>
          <br>
          <br>
          <a href="AboutUs.html">Personal data management policy</a>
        </p>
        <p class="colp">
          SOCIAL NETWORKS
          <br>
          <br>
          <img src="rss.png" width="180" height="100" >
          
        </p>
      </div>

      
  </div>
</footer>


</main>
</html>



<script>
  function myFunction1()
  {
  var a=document.getElementById("text_a").value;
  
  if (a=="importation")
    {
   window.open("GraphImport.html");
    }
	else if (a=="exportation")
    {
   window.open("GraphExport.html");
    } 
	else if (a=="sector")
    {
   window.open("graphSector.php");
    } 
	else if (a=="conso")
    {
   window.open("graph.php");
    } 
    
  }
  </script>


