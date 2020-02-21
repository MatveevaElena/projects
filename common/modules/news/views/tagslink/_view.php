<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\modules\roles\models\ACLRole;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\news\models\searches\TagsLinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tag_id',
            'item_id',
            'model',

            [
				'class' => 'yii\grid\ActionColumn',
			],
        ],
    ]); ?>
