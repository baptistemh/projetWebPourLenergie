<!DOCTYPE html>
<html>

<head>
    <title>Market</title>
    <meta charset="utf-8" />
    <script type="text/javascript"></script>
    <link href="achats.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<main class="main">
<link rel="stylesheet" href="style.css">

  
</head>

<body>

	<header class="header"  >
    

    <div class="icon-bar" >
    <img class="logo5" src="logo.png" width="50" height="50" onclick="window.location.href = 'pageAcc.php';" >

      <div class="wrap">
       
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
    
  </div>
  
</section>

    <?php
    session_start();

    if ($_SESSION['input2'] !== "") {
        $user = $_SESSION['name'];

        echo '<h2 style="text-align: center; color: white";> Hello ' . $user . ', you are in the shop !! </h2>';
    }

    $conn = mysqli_connect("localhost", "root", "root", "connexion");

    if (!$conn) {
        die("Échec de la connexion : " . mysqli_connect_error());
    }


    $email = $_SESSION['input2'];

    $buyingItem1 = $_POST["buyingItem1"];
    $buyingItem2 = $_POST["buyingItem2"];
    $buyingItem3 = $_POST["buyingItem3"];

    $achatItem1 = $_SESSION['achatItem1'];
    $achatItem2 = $_SESSION['achatItem2'];
    $achatItem3 = $_SESSION['achatItem3']; 

    $requete = "SELECT count(*) FROM item where id = '1' ";
    $exec_requete = mysqli_query($conn, $requete);
    $reponse      = mysqli_fetch_array($exec_requete);
    $count = $reponse['count(*)'];
    if ($count != 0)
    {
        $requete2 = "SELECT * FROM item where id = '1' ";
        $exec_requete2 = mysqli_query($conn, $requete2);
        $reponse2     = mysqli_fetch_object($exec_requete2);
        $nbItem1 = $reponse2->nbItem1;
        $nbItem2 = $reponse2->nbItem2;
        $nbItem3 = $reponse2->nbItem3;
    }

    if ($_POST['button2']) {

        if (($nbItem1 == '0' && $buyingItem1 != '0') || ($nbItem2 == '0' && $buyingItem2 != '0') || ($nbItem3 == '0' && $buyingItem3 != '0') || ($buyingItem3 > $nbItem3) || ($buyingItem1 > $nbItem1) || ($buyingItem2 > $nbItem2)){
            echo '<h2 style="text-align: center; color: white";>Not enough products for one or more item</h2>';
        }
        else {
    

        $nbItem1 = $nbItem1 - $buyingItem1;
        $nbItem2 = $nbItem2 - $buyingItem2;
        $nbItem3 = $nbItem3 - $buyingItem3;

        $achatItem1 = $achatItem1 + $buyingItem1;
        $achatItem2 = $achatItem2 + $buyingItem2;
        $achatItem3 = $achatItem3 + $buyingItem3;

        


        $sql = "UPDATE item SET nbItem1 = '$nbItem1', nbItem2 = '$nbItem2', nbItem3 = '$nbItem3' where id = '1' ";
        if (mysqli_query($conn, $sql)) {
            $sql = "SELECT nbItem1, nbItem2, nbItem3 from item";
        } else {
            echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
        }

        $sql2 = "UPDATE pageDeCo SET achatItem1 = '$achatItem1', achatItem2 = '$achatItem2', achatItem3 = '$achatItem3' where mail = '".$email."' ";
        if (mysqli_query($conn, $sql2)) {
            $sql2 = "SELECT achatItem1, achatItem2, achatItem3 from pageDeCo";
        } else {
            echo "Erreur : " . $sql2 . "<br>" . mysqli_error($conn);
        }
    }
}
    mysqli_close($conn);

    ?>

    <div id="na1v">
        <div id="items1">
            <div id="f1">
                <center>
                    <img src="goodies1.png" width="150" height="150">
                    <button value="bouquet" id="one" onclick="plusF1()">ITEM 1<br>in stock :<?php echo $nbItem1; ?></button>
                </center>
            </div>

            <div id="f2">
                <center>
                    <img src="goodies2.png" width="150" height="150">
                    <button value="bouquet" id="two" onclick="plusF2()">ITEM 2<br>in stock : <?php echo $nbItem2; ?></button>
                </center>
            </div>

            <div id="f3">
                <center>
                    <img src="goodies3.png" width="150" height="150">
                    <button value="bouquet" id="three" onclick="plusF3()">ITEM 3<br>in stock :<?php echo $nbItem3; ?></button>
                </center>
            </div>

            <div id="container1">

                <form method="POST">

                    <label><b>Number of Item 1 you want</b></label>
                    <input type="text" placeholder="Enter the number" name="buyingItem1" required>

                    <label><b>Number of Item 2 you want</b></label>
                    <input type="text" placeholder="Enter the number" name="buyingItem2" required>

                    <label><b>Number of Item 3 you want</b></label>
                    <input type="text" placeholder="Enter the number" name="buyingItem3" required>

                    <input type="submit" id='submit' name="button2" value='VALIDATE'>
                </form>
            </div>

        </div>

    </div>
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
          <a href="AboutUs.html"style="color: white;">Who are we?</a>
          <br>
          <br>
          <a href="ourstory.html"style="color: white;">Our Story</a>
          </p>
        <p class="colp">
          OTHER
          <br>
          <br>
          <br>
          <a href="legalnotice.html"style="color: white;">Legal notice</a>
          <br>
          <br>
          <a href="AboutUs.html"style="color: white;">Personal data management policy</a>
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