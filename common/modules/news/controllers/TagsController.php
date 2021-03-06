<?php

namespace common\modules\news\controllers;

use Yii;
use common\modules\news\models\Tags;
use common\modules\news\models\searches\TagsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

use yii\helpers\ArrayHelper;
// use common\modules\roles\models\ACLRole;

/**
 * TagsController implements the CRUD actions for Tags model.
 */
class TagsController extends Controller
{
    // public function behaviors()
    // {
    //     return ACLRole::defaultBehaviors();
    // }

    /**
     * Lists all Tags models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TagsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tags model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Tags model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tags();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Tags model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tags model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tags model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tags the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tags::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionCreatetag($name)
    {
        $model = new Tags;
        $model->title = $name;
        return $model->save();
    }
    public function actionGettags()
    {
        $authors_list = ArrayHelper::map(Tags::find()->all(), 'id', 'title');
        $DOM = '';
        $last_key = end(array_keys($authors_list));
        foreach($authors_list as $id => $name){
            if($last_key == $id){
                $selected = 'selected';
            }else{
                $selected = '';
            }
            $DOM.= "<option value=\"$id\" $selected>$name</option>\r\n";
        }
        return $DOM;
    }
}
