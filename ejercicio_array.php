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
            <option><?= $nombres[0] ?></option>
            <option><?= $nombres[1] ?></option>
            <option><?= $nombres[2] ?></option>
            <option><?= $nombres[3] ?></option>
            <option><?= $nombres[4] ?></option>
            <option><?= $nombres[5] ?></option>
        </select>
        <br/>

        <label for="numero">Elige un numero:</label>

        <select>
            <option><?= $id[0] ?></option>
            <option><?= $id[1] ?></option>
            <option><?= $id[2] ?></option>
            <option><?= $id[3] ?></option>
            <option><?= $id[4] ?></option>
            <option><?= $id[5] ?></option>
        </select>
        </body>
</html>