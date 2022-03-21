<html>
    <style> 

body{
    background: #11181C;
}
#container{
    width: 700px;
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
#container h1{
    width: 100%;
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

</style>

<link rel="stylesheet" href="style.css">
    <head>
       <meta charset="utf-8">
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

    if($_SESSION['input2'] !== ""){
        $user = $_SESSION['name'];
        // afficher un message
        echo '<h2 style="text-align: center; color: white";> Hello '.$user. ', you are in your CONSO area ! </h2>';
        
    }

$email = $_SESSION['input2'];

$consoJanvier = $_POST["consoJanvier"];
$consoFevrier = $_POST["consoFevrier"];
$consoMars = $_POST["consoMars"];
$consoAvril = $_POST["consoAvril"];
$consoMai = $_POST["consoMai"];
$consoJuin = $_POST["consoJuin"];
$consoJuillet = $_POST["consoJuillet"];
$consoAout = $_POST["consoAout"];
$consoSeptembre = $_POST["consoSeptembre"];
$consoOctobre = $_POST["consoOctobre"];
$consoNovembre = $_POST["consoNovembre"];
$consoDecembre = $_POST["consoDecembre"];




$conn = mysqli_connect("localhost", "root", "root", "connexion");

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}



$sql = "SELECT consoJanvier, consoFevrier, consoMars, consoAvril, consoMai, consoJuin, consoJuillet, consoAout, consoSeptembre, consoOctobre, consoNovembre, consoDecembre from pageDeCo";

if($_POST['button1']){

    $sql = "UPDATE pageDeCo SET consoJanvier = '$consoJanvier', consoFevrier = '$consoFevrier', consoMars = '$consoMars', consoAvril = '$consoAvril', consoMai = '$consoMai', consoJuin = '$consoJuin', consoJuillet = '$consoJuillet', consoAout = '$consoAout', consoSeptembre = '$consoSeptembre', consoOctobre = '$consoOctobre', consoNovembre = '$consoNovembre', consoDecembre = '$consoDecembre' ... where mail = '".$email."' ";
    if (mysqli_query($conn, $sql)) {
      echo "Nouveau enregistrement créé avec succès";
      $sql = "SELECT consoJanvier, consoFevrier, consoMars, consoAvril, consoMai, consoJuin, consoJuillet, consoAout, consoSeptembre, consoOctobre, consoNovembre, consoDecembre from pageDeCo";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}
}


mysqli_close($conn);

?>

        <div id="container">
            <!-- zone de connexion -->
            
            <form method="POST">
                <h1>Enter your monthly consumption data</h1>
                
                <label><b>Consumption in January (in KW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoJanvier" required>

                <label><b>Consumption in February (in KW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoFevrier" required>

                <label><b>Consumption in March (in KW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoMars" required>

                <label><b>Consumption in April (in KW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoAvril" required>

                <label><b>Consumption in May (in KW))</b></label>
                <input type="text" placeholder="Enter the value" name="consoMai" required>

                <label><b>Consumption in June (in KW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoJuin" required>

                <label><b>Consumption in July (in KW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoJuillet" required>

                <label><b>Consumption in August (in KW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoAout" required>

                <label><b>Consumption in September (in KW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoSeptembre" required>
                
                <label><b>Consumption in October (in KW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoOctobre" required>

                <label><b>Consumption in November (in KW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoNovembre" required>

                <label><b>Consumption in December (in KW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoDecembre" required>

                <input type="submit" id='submit' name="button1" value='SAVE' >
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
</html>