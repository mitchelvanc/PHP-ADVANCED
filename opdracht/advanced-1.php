<!DOCTYPE html>
<html>
    <head>
        <title>advanced php</title>
        <style>
           



        </style>
    </head>
    <body>

    <form action="advanced-2.php" method="POST">
        <ul><label for="padding">cel-dikte (px)</label>
        <input type="number" name="padding" placeholder="cel-dikte"></ul>

        <ul><label for="tabel">tabelrand dikte (px)</label>
        <input type="number" name="tabel" placeholder="tabelrand dikte"></ul>

        <ul><label for="textkleur">kies een kleur</label>
        <select id="textkleur" name="textkleur" size="1">
            <?php

                $textkleur = array("red", "blue", "green", "black", "brown");
                foreach ($textkleur as $key => $value) {
                    echo "<option value=".$value.">$value</option>";
                }
            ?></select></ul>

        <ul><label for="kleur">kies een achtergrondkleur</label>
        <select id="kleur" name="kleur" size="1">
            <?php

                $kleur = array("red", "blue", "green", "black", "brown");
                    foreach ($kleur as $key => $value) {
                    echo "<option value=".$value.">$value</option>";
                }
            ?></select></ul>
        <input type="submit">
        
    </form>
    </body>
</html>