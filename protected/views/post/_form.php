<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'post-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textAreaRow($model,'content',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'tags',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php //echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>
	<?php echo $form->labelEx($model,'Status');?>
	<?php echo $form->dropDownList($model,'status',$model->getStatusOptions(),array('class'=>'span2')); ?>
	
	<?php echo $form->labelEx($model,'Author');?>
	<?php echo $form->dropDownList($model,'author_id', $model->getUserList(),array('class'=>'span2')); ?>

	<?php //secho $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>
	
	<?php //echo $form->labelEx($model,'Create time');?>
	<?php 
		/*$this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
			'model'=>$model,
			'attribute'=>'create_time',
			'language' => 'en',
			'options' => array(
				'dateFormat' => 'yy-mm-dd',
				'contrainInput' =>'false',
				'duration' => 'fast',
				'showAnim' => 'slide',
				),
			)
		);*/
	?>    

	<?php //echo $form->labelEx($model,'Update time');?>
	<?php 
		/*$this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
			'model'=>$model,
			'attribute'=>'update_time',
			'language' => 'en',
			'options' => array(
				'dateFormat' => 'yy-mm-dd',
				'contrainInput' =>'false',
				'duration' => 'fast',
				'showAnim' => 'slide',
				),
			)
		);*/
	?>    

	<?php //echo $form->textFieldRow($model,'update_time',array('class'=>'span5')); ?>
	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
