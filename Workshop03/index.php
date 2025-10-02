<?php
include("bd/getDBData.php");
$states = getStates();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Workshop02</title>
</head>

<body>
    <form action="processRegister.php" method="post">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" />
        <label for="lastname">Apellido</label>
        <input type="text" name="lastname" id="lastname" />
        <label for="email">Correo</label>
        <input type="text" name="email" id="email" />
        <label for="phone">Telefono</label>
        <input type="text" name="phone" id="phone" />

        <label for="state">Provincia</label>
        <select name="state" id="state">
            <?php foreach ($states as $state): ?>
                <option value="<?= $state['id'] ?>">
                    <?= $state['state'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Send</button>
    </form>
</body>

</html>