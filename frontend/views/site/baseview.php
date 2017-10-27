<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\helpers\HTMLPurifier;





$this->title = 'Просмотр таблицы';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <code><?= __FILE__ ?></code>

</div>
<br><br><br>

<?php
foreach ($models as $model){
    echo \yii\widgets\DetailView::widget([
        'model'=> $model['id'],
        'attributes' => [
            [
                'label' => 'Owner',
                'value' => $model->id,
                'contentOptions' => ['class' => 'bg-red'],     // HTML attributes to customize value tag
                'captionOptions' => ['tooltip' => 'Tooltip'],  // HTML attributes to customize label tag
            ],
            [
                'label' => 'TEXT',
                'value' => $model->text,
                'contentOptions' => ['class' => 'bg-red'],     // HTML attributes to customize value tag
                'captionOptions' => ['tooltip' => 'Tooltip'],  // HTML attributes to customize label tag
            ],
        ],
    ]);

}

echo '<br><br><br>';

foreach ($models as $model){
    if ( (int) $model->id > 0)
        echo "<h2>".Html::encode($model->id)." -> ".HtmlPurifier::process($model->text)." </h2> " ;


}

?>

