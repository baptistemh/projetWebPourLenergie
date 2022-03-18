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


  

echo $nbItem1;

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
				<button value="bouquet" id="one" onclick="plusF1()">ITEM 1<br>2€<br><?php echo $nbItem1; ?></button>
			</center>
		</div>

		<div id="f2">
			<center>
				<img src="Charlotte.jpeg" width="150" height="150">
				<button value="bouquet" id="two" onclick="plusF2()">ITEM 2<br>2€<br></button>
			</center>
		</div>
		
		<div id="f3">
			<center>
				<img src="Baptiste.jpeg" width="150" height="150">
				<button value="bouquet" id="three" onclick="plusF3()">ITEM 3<br>2€</button>
		</center>
		</div>

   </div>
   
</div>
   		<div id="footer">
     	<button onclick="reset()"> RESET </button>
     	Total price : <span id="sum"></span> €
         <button onclick="reset()"> VALIDATE </button>
     </div>
     	


<script type="text/javascript">
		var f1=0;
		var f2=0;
		var f3=0;

		function total(){
			var tot = f1+f2+f3; 
                document.getElementById("sum").innerHTML=tot; 
            }

		

		function reset() {
			f1=0;
			f2=0;
			f3=0;
			document.getElementById("sum").innerHTML=0;
		}

		function plusF1(){
			f1+=2;
			total();
		}
		function plusF2(){
			f2+=2;
			total();
		}
		function plusF3(){
			f3+=2;
			total();
		}

	</script>

</body>
</html>