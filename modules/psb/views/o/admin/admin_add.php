<?php
/**
 * Psb Registers (psb-registers)
 * @var $this AdminController
 * @var $model PsbRegisters
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2016 Ommu Platform (opensource.ommu.co)
 * @created date 27 April 2016, 12:23 WIB
 * @link https://github.com/ommu/PSB
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Psb Registers'=>array('manage'),
		'Create',
	);
?>

<?php //begin.Messages ?>
<?php
if(Yii::app()->user->hasFlash('success'))
	echo Utility::flashSuccess(Yii::app()->user->getFlash('success'));
?>
<?php //end.Messages ?>

<div class="form">
	<?php echo $this->renderPartial('_form', array(
		'batch'=>$batch,
		'setting'=>$setting,
		'model'=>$model,
		'school'=>$school,
		'author'=>$author,
	)); ?>
</div>
