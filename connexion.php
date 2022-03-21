<html>
    <style> 

body{
    background: #11181C;
}
#container1{
    width:400px;
    margin:0 auto;
    margin-top:10%;
}
/* Bordered form */
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container1 h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: #11181C;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #11181C;
    border: 1px solid #11181C;
}
.diminuer
{
    margin-top:2%;
}

</style>


    <head>
    <link rel="stylesheet" href="style.css">;
       <meta charset="utf-8">
    </head>
    <header class="header"  >
    

	<div class="icon-bar" >
s

	  <div class="wrap">
		<div class="search">
		  
	
		  

</div>
		  </button>
		</div>
	 </div>
	 
	 <section class="first">
     <div class="diminuer"> 
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
</div>
	  </div>
	</section>
	 
  </header>
    <body>
    
      
        <div id="container1">
            <!-- zone de connexion -->
            
            <form action="verif.php" method="POST">
                <h1> Connexion </h1>
                
                <label><b>E-mail</b></label>
                <input type="text" placeholder="Enter your e-mail" name="input2" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter your password" name="input3" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>E-mail or password incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
    <br>      <br>
      <br>
      <br>

      <br>

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

</html>