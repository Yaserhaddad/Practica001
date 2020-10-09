<?php
     $id = array(1,2,3,4,5,6);
     $nombres = array("Yaser", "David", "Amin", "Isma", "Sandra", "Sara");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicio Arrays</title>
</head>
<body>
    <label for="nombre">Elige un nombre</label>

        <select>
            <option value="<?= $id[0] ?>"><?= $nombres[0] ?></option>
            <option value="<?= $id[1] ?>"><?= $nombres[1] ?></option>
            <option value= "<?= $id[2] ?>"><?= $nombres[2] ?></option>
            <option value= "<?= $id[3] ?>"><?= $nombres[3] ?></option>
            <option value= "<?= $id[4] ?>"><?= $nombres[4] ?></option>
            <option value= "<?= $id[5] ?>"><?= $nombres[5] ?></option>
        </select>
        </br>
        </br>
        <select>
        <?php
            foreach ($nombres as $id => $denominacion){
                echo "<option value='$id'>$denominacion</option>\n";
            }
        
        ?>
        </select>


        <br/>
        </body>
</html>