<!-- PIGUET MAHIEU REGNIER TP4 S2 WEB DEV-->
<!-- SOURCE search button https://www.w3schools.com/howto/howto_css_icon_bar.asp# 	
MENU BAR https://forum.alsacreations.com/topic-4-84349-1-Challenge--css-minimal-pour-afficher-icone-Menu-a-3-bandes.html -->
<!-- GOOGLE MAP https://google-map-generator.com/-->
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

input[type=button] {
    background-color: #11181C;
    color: white;
    border: none;
    cursor: pointer;
	float: right;
}
input[type=button]:hover {
    background-color: white;
    color: #11181C;
    border: 1px solid #11181C;
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

  <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>

  <?php
                session_start();
                if($_SESSION['input2'] !== ""){
                    $user = $_SESSION['name'];
					$userforname = $_SESSION['forname'];
					$consoJanvier = $_SESSION['consoJanvier'];
                    // afficher un message
                    echo '<h2 style="text-align: center; color: white";> Bonjour '.$user. ', vous êtes connecté à votre compte ! </h2>';
					
                }
            ?>
            

</div>

<script>  
function redirection() {
if (<?php echo $consoJanvier; ?> != "0") { 
	location.href = 'graph.php';
} 
else {
	location.href = 'infoConso.php';
}
}  

<?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:carrousel.html");
                   }
                }
                else if($_SESSION['input2'] !== ""){
                    $user = $_SESSION['name'];
                    // afficher un message
                    echo '<h4 style="text-align: center; color: white";> Bonjour '.$user. ', vous êtes connecté </h4>';
                }
            ?>
</script>

	</header>
<body class="body" >
	<div class="contenu">


		<div class="titre">
			<br> 
			<br> 
			<h5><font color="white"> Accueil
 éCO2mix - Toutes les données de l'électricité en temps réel</h5> 
		<h1><font color="white"> ÉCO2mix - Toutes les données de l'électricité en temps réel</h1> 
			<br> 
			<br> 
	</div>

	</div>
	<div class="container">
		 
   <div class="class"> 
		      		<img src="9.png" width="170" height="170" onclick="redirection()">
		   </div>
		      <div class="class"> 
		      		<img src="2.png" width="170" height="170" >
		   </div>
		      <div class="class"> 
		      	<img src="3.png" width="170" height="170" onclick="window.location.href = 'graphSector.php';">
		   </div>
		      <div class="class"> 
		      	<img src="4.png" width="170" height="170" >
		   </div>
		      <div class="class"> 
		      	<img src="5.png" width="170" height="170" >
		   </div>
		      <div class="class"> 
		      	<img src="6.png" width="170" height="170" >
		   </div>
		      <div class="class"> 
		      	<img src="7.png" width="170" height="170" >
		   </div>
		      <div class="class"> 
		      	<img src="8.png" width="170" height="170" >

		   </div>  


</div>
<h1> Des millions de données synthétisées pour vous éclairer en toute simplicité</h1>
<h4> Courbes et graphiques à visualiser à l’écran, données à télécharger ou à imprimer, décomptes de ce que produisent les installations photovoltaïques, solaires, hydrauliques, thermiques ou nucléaires… Plus de 15 millions de données sont compilées afin de pouvoir vous fournir toutes ces informations et les synthétiser.

Envie de savoir quelle quantité d’électricité est consommée en ce moment même en France, quelle est la part de l’éolien dans la production d’électricité dans votre région, ou encore combien de mégawatts la France échange actuellement avec ses voisins ? À l’heure où nous sommes de plus en plus nombreux à s’interroger sur les enjeux de la transition énergétique et sa mise en œuvre au quotidien, RTE partage toutes les données de l’électricité française avec vous sur votre ordinateur, votre tablette ou votre smartphone.</h4>

</body>
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



