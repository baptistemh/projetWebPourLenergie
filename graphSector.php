<!-- PIGUET MAHIEU REGNIER TP4 S2 WEB DEV-->

<!-- https://bilan-electrique-2020.rte-france.com/production-production-totale/
https://developers.google.com/chart/interactive/docs/gallery/histogram-->
<!DOCTYPE html>

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
.mapouter
{
    width: 300px;
}
.logo2
{
    width: 300px;
}
.titre {
    margin-left: auto;
    margin-right: auto;
}
.contenu{  
  
background-color: #11181C;}

.header{

background-color: whitesmoke;
 }

.footer{

background-color: #11181C;
}
.main{
  
background-color: #11181C;
}

/* SEARCH BAR */
.icon-bar {
  width: 100%; 
  background-color: #11181C; 
  overflow: auto; /* Overflow due to float */

}

.icon-bar a {
  color: white; /* White text color */
  font-size: 36px; /* Increased font size */
float : right;
}

.icon-bar a:hover {
  background-color: #000; /* Add a hover color */
}
.active {
  background-color: #04AA6D; /* Add an active/current color */
}

a {
  margin: 20px;
}
.Global{
  width:100%;
}
.gauche {
float :left; /* Add an active/current color */
}
.droite {
float :right; /* Add an active/current color */
}

.container {
 width:100%;
display: flex;
 align-items: flex-end;
}
.class {
 width:12,5%;
  float : left;

}
.graph {
  background-color: #11181C; 
}
.maps {
   margin: 0 auto;
     width: 66%; }
</style>


  <header class="header"  >
    <div class="icon-bar" >
<img class="logo" src="logo.png" width="50" height="50" onclick="window.location.href = 'pageAcc.php';" >
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <a class="active" href="#">

  <a href="#">&#9776;&nbsp;</a> <!-- CODE ASCII POUR MENU -->

  <a href="#"><i class="fa fa-search"></i></a>

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
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</div>
</html>
    <body>
      <div id="chart_div" style="width: 100%; height: 500px;  "></div>
    </body>

<div class="mapouter">
  <div class="gmap_canvas">
    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=15%20quai%20de%20grenelle&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
      
    </iframe><a href="https://123movies-to.org"></a><br>
    <style>.mapouter{position:relative;text-align:right;height:300px;width:400px;margin-right: 200px;}</style>
    <a href="https://www.embedgooglemap.net">embed maps on website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:400px;margin-right: 200px;}
  </style>

</div>
</div>
</div>

<div class="droite">  
  <img class="logo2" src="logo.png" width="300" height="300" >
</div>
</div>
  </footer>

</main>
</html>



