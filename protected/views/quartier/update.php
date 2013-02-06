<?php
$this->breadcrumbs=array(
	'Quartiers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List Quartier', 'url'=>array('index')),
	array('label'=>'Create Quartier', 'url'=>array('create')),
	array('label'=>'View Quartier', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Quartier', 'url'=>array('admin')),
);
?>

<h1> Update Quartier #<?php echo $model->id; ?> </h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'quartier-form',
	'enableAjaxValidation'=>true,
)); 
echo $this->renderPartial('_form', array(
	'model'=>$model,
	'form' =>$form
	)); ?>

<div class="row buttons">
	<?php echo CHtml::submitButton(Yii::t('app', 'Update')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
