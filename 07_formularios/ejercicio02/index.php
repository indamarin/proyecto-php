<?php

if (empty($_POST["user_name"]) != 1){
    echo "<h2>Bienvenido a IAW:".$_POST["user_name"]."</h2>";
}



//print_r($_GET);
?>

<html>

    <head>
    </head>

    <body>

        <form action="index.php" method="post">
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="user_name">
                <button type="submit">Enviar</button>
            </div>

        </form>

    </body>

</html>