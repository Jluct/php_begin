<?php
/**
 * Created by PhpStorm.
 * User: Inkognito
 * Date: 18.07.2017
 * Time: 15:25
 */
use render\Viewer;

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Hello from <?= $from ?>!</h1>

<?php //$type = 2; ?>

<?php
$render = new Viewer();

for ($i = 0; $i < count($colors); $i++) {
    echo $render->render('../views/card', ['color' => $colors[$i]]);
}

?>
<h2 style="clear: both;">Type = <?= $type ?></h2>

<?php for ($i = 0; $i < count($colors); $i++): ?>
    <div style="width: 100px;height: 100px; background: <?= $colors[$i] ?>;float: left;">
        <h3>CARD</h3>
    </div>
<?php endfor; ?>
</body>
</html>
