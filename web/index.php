<?php
/**
 * Created by PhpStorm.
 * User: Inkognito
 * Date: 18.07.2017
 * Time: 15:03
 */

include_once('../render/Viewer.php');

use render\Viewer;

$render = new Viewer();
$type = 1;
$name = 'Serj';
$colors = ['red', 'green', 'blue'];

echo $render->render('../views/default', ['from' => $name, 'colors' => $colors, 'type' => $type]);