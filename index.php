<!-- ! press tab -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="images/dice.ico" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">

 <link rel="stylesheet" type="text/css" href="style.css">

  <title>Dice Roll Game</title>


</head>
<body>
<center>  <img src="images/dice.png" height="100px"/><h1> Dice Roll Game </h1>
  <br>
  <p>
    <img id="dice"class=""src="images/<?php echo rand(1,6);?>.png"/>
  </p><br>
<input id="stop" for="btnControl" class="button"type="button" value="Roll the Dice" onclick="myFunction()"/>


</center>
  <script>

function myFunction(){

document.getElementById("dice").className = "dice";
window.setTimeout(function(){window.location.reload()}, 2000);


}




  </script>
</body>

</html>
