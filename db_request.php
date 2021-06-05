<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Test</h2>

    <form action="/formation_php/request_handler.php" method="post">
        <input type="text" name="nom" id="">
        <input type="number" name="age" id="">
        <input type="submit" value="Envoyer">
    </form>

    <table>
        <tbody>
        <?php

        // $query = "INSERT INTO user (nom, age) VALUES ('$nom', $age);";
        
        $user = 'root';
        $pass = '';
        $dbh = new PDO('mysql:host=localhost;dbname=myapp', $user, $pass);
        
        $result = $dbh->query("SELECT * FROM USER;");
        // var_dump($result);

        foreach ($result as $row) {
            // var_dump($row);
            // echo "$row['']"
            $name =$row['nom'];
            $age =$row['age'];

            echo "<tr><td>$name</td><td>$age</td></tr>";
            # code...
        }

        ?>
        </tbody>
    </table>
</body>
</html>