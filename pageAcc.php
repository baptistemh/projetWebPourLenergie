<!-- PIGUET MAHIEU REGNIER TP4 S2 WEB DEV-->
<!-- SOURCE search button https://www.w3schools.com/howto/howto_css_icon_bar.asp# 	
MENU BAR https://forum.alsacreations.com/topic-4-84349-1-Challenge--css-minimal-pour-afficher-icone-Menu-a-3-bandes.html -->
<!-- GOOGLE MAP https://google-map-generator.com/-->
<!DOCTYPE html>


<html>
<main class="main">
<head>


<title>TP4</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>


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
.deco{  
	
	background-color: #11181C;
	text-align: center;}
.header{

background-color: whitesmoke;
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

.container7 {
 width:100%;
display: flex;
float : left;

}
.class7 {
width:20%;
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

	  <div class="wrap">
		<div class="search">
		   <input type="text" id="text_a" class="searchTerm"  placeholder="What are you looking for?" onclick="myFunction1()" >
		   <button type="submit" class="searchButton" onclick="myFunction1()"> 
			
			 <i class="fa fa-search"></i>
			
		  

</div>
		  </button>
		</div>
	 </div>
	 
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
		
	  </div>
	  <div class="deco">
	  <a href='pageAcc.php?deconnexion=true'><span>Logout	 </sapi_windows_cp_conv></a>
<?php
			  session_start();
			  if($_SESSION['input2'] !== ""){
				  $mail = $_SESSION['input2'];
				  $user = $_SESSION['name'];
				  $userforname = $_SESSION['forname'];
				  $consoJanvier = $_SESSION['consoJanvier'];
				  // afficher un message
				  
			  }
		  ?>
	  </div>
	</section>
	 
  </header>
	
 

<script>  
function redirection() {
if (<?php echo $consoJanvier; ?> != "0") { 
	location.href = 'graph.php';
} 
else {
	location.href = 'item.php';
}
} 

function test() {
 var mail = <?php echo json_encode($mail); ?>; //j'encode le fait que c'est autre chose qu'un nombre (récuperer le type exact de la variable mail)
if (mail === "aaa@gmail.com") { 	
	location.href = 'item.php';
} 
else {
	alert("Access not allowed");
	
}
}
</script> 
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
                    echo '<h4 style="text-align: center; color: white";> Hello '.$user. ', you are connected</h4>';
                }
            ?>


	</header>
<body class="body" >
	<div class="contenu">


		<div class="titre">
			<br> 
			<br> 
			<h5 style="text-align: center"><font color="white"> Home
 éCO2mix - All electricity data in real time</h5> 
		<h1 style="text-align: center" ><font color="white"> Home
 éCO2mix - All electricity data in real time</h1> 
			<br> 
			<br> 
	</div>

	</div>
	<div class="container7">
		 
   <div class="class7"> 
		      		<img src="3.png" width="250" height="170" onclick="redirection()">
		   </div>
		      <div class="class7"> 
		      		<img src="2.png" width="250" height="170" onclick="window.location.href = 'GraphImport.html';">
		   </div>
		      <div class="class7"> 
		      	<img src="7.png"width="250" height="170" onclick="window.location.href = 'graphSector.php';">
		   </div>
		      <div class="class7"> 
		      	<img src="9.png" width="250" height="170" onclick="window.location.href = 'achats.php';">
		   </div>
		      <div class="class7"> 
		      	<img src="8.png" width="250" height="170" onclick="test()">
		   </div>
		      

</div>
<h1 style="text-align: center"> Millions of data synthesized to easily enlighten you</h1>
<h4> Curves and graphs to view on the screen, data to download or print, counts of what photovoltaic, solar, hydraulic, thermal or nuclear installations produce... More than 15 million data are compiled in order to be able to provide you with all this information and synthesize them.

Want to know how much electricity is being consumed right now?
 in France, what is the share of wind power in the production of electricity in
  your region, or how many megawatts France currently exchanges with
   his neighbors ? At a time when more and more of us are wondering about
    the challenges of the energy transition and its daily implementation, RTE shares
all French electricity data with you on your computer, tablet or smartphone.
</h4>

</body>

<footer class="footer">
    <div class="Global">
        <div class="gauche">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="600" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=15%20quai%20de%20grenelle&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

                    </iframe><a href="https://123movies-to.org"></a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 170px;
                            width: 360px;
                            margin-right: 200px;
                        }
                    </style>
                    <a href="https://www.embedgooglemap.net">embed maps on website</a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 150px;
                            width: 350px;
                            margin-right: 200px;
                        }
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
                <a href="AboutUs.html" style="color: white;">Who are we?</a>
                <br>
                <br>
                <a href="ourstory.html" style="color: white;">Our Story</a>
            </p>
            <p class="colp">
                OTHER
                <br>
                <br>
                <br>
                <a href="legalnotice.html" style="color: white;">Legal notice</a>
                <br>
                <br>
                <a href="PDMP.html" style="color: white;">Personal data management policy</a>
            </p>
            <p class="colp">
                SOCIAL NETWORKS
                <br>
                <br>
                <img src="rss.png" width="180" height="100" alt="contact">

            </p>
        </div>


    </div>
</footer>

</main>
</html>



