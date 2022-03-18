<!-- PIGUET MAHIEU REGNIER TP4 S2 WEB DEV-->

<!-- https://developers.google.com/chart/interactive/docs/gallery/areachart?hl=fr-->
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
</style>


	<header class="header"  >
		<div class="icon-bar" >
<img class="logo" src="logo.png" width="50" height="50" >
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
                    // afficher un message
                    echo '<h1 style="text-align: center; color: white";> Bonjour '.$user. ', voici votre graphique de consommation annuelle ! </h1>';
					
                }
            ?>
            

</div>


	</header>
<div>

<html>
  <head>
  <div class="graph">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Months', 'Expenses'],
          ['January',     <?php echo $consoJanvier; ?> ],
          ['February',     <?php echo $consoFevrier; ?>],
          ['March',      <?php echo $consoMars; ?>],
          ['April',     <?php echo $consoAvril; ?>],
           ['May',     <?php echo $consoMai; ?>],
          ['June',     <?php echo $consoJuin; ?>],
          ['July',      <?php echo $consoJuillet; ?>],
           ['August',     <?php echo $consoAout; ?>],
          ['September',     <?php echo $consoSeptembre; ?>],
          ['October',      <?php echo $consoOctobre; ?>],
          ['November',     <?php echo $consoNovembre; ?>],
          ['December',     <?php echo $consoDecembre; ?>]
        ]);

        var options = {
          title: 'Personal Consommation',titleTextStyle: {color: 'white'},
            hAxis: {title: 'Consommation by months',  textStyle: {color: 'white'},titleTextStyle: {color: 'white'}},
  
  
  
            vAxis: {minValue: 0,textStyle: {color: 'white'},titleTextStyle: {color: 'white'} },
    series: {
              0: { lineWidth: 1 }, // change colour of the curve
              
            },
            colors: ['#00536D'],
  legend: {textStyle: {color: 'white', fontSize: 16}},
            backgroundColor:'#11181C',
  
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    </div>
    <button  onclick="window.location='infoConso.php'">Modify my values</button>
  </head>
  <body>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
  </body>
</html>

	<footer class="footer">
<div class="Global">
   <div class="gauche"> 

    
   

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



