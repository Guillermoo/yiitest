<?php
$this->breadcrumbs=array(
	'Posts',
);

$this->menu=array(
	array('label' => 'Operations'),
	array('label'=>'Back','url'=> Yii::app()->user->getReturnUrl() ),
	array('label'=>'Create Post','url'=>array('create')),
	array('label'=>'Manage Post','url'=>array('admin')),
);
?>

<h1>Posts</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php //$this->Debug($dataProvider); ?>
