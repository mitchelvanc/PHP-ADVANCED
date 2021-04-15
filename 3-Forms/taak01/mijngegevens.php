<!DOCTYPE html>
<html>
    <head>
        
        <style>
            body{
                background-color: <?php echo $_POST["kleur"] ?> ;
            }
            






        </style>
    </head>
    <body>
    
    <?php
echo "<b>voornaam is:</b> ".$_POST["voornaam"];
echo "<br>";
echo "<b>achternaam is:</b> ".$_POST["achternaam"];
echo "<br>";
echo "<b>leeftijd is:</b> ".$_POST["leeftijd"];
echo "<br>";
echo "<b>adres is:</b> ".$_POST["adres"];
echo "<br>";
echo "<b>woonplaats is:</b> ".$_POST["woonplaats"];
echo "<br>";
echo "<b>favorite muziekband is:</b> ".$_POST["muziekband"];
echo "<br>";
echo "<b>geslacht is:</b> ".$_POST["geslacht"];
echo "<br>";








?>
    </body>
</html>