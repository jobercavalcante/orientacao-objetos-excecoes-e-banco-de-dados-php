<?php
date_default_timezone_set ('America/Manaus');
$data = new DateTime();
echo '<pre>';
var_dump($data->format('d/m/Y H:i'));
$intervalo = new DateInterval('PT5M');

$data->add($intervalo);

var_dump($data->format('d/m/Y H:i'));
$intervalo = new DateInterval('P1YT5M');
$data->sub($intervalo);
var_dump($data->format('d/m/Y H:i'));
