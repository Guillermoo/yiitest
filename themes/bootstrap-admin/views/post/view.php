<?php
/*$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);*/

$this->menu=array(
	array('label' => 'Operations'),
	array('label'=>'List Post','url'=>array('index')),
	array('label'=>'Create Post','url'=>array('create')),
	array('label'=>'Update Post','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Post','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post','url'=>array('admin')),
);
?>


<h1>View Post admin!!!#<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'tags',
		//'status',
		array('name'=>'status', 
			'label'=>'Status',
			'value'=>$model->getStatusOptions($model->status),
			),
		array('label'=>'Update Status',
			'type'=>'raw',
			'value'=>CHtml::link($model->status==1?'Desactivate':'Activate',
                 array('change','id'=>$model->id)),
			),
		'author.username',
		'create_time',
		'update_time',
	),
)); ?>
