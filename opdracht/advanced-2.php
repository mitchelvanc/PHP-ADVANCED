<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            body{
                background-color: <?php echo $_POST["kleur"] ?> ;
                color: <?php echo $_POST["textkleur"]?>
            }
        </style>
    </head>
    <body>
        <?php
            echo "textkleur: ".$_POST["textkleur"];
        ?>
    </body>
</html>