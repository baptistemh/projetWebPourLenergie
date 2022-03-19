<!DOCTYPE html>
<html>
<head>
	<title>BUY</title>
	<meta charset="utf-8" /> 
	<script type="text/javascript"></script>
	<link href="achats.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php

$conn = mysqli_connect("localhost", "root", "root", "connexion");

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

echo "Connexion réussie"."<br/>";

$requete = "SELECT count(*) FROM item where id = '1' ";
        $exec_requete = mysqli_query($conn,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
          $requete2 = "SELECT * FROM item where id = '1' ";
          $exec_requete2 = mysqli_query($conn,$requete2);
          $reponse2     = mysqli_fetch_object($exec_requete2);
          $nbItem1 = $reponse2->nbItem1;
          $nbItem2 = $reponse2->nbItem2;
          $nbItem3 = $reponse2->nbItem3;
        }
echo $nbItem1;

/*if($_POST['pourItem1']){
   
    $sql = "UPDATE item SET nbItem1 = '$item1', nbItem2 = '$item2', nbItem3 = '$item3' where id = '1' ";
    if (mysqli_query($conn, $sql)) {
          echo "Nouvelle modification créé avec succès";
          $sql = "SELECT nbItem1, nbItem2, nbItem3 from item";
    } else {
          echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }
    echo "c'est bon";
    }*/

mysqli_close($conn);

?>

	<div id="header">
 		 <h1>Welcome to your florist</h1>
	</div>

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

   </div>
   
</div>
   		<div id="footer">
     	<button onclick="reset()"> RESET </button>
     	Total price : <span id="sum"></span> € ! Il reste : <span id="resteItem1"></span> item1, <span id="resteItem2"></span> item2 et <span id="resteItem3"></span> item3
         <input type="submit" id='submit' name="button2" value='VALIDATE' >
     </div>
     	


     <script type="text/javascript">
		var f1=0;
		var f2=0;
		var f3=0;
        var nombreItem1=<?php echo $nbItem1; ?>;
        var nombreItem2=<?php echo $nbItem2; ?>;
        var nombreItem3=<?php echo $nbItem3; ?>;

        /*function moinsUn() { 
            nombreItem1 = nombreItem1 - 1;
            document.getElementById("test").innerHTML=nombreItem1;
        }*/

		function total(){
			var tot = f1+f2+f3; 
                document.getElementById("sum").innerHTML=tot; 
            }

		

		function reset() {
			f1=0;
			f2=0;
			f3=0;
            var nombreItem1=<?php echo $nbItem1; ?>;
        var nombreItem2=<?php echo $nbItem2; ?>;
        var nombreItem3=<?php echo $nbItem3; ?>;
			document.getElementById("sum").innerHTML=0;
            document.getElementById("resteItem1").innerHTML=<?php echo $nbItem1; ?>;
            document.getElementById("resteItem2").innerHTML=<?php echo $nbItem2; ?>;
            document.getElementById("resteItem3").innerHTML=<?php echo $nbItem3; ?>;
		}

		function plusF1(){
			f1+=2;
            nombreItem1 = nombreItem1 - 1;
            document.getElementById("resteItem1").innerHTML=nombreItem1;
			total();
            <?php
            echo "ca marche";
            ?>
            
		}
		function plusF2(){
			f2+=2;
            nombreItem2 = nombreItem2 - 1;
            document.getElementById("resteItem2").innerHTML=nombreItem2;
			total();
		}
		function plusF3(){
			f3+=2;
            nombreItem3 = nombreItem3 - 1;
            document.getElementById("resteItem3").innerHTML=nombreItem3;
			total();
		}
	</script>

</body>

</html>