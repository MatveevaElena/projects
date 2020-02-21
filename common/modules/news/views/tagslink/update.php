<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\news\models\TagsLink */

$this->title = Yii::t('ML', 'Update {modelClass}: {modelName}', [
	'modelClass' => Yii::t('ML','Tags Link'),
	'modelName' => $model->id
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('ML', 'Tags Links'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('ML', 'Update');
?>
<div class="tags-link-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
