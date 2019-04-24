<?php
//Player 1's choice
$PL1 = $_POST['rps1'];
//Player 2's choice
$PL2 = $_POST['rps2'];
//Shows what the players chose
echo "Player 1 chose: " . $PL1 . "<br>";
echo "Player 2 chose: " . $PL2 . "<br>";

if ($PL1 == $PL2) {
        echo 'You have tied!';
        } else if ($PL1 == 'R' && $PL2 == 'P') {
        echo 'Player 2 wins!';
        } else if ($PL1 == 'R' && $PL2 == 'S') {
        echo 'Player 1 wins!';
        } else if ($PL1 == 'P' && $PL2 == 'R') {
        echo 'Player 1 wins!';
        } else if ($PL1 == 'P' && $PL2 == 'S') {
        echo 'Player 2 wins!';
        } else if ($PL1 == 'S' && $PL2 == 'R') {
        echo 'Player 2 wins!';
        } else if ($PL1 == 'S' && $PL2 == 'P') {
        echo 'Player 1 wins!';
        }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rock Paper Scissors</title>
        <link rel="stylesheet" href="css.css">
    </head>
</html>
<body>
    <form method="post" action="index.php">
        <input type="submit" value="Play Again">
    </form>
