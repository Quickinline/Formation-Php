<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    .text_blue{
        color:blue;
    }
    </style>
    <h2>Ma page</h2>

    <form action="/formation_php/formulaire.php" method="get">

        <input type="number" name="first" id="">
        <input type="number" name="second" id="">
        <input type="submit" value="submit">
    
    </form>

    <div>
        <span class="<?php if(7 < 7) {echo 'text_blue';} ?>">
        This is my text
        </span>
    </div>
</body>
</html>