<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\modules\roles\models\ACLRole;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\news\models\searches\TagsLinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ML', 'Tags Links');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tags-link-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ML', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

	<?php \yii\widgets\Pjax::begin(); ?>	
	<?= $this->render('_view', [
		'searchModel' => $searchModel,
		'dataProvider' => $dataProvider,
	]) ?>
	<?php \yii\widgets\Pjax::end(); ?>	
</div>
