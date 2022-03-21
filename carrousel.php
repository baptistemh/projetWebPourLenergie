<!DOCTYPE html>
<style>
.logo5{
   
   margin-top: 3%;
  }

</style>
<html>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<main class="main">
  <link rel="stylesheet" href="style.css">


<head>

<title>Carrousel</title>

</head>

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

<!-- BODY-->


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
  
</section>


<body class="body" >
	


    <div class="wrapper">

    <a href="#" class="button" onclick="window.location.href = 'connexion.php';" type="button1">Connection</a>
    <a href="#" class="button" onclick="window.location.href = 'base.php';" type="button2">Inscription</a>

    </div>
    

	<br>
  <br>
  <div class="titre">
			
    <center>
    <h1><font color="white"> Track your electricity consumption and production in real time !</h1>

      <h4><font color="white">ECO2mix is an easy-to-use tool created by RTE to help consumers better 
              understand and consume electricity. Available free of charge on the Internet and via an application 
              for smartphones and tablets, ECO2mix provides all the indicators of electricity consumption and 
              production in real time, 24 hours a day, at national and regional level.</h4>
    </center>        
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <br> 
    <center>
      <h1><font color="white"> Our Partners</h1>
      </center>  
    </div>
	<div class="container">
		 
        <div class="class"> 
    
            <div class="slider-outer">
        
                 <div class="slider-inner">

                    <img src="eolienne.jpg" class="active">
                    <img src="nucleaire.jpg">
                    <img src="charbon.jpg">
                    <img src="gas.jpg">
                    <img src="hydrolienne.jpg">
                    <img src="eomer.jpg">
                    <img src="electricite.jpeg">
                    <img src="eopv.jpg">

                 </div>
        
             </div>


        </div>
    </div>
  
    <div class="but"> 
      <button type="button" id="Previous"> <img src="gauche.jpg" height ="20" width="20" /></button>
    
      <button type="button" id="Next"> <img src="droite.jpg" height ="20" width="20" /></button>
    
     </div>             
    <div class="contenu">

      <br> 
      

    </div>
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
