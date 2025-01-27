<h1>Datos del Cliente:</h1>
<div style="text-align: center; margin-bottom: 20px;">
    <img src="<?= $imagenCliente ?>" alt="Foto de <?= $cli->first_name . ' ' . $cli->last_name ?>" style="width: 150px; height: 150px; border-radius: 50%; border: 2px solid #000;" />
</div>
<table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%;">
    <tr>
        <td><strong>ID:</strong></td>
        <td><?= $cli->id ?></td>
    </tr>
    <tr>
        <td><strong>First Name:</strong></td>
        <td><?= $cli->first_name ?></td>
    </tr>
    <tr>
        <td><strong>Last Name:</strong></td>
        <td><?= $cli->last_name ?></td>
    </tr>
    <tr>
        <td><strong>Email:</strong></td>
        <td><?= $cli->email ?></td>
    </tr>
    <tr>
        <td><strong>Gender:</strong></td>
        <td><?= $cli->gender ?></td>
    </tr>
    <tr>
        <td><strong>IP Address:</strong></td>
        <td>
            <?= $cli->ip_address ?>
            <img src="https://flagcdn.com/16x12/<?= $datosPaisProcesados['codigoPais'] ?>.png" alt="Bandera <?= $datosPaisProcesados['nombrePais'] ?>" style="margin-left: 10px;" />
        </td>
    </tr>
    <tr>
        <td><strong>Teléfono:</strong></td>
        <td><?= $cli->telefono ?></td>
    </tr>
</table>
