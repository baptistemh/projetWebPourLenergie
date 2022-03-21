<!DOCTYPE html>
<html>

<head>
    <title>Market</title>
    <meta charset="utf-8" />
    <script type="text/javascript"></script>
    <link href="achats.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
    session_start();

    if ($_SESSION['input2'] !== "") {
        $user = $_SESSION['name'];

        echo '<h2 style="text-align: center; color: white";> Bonjour ' . $user . ', vous êtes dans le magasin ! </h2>';
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
            echo '<h2 style="text-align: center; color: white";>Erreur bouffon </h2>';
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

    <div id="nav">
        <div id="items">
            <div id="f1">
                <center>
                    <img src="Thib.jpeg" width="150" height="150">
                    <button value="bouquet" id="one" onclick="plusF1()">ITEM 1<br>2€ il en reste <?php echo $nbItem1; ?></button>
                </center>
            </div>

            <div id="f2">
                <center>
                    <img src="Charlotte.jpeg" width="150" height="150">
                    <button value="bouquet" id="two" onclick="plusF2()">ITEM 2<br>2€ il en reste <?php echo $nbItem2; ?></button>
                </center>
            </div>

            <div id="f3">
                <center>
                    <img src="Baptiste.jpeg" width="150" height="150">
                    <button value="bouquet" id="three" onclick="plusF3()">ITEM 3<br>2€ il en reste <?php echo $nbItem3; ?></button>
                </center>
            </div>

            <div id="container">

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

</body>

</html>