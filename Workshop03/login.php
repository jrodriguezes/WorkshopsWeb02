<?php
include('bd/getDBData.php');

$states = getStates();

$user = $_GET['user'] ?? '';
$userData = $user ? getUserByName($user) : null;
?>
<form method="get">
    <label for="user">Ingrese su usuario</label>
    <input type="text" name="user" value="<?= $user ?>">
    <button type="submit">Verificar</button>
</form>

<label>Nombre</label>
<input type="text" value="<?= $userData['name'] ?>" readonly>

<label>Apellido</label>
<input type="text" value="<?= $userData['lastname'] ?>" readonly>

<label>Email</label>
<input type="text" value="<?= $userData['gmail'] ?>" readonly>

<label>Teléfono</label>
<input type="text" value="<?= $userData['tel'] ?>" readonly>

<label>Provincia</label>
<select disabled>
    <?php foreach ($states as $state) {
        $selected = (isset($userData['stateId']) && $userData['stateId'] == $state['id']) ? 'selected' : '';
        ?>

        <option value="<?= $state['id'] ?>" <?= $selected ?>><?= $state['state'] ?></option>
    <?php } ?>
</select>