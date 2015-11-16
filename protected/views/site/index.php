<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<h1> Problema do troco </h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'coins-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Troco'); ?>
		<?php echo $form->textField($model,'change'); ?>
		<?php echo $form->error($model,'change'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Moedas ( ex: 1,2,5,10 )'); ?>
		<?php echo $form->textField($model,'coins'); ?>
		<?php echo $form->error($model,'coins'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Calcular'); ?>
	</div>


<?php $this->endWidget(); ?>
</div>

