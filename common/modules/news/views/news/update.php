<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\news\models\News */

$this->title = Yii::t('ML', 'Update {modelClass}: {modelName}', [
	'modelClass' => Yii::t('ML','News'),
	'modelName' => $model->title
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('ML', 'News'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('ML', 'Update');
?>
<div class="news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
