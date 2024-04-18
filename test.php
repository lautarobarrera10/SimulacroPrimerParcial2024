<?php

include "Cliente.php";
include "Moto.php";
include "Venta.php";
include "Empresa.php";

$lautaro = new Cliente("Lautaro", "Barrera", false, "DNI", 41421435);

$smash = new Moto(1, 1000, 2020, "Ideal para andar en ciudad.", 10, true);
$smashTurbo = new Moto(2, 1200, 2024, "Como la smash pero con turbo.", 11, true);

$primerVenta = new Venta(1, date("d-m-Y"), $lautaro, [$smash]);

$primerVenta->incorporarMoto($smashTurbo);

$nippon = new Empresa("Nippon Motos", "Alem 1400", [$lautaro], [$smash, $smashTurbo], [$primerVenta]);

echo $nippon;