<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\modules\roles\models\ACLRole;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = Yii::t('ML', $model-><?= $generator->getNameAttribute() ?>);
$this->params['breadcrumbs'][] = ['label' => Yii::t('ML', <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-view">

    <h1><?= "<?= " ?>Html::encode($this->title) ?></h1>
    <p>
        <?= "<?= " ?>ACLRole::accessControllerAction('create')? Html::a(<?= "Yii::t('ML', 'Create'), ['create'], ['class' => 'btn btn-success']) : '' ?>\n" ?>
        <?= "<?= " ?>ACLRole::accessControllerAction('update')? Html::a(Yii::t('ML', <?= $generator->generateString('Update') ?>), ['update', <?= $urlParams ?>], ['class' => 'btn btn-primary']) : '' ?>
        <?= "<?= " ?>ACLRole::accessControllerAction('delete')? Html::a(Yii::t('ML', <?= $generator->generateString('Delete') ?>), ['delete', <?= $urlParams ?>], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('ML', <?= $generator->generateString('Are you sure you want to delete this item?') ?>),
                'method' => 'post',
            ],
        ]) : '' ?>
    </p>

    <?= "<?= " ?>DetailView::widget([
        'model' => $model,
        'attributes' => [
<?php
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        echo "            '" . $name . "',\n";
    }
} else {
    foreach ($generator->getTableSchema()->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
    }
}
?>
        ],
    ]) ?>

</div>
