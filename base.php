<!-- page accueil -->
<!DOCTYPE html>
<html>
<style>
    body {
        background: #11181C;
    }

    #box {
        width: 400px;
        margin: 0 auto;
        margin-top: 10%;
    }

    /* Bordered form */
    form {
        width: 100%;
        padding: 30px;
        border: 1px solid #f1f1f1;
        background: #fff;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    #box h1 {
        width: 38%;
        margin: 0 auto;
        padding-bottom: 10px;
    }

    input[type=text],
    input[type=password],
    input[type=email] {
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Page de connexion</title>

</head>

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

    echo "Connexion réussie" . "<br/>";

    $sql = "SELECT name, forname, mail, password from pageDeCo";

    if ($_POST['button1']) {
        $select = mysqli_query($conn, "SELECT * FROM pageDeCo WHERE mail = '" . $mail . "'");
        if (mysqli_num_rows($select)) {
            $sql = "SELECT name, forname, mail, password from pageDeCo";
            if (mysqli_query($conn, $sql)) {
                echo "The email is already used";
                $sql = "SELECT name, forname, mail, password from pageDeCo";
            } else {
                echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            $sql = "INSERT INTO pageDeCo (name, forname, mail, password) VALUES ('$name', '$forname', '$mail', '$password') ";
            if (mysqli_query($conn, $sql)) {
                echo "Nouveau enregistrement créé avec succès";
                $sql = "SELECT name, forname, mail, password from pageDeCo";
            } else {
                echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        header('Location: carrousel.html');
    }

    mysqli_close($conn);

    ?>


    <div id="box">
        <form method="post">
            <h1>Inscription</h1>

            <label>Your name</label>
            <input type="text" id="name" name="input" required>

            <label>Your first name</label>
            <input type="text" id="forname" name="input1" required>

            <label>Your e-mail</label>
            <input type="email" id="mail" name="input2" required>

            <label>Your password</label>
            <input type="password" id="password" name="input3" required>

            <input type="submit" id='submit' name="button1" value='SAVE'>
    </div>

    </div>
    </form>
</body>


</html>