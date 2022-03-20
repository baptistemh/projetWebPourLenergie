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


    <head>
       <meta charset="utf-8">
    </head>
    <body>

    <?php
    session_start();

    if($_SESSION['input2'] !== ""){
        $user = $_SESSION['name'];
        // afficher un message
        echo '<h2 style="text-align: center; color: white";> Bonjour '.$user. ', vous êtes sur votre espace CONSO ! </h2>';
        
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

echo "Connexion réussie"."<br/>";
echo '<h4 color: red";> L email est bien '.$email. ', merci ! </h4>';

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
                <h1>Entrez vos données de consommation mensuels</h1>
                
                <label><b>Consommation du mois de Janvier (en MW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoJanvier" required>

                <label><b>Consommation du mois de Février (en MW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoFevrier" required>

                <label><b>Consommation du mois de Mars (en MW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoMars" required>

                <label><b>Consommation du mois d'Avril (en MW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoAvril" required>

                <label><b>Consommation du mois de Mai (en MW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoMai" required>

                <label><b>Consommation du mois de Juin (en MW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoJuin" required>

                <label><b>Consommation du mois de Juillet (en MW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoJuillet" required>

                <label><b>Consommation du mois d'Aout (en MW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoAout" required>

                <label><b>Consommation du mois de Septembre (en MW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoSeptembre" required>
                
                <label><b>Consommation du mois de Octobre (en MW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoOctobre" required>

                <label><b>Consommation du mois de Novembre (en MW)</b></label>
                <input type="text" placeholder="Enter the value" name="consoNovembre" required>

                <label><b>Consommation du mois de Decembre (en MW)</b></label>
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