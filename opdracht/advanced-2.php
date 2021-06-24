<!DOCTYPE html>
 
<html>
    <head>
        <title></title>
        <style>
            body{
                background-color: <?php echo $_POST["kleur"]?> ;
                color: <?php echo $_POST["kleuren"]?> ;
            }
 
        table, td, th {
            border: <?php echo $_POST["dikte"]?>  solid black;
            text-align: left;
            border-spacing: 5px;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            width: 50%;
        }
        </style>
    </head>
    <body>
        <?php
             
            $data = array("Voornaam"=>"Mitchel", "Achternaam"=>"Rvan cronenburg", "Leeftijd"=>"17", "Woonplaats"=>"Amstelveen", "Klas"=>"0C");
            
        ?>
        <?php function maakrij($value,$key){ ?>
            <table style="width:50%">
                <tr>
                    <td> <?php echo "$key";?></td>
                    <td> <?php echo "$value";?></td>
                </tr>
            </table>
        <?php } ?> 
        <table style= "width:50%">
            <tr>
                <th>key</th>
                <th>value</th>
            </tr>
        <?php foreach($data as $key => $value):
                maakrij("$key", "$value");    
            endforeach;?>
        </table>
    </body>
</html>