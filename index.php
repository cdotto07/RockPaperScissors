<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Rock Paper Scissors</title>
        <link rel="stylesheet" href="css.css">
    </head>

    <body>
        <form class="PL1" action="form2.php" method="post">
            <h2>Player One</h2>
            <h5>Choose One:</h5>
            <label>
                <input type="radio" name="rps1" value="R">
                <img src="rock-paper-scissors-emoji-cartoon-027-512.png"/>
            </label>

            <label>
                <input type="radio" name="rps1" value="P">
                <img src="rock-paper-scissors-emoji-cartoon-019-512.png"/>
            </label>
            
            <label>
                <input type="radio" name="rps1" value="S" checked>
                <img src="rock-paper-scissors-emoji-cartoon-009-512.png"/>
            </label>

            <p><input type="submit" value="Play"></p>

        </form>
    </body>
</html>
