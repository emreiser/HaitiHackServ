<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

        

        <div class="row">
                <?php echo $form->label($model,'fullname'); ?>
                <?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>150)); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'username'); ?>
                <?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'email'); ?>
                <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'level'); ?>
                <?php echo $form->textField($model,'level',array('size'=>45,'maxlength'=>45)); ?>
        </div>

        <div class="row buttons">
                <?php echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
