<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля помеченные <span class="required">*</span> заполнить обязательно.</p>

	<?php echo $form->errorSummary($model); ?>
<table>
	<tr>
		<td>
			<div class="row">
				<?php echo $form->labelEx($model,'login'); ?>
				<?php echo $form->textField($model,'login',array('size'=>12,'maxlength'=>12)); ?>
				<?php echo $form->error($model,'login'); ?>
			</div>
		</td>
		<td>
			<div class="row">
				<?php echo $form->labelEx($model,'passw'); ?>
				<?php echo $form->textField($model,'passw',array('size'=>32,'maxlength'=>32)); ?>
				<?php echo $form->error($model,'passw'); ?>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="row">
				<?php echo $form->labelEx($model,'name'); ?>
				<?php echo $form->textField($model,'name',array('size'=>12,'maxlength'=>12)); ?>
				<?php echo $form->error($model,'name'); ?>
			</div>
		</td>
		<td>
			<div class="row">
				<?php echo $form->labelEx($model,'phone'); ?>
				<?php
					$this->widget('CMaskedTextField', array(
					'model' => $model,
					'attribute' => 'phone',
					'mask' => '(099)999-99-99',
					'htmlOptions' => array('size' => 12)
					));
				?>
				<?php echo $form->error($model,'phone'); ?>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="row">
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email',array('size'=>24,'maxlength'=>24)); ?>
				<?php echo $form->error($model,'email'); ?>
			</div>
		</td>
		<td></td>
	</tr>
	<tr>
		<td>
			<div class="row buttons">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
			</div>
		</td>
		<td></td>
	</tr>
</table>
	
<?php $this->endWidget(); ?>
</div><!-- form -->