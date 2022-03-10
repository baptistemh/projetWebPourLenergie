<!-- page accueil -->
<!DOCTYPE html>
<html>
<style>
 body {
background: #D2B48C;
display: flex;
justify-content: center;
color: black;
}

.tpsept {
  width: 530px;
  height: 600;
  border: 1px solid;
  border-radius: 10px;
  flex-direction: column;
  padding: 0 50px 40px 50px;
  background: white;
}
.debuttpsept {
  width: 500px;
  height: 380;
  flex-direction: column;
  padding: 0 10px 0 10px;
  background: white;
}
.fintpsept {
   width: 540px;
  height: 70;
  flex-direction: column;
  padding: 0 10px 0 10px;
  background: white;
}

form div {
width: 100%;
display: flex;
flex-direction: column;
margin-top: 10px;
}

form div > label {
margin-bottom: 7px;
font-weight: 600;
}

form div > input, form div > select {
background: #D2B48C;
border: none;
border-radius: 5px;
font-size: 16px;
font-weight: 500;
box-shadow: 0px 2px 2px 0px ;
}


form div > input::placeholder {
color: white;
}

form div > select:invalid {
color: white;
}

form div > select option {
color: white;
}

form div:last-child {
margin-top: 20px;
}
form div > input::checkbox {
align-items: baseline;
}
.button {
  background-color: orange;
border-radius: 10px;
border: 4px double #cccccc;
color: purple;
  margin: 10px;
  padding: 10px;
  text-decoration: none;
  text-align: center;
  display: inline-block;
  font-size: 15px;
  cursor: pointer;
}
.button:hover {
  background-color: yellowgreen;
  color: blue;
}


</style>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Page de connexion</title>

</head>


<body>

<?php
$name = $_POST["input"];
$forname = $_POST["input1"];
$mail = $_POST["input2"];
$password = $_POST["input3"];



$conn = mysqli_connect("localhost", "root", "root", "connexion");

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

echo "Connexion réussie"."<br/>";

$sql = "SELECT name, forname, mail, password from pageDeCo";

if($_POST['button1']){
    $select = mysqli_query($conn, "SELECT * FROM pageDeCo WHERE mail = '".$mail."'");
if(mysqli_num_rows($select)) {
    $sql = "SELECT name, forname, mail, password from pageDeCo";
    if (mysqli_query($conn, $sql)) {
      echo "The email is already used";
      $sql = "SELECT name, forname, mail, password from pageDeCo";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}
}
else{
$sql = "INSERT INTO pageDeCo (name, forname, mail, password) VALUES ('$name', '$forname', '$mail', '$password')";
if (mysqli_query($conn, $sql)) {
      echo "Nouveau enregistrement créé avec succès";
      $sql = "SELECT name, forname, mail, password from pageDeCo";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}
}
}

mysqli_close($conn);

?>

   <div class="tpsept">
      <h1> Welcome to the inscription page </h1>
   <div class="debuttpsept">

  
   <form method="post">
<div>
<label for="name">Your name</label>
<input type="text" id="name" name="input" required>
</div>
<div>
<label for="forname">Your first name</label>
<input type="text" id="forname" name="input1" required>
</div>
<div>
<label for="mail">Your e-mail</label>
<input type="email" id="mail" name="input2" required>
</div>
<div>
<label for="password">Your password</label>
<input type="password" id="password" name="input3" required>
</div>
<br>
<button class="button" type="submit" name="button1" > SAVE </button>
</div>

</div>
</form>
</body>


</html>