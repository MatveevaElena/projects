<?php
/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $generator yii\gii\generators\crud\Generator */

echo $form->field($generator, 'moduleName')->textInput(['onkeyup' => 'formUpdate();']);
echo $form->field($generator, 'modelName')->textInput(['onkeyup' => 'formUpdate();']);

echo $form->field($generator, 'modelClass');
echo $form->field($generator, 'searchModelClass');
echo $form->field($generator, 'controllerClass');
echo $form->field($generator, 'viewPath');
echo $form->field($generator, 'baseControllerClass');
echo $form->field($generator, 'indexWidgetType')->dropDownList([
    'grid' => 'GridView',
    'list' => 'ListView',
]);
echo $form->field($generator, 'enableI18N')->checkbox();
echo $form->field($generator, 'enablePjax')->checkbox();
echo $form->field($generator, 'messageCategory');

?>

<script>
	function formUpdate() {
		var moduleName = $('#generator-modulename').val();
		var modelName = $('#generator-modelname').val();
		if(moduleName.length > 0 && modelName.length > 0) {
			$('#generator-modelclass').val('\\common\\modules\\' + moduleName + '\\models\\' + modelName);
			$('#generator-searchmodelclass').val('\\common\\modules\\' + moduleName + '\\models\\searches\\' + modelName + 'Search');
			$('#generator-controllerclass').val('\\common\\modules\\' + moduleName + '\\controllers\\' + modelName + 'Controller');
			$('#generator-viewpath').val('@common/modules/' + moduleName + '/views/' + modelName.toLowerCase());
		}
	}
</script>