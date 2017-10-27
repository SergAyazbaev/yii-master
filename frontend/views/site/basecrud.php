<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\helpers\HTMLPurifier;
use yii\helpers\Url;


$this->title = 'CRUD';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <code><?=print_r($_GET);?></code>
</div>


<?php



foreach ($models as $model){
    if ( (int) $model->id > 0)
        echo "<br><br> ".Html::encode($model->id)
            ." <input type='text' id='$model->id' size='50%'  value='"
            .HtmlPurifier::process($model->text)." ' > " ;

    echo " ".Html::a('Вставить', Url::to(['site/insert', 'id' => $model->id ])) ;
    echo " ".Html::a('Удалить',  Url::to(['site/delete', 'id' => $model->id])) ;
    echo " ".Html::a('Изменнить', Url::to(['site/update', 'id' => $model->id, 'text' => "dfgsdfg ->>".$model->text  ])) ;


}

?>




