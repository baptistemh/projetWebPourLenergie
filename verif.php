<?php
session_start();
if(isset($_POST['input2']) && isset($_POST['input3']))
{
  $conn = mysqli_connect("localhost", "root", "root", "connexion");

  if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
  }
  
  echo "Connexion réussie"."<br/>";
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $email = mysqli_real_escape_string($conn,htmlspecialchars($_POST['input2'])); 
    $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['input3']));
    
    if($email !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM pageDeCo where 
              mail = '".$email."' and password = '".$password."' ";
        $exec_requete = mysqli_query($conn,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
          $_SESSION['input2'] = $email;
          $requete2 = "SELECT * FROM pageDeCo where mail = '".$email."' ";
          $exec_requete2 = mysqli_query($conn,$requete2);
          $reponse2     = mysqli_fetch_object($exec_requete2);
          $_SESSION['name'] = $reponse2->name;
          $_SESSION['forname'] = $reponse2->forname;
          $_SESSION['password'] = $reponse2->password;
          $_SESSION['consoJanvier'] = $reponse2->consoJanvier;
          $_SESSION['consoFevrier'] = $reponse2->consoFevrier;
          $_SESSION['consoMars'] = $reponse2->consoMars;
          $_SESSION['consoAvril'] = $reponse2->consoAvril;
          $_SESSION['consoMai'] = $reponse2->consoMai;
          $_SESSION['consoJuin'] = $reponse2->consoJuin;
          $_SESSION['consoJuillet'] = $reponse2->consoJuillet;
          $_SESSION['consoAout'] = $reponse2->consoAout;
          $_SESSION['consoSeptembre'] = $reponse2->consoSeptembre;
          $_SESSION['consoOctobre'] = $reponse2->consoOctobre;
          $_SESSION['consoNovembre'] = $reponse2->consoNovembre;
          $_SESSION['consoDecembre'] = $reponse2->consoDecembre;
          header('Location: pageAcc.php');
        }
        else
        {
           header('Location: connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: connexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: connexion.php');
}
mysqli_close($conn); // fermer la connexion
?>