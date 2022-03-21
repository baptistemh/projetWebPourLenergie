<html>
    <style> 

body{
    background: #11181C;
}
#container{
    width:600px;
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
    width: 68%;
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
    <link rel="stylesheet" href="style.css">
    <header class="header" >
    

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

$item1 = $_POST["item1"];
$item2 = $_POST["item2"];
$item3 = $_POST["item3"];



$conn = mysqli_connect("localhost", "root", "root", "connexion");

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}



if($_POST['button2']){

   
$sql = "UPDATE item SET nbItem1 = '$item1', nbItem2 = '$item2', nbItem3 = '$item3' where id = '1' ";
if (mysqli_query($conn, $sql)) {
      echo "Nouvelle modification créé avec succès";
      $sql = "SELECT nbItem1, nbItem2, nbItem3 from item";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}
}
header('Location: pageAcc.php');


mysqli_close($conn);

?>
        <div id="container">
            <!-- zone de connexion -->
            
            <form method="POST">
                <h1>Manage the Number of Items</h1>
                
                <label><b>Number of Item 1</b></label>
                <input type="text" placeholder="Enter the number" name="item1">

                <label><b>Number of Item 2</b></label>
                <input type="text" placeholder="Enter the number" name="item2">

                <label><b>Number of Item 3</b></label>
                <input type="text" placeholder="Enter the number" name="item3">

                <input type="submit" id='submit' name="button2" value='VALIDATE' >
            </form>
        </div>
    </body>
</html>