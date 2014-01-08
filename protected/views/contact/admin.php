<?php
$this->breadcrumbs=array(
	'Contacts'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Manage'),
);

$this->menu=array(
		//array('label'=>Yii::t('app',
			//	'List Contact'), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create Contact'),
				'url'=>array('create')),
			);

		Yii::app()->clientScript->registerScript('search', "
			$('.search-button').click(function(){
				$('.search-form').toggle();
				return false;
				});
			$('.search-form form').submit(function(){
				$.fn.yiiGridView.update('contact-grid', {
data: $(this).serialize()
});
				return false;
				});
			");
		?>

<h2> All&nbsp;Contacts</h2>

<?php //echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<?php $pageSize=Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']); // set controller and model for that before
    $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'contact-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'id',
		'name',
		'phone',
		'email',
		//'organisation',
		array(
			'class'=>'CButtonColumn',
			'header'=>CHtml::dropDownList('pageSize',$pageSize,array(10=>10,20=>20,50=>50,100=>100),array(
                                  'onchange'=>"$.fn.yiiGridView.update('contact-grid',{ data:{pageSize: $(this).val() }})",
                    )),
					'template'=>'{view}',
		),
	),
)); ?>
