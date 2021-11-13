
<!-- <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
} 

</script> -->

<?php 

$err="";

if (isset($_POST['submit'])) {  

    if(empty($_POST['alga'])) {
       $err = "<script> alert('Lūdzu ievadiet summu');</script>";
    }
    else {
        echo "<script src='app.js'></script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Algas kalkulators</title>
</head>
<body>

    <div id="wrapper">
        <div id="box">
        <img src="swed.png" width="300px" class="img">
            <div id="content">
            
            <p>Bruto mēnešalga jeb alga pirms nodokļu nomaksas:</p>

            <form action="" method="POST">
            <input type="text" name="alga" id="alga">
            <label for="number">EUR mēnesī</label><br><br>

            <p>Algas nodokļu grāmatiņa ir iesniegta darba devējam:</p>
            
            <input type="radio" name="gramatina" value="ja" id="yes">Jā<br>
            <input type="radio" name="gramatina" value="ne" id="no">Nē<br><br>
          

            <button type="submit" name="submit" class="btn" id="submit">Submit</button>
            
            
            </form>

            <h2>Jūsu alga pēc nodokļu nomaksas ir</h2>
            <h2 id = "result"></h2>

            </div>
        </div>
    </div>
    
    <script src='app.js'></script>

</body>
</html>