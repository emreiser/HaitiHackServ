<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250)); ?>
<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
<?php echo $form->textField($model,'phone',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
			</div>


<label for="Organisation">Contact Organisation</label><?php 
					$this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'organisation0',
							'fields' => 'name',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							)
						); ?>
			