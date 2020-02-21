<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\news\models\Authors */

$this->title = Yii::t('ML', 'Update {modelClass}: {modelName}', [
	'modelClass' => Yii::t('ML','Authors'),
	'modelName' => $model->name
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('ML', 'Authors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('ML', 'Update');
?>
<div class="authors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
