<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator app\components\gii\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();

echo "<?php\n";
?>

use yii\helpers\Html;
use <?= $generator->indexWidgetType === 'grid' ? "yii\\grid\\GridView" : "yii\\widgets\\ListView" ?>;
use common\modules\roles\models\ACLRole;

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ML', <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">

    <h1><?= "<?= " ?>Html::encode($this->title) ?></h1>
<?php /*if(!empty($generator->searchModelClass)): ?>
<?= "    <?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
<?php endif;*/ ?>

    <p>
        <?= "<?= " ?>ACLRole::accessControllerAction('create')? Html::a(<?= "Yii::t('ML', 'Create'), ['create'], ['class' => 'btn btn-success']) : '' ?>\n" ?>
    </p>

	<?= $generator->enablePjax? "<?php \yii\widgets\Pjax::begin(); ?>" : '' ?>
	
	<?= "<?=" ?> $this->render('_view', [
<?= !empty($generator->searchModelClass)? "\t\t'searchModel' => \$searchModel,\n" : '' ?>
		'dataProvider' => $dataProvider,
	]) ?>
	<?= $generator->enablePjax? "<?php \yii\widgets\Pjax::end(); ?>" : '' ?>
	
</div>
