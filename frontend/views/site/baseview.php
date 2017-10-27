<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'BASEVIEW';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>BASEVIEW BASEVIEW BASEVIEW BASEVIEW </p>

    <code><?= __FILE__ ?></code>
</div>

<?=var_dump($_SESSION);  ?>
<br>
<br>

<?=var_dump($_REQUEST);  ?>
<br>
<br>
