<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Rock Paper Scissors</title>
        <link rel="stylesheet" href="css.css">
    </head>

    <body>
        <form class="PL2" action="comp.php" method="post">
            <h2>Player Two</h2>
            <h5>Choose One:</h5>
            <label>
                <input type="radio" name="rps2" value="R">
                <img src="rock-paper-scissors-emoji-cartoon-027-512.png"/>
            </label>

            <label>
                <input type="radio" name="rps2" value="P">
                <img src="rock-paper-scissors-emoji-cartoon-019-512.png"/>
            </label>

            <label>
                <input type="radio" name="rps2" value="S" checked>
                <img src="rock-paper-scissors-emoji-cartoon-009-512.png"/>
            </label>            
            <input type="hidden" name="rps1" value="<?php echo $_POST['rps1']; ?>">
            <p><input type="submit" value="Play"></p>
        </form>
    </body>
</html>