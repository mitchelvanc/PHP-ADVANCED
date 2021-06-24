<!DOCTYPE html>
<html>
<head>
        <title>advancend-1</title>
    </head>
    <body>
    <form name="tabeldikte" action="advanced-2.php"
        method="post">
        <?php
            $kleuren =["","red", "blue", "green", "black", "brown"];      
        ?>
 
    Kies een tekst kleur: <select name="kleuren" id="kleuren">
               
                    <?php   foreach($kleuren as $value)
                        { 
                            echo "<option value=\"$value\">$value</option>";
                        }                   
                    ?>
               
            </select>
 
        <br><br>
 
    Kies een achtergrond kleur: <select name="kleur" id="kleur">      
                <option value=
                    <?php   foreach($kleuren as $value)
                        { 
                            // echo "$value[0] <br>" ;
                            echo "<option value=\"$value\">$value</option>";
                        }
                    ?>>
                </option>          
            </select>
 
        <br></br>
                    
            Tabel-border dikte (px): <input type="text" name="dikte" size="2">
        <br></br>
        Tabel-padding dikte (px): <input type="text" name="padding" size="2">
            <input type="submit" name="submit" value="verstuur">
        </form>
    </body>
</html>