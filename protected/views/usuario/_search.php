<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <?php echo $form->textFieldControlGroup($model, 'id', array('span' => 5)); ?>

    <?php echo $form->textFieldControlGroup($model, 'username', array('span' => 5, 'maxlength' => 100)); ?>

    <?php echo $form->textFieldControlGroup($model, 'email', array('span' => 5, 'maxlength' => 100)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton('Search', array('color' => TbHtml::BUTTON_COLOR_PRIMARY,)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->