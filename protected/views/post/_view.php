<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="content">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuario->username); ?>
	<br />
        
       
        <b><?php echo CHtml::encode('Categorias'); ?>:</b>
        <?php   
            $cats= '';
            $vcat=$data->categories;
            foreach ($vcat as $cat) {
                $cats =$cats.$cat->nombre.', ';
                
            }
        ?>
	<?php echo CHtml::encode($cats); ?>
	<br />



</div>