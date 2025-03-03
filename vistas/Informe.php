<?php
require_once __DIR__ . '/../dao/DaoVenta.php';

$daoVenta = new DaoVenta();
$ventas = $daoVenta->obtenerVentas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Ventas</title>
    <link rel="stylesheet" href="/informe_ventas/vistas/styles.css">
</head>
<body>
    <h1>Informe de Ventas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Empresa</th>
                <th>Factura</th>
                <th>Fecha</th>
                <th>Comprador</th>
                <th>Artículos</th>
                <th>Valor Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ventas as $venta): ?>
                <tr>
                    <td><?= $venta->id ?></td>
                    <td><?= $venta->empresa_nombre ?></td>
                    <td><?= $venta->numero_factura ?></td>
                    <td><?= $venta->fecha_venta ?></td>
                    <td><?= $venta->comprador ?></td>
                    <td><?= $venta->articulos_vendidos ?></td>
                    <td>$<?= number_format($venta->valor_total, 2) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
