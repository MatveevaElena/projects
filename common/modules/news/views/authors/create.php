<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\news\models\Authors */

$this->title = Yii::t('ML', 'Create {modelClass}', [
	'modelClass' => Yii::t('ML','Authors')
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('ML', 'Authors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
