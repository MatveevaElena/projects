<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\news\models\TagsLink */

$this->title = Yii::t('ML', 'Create {modelClass}', [
	'modelClass' => Yii::t('ML','Tags Link')
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('ML', 'Tags Links'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tags-link-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
