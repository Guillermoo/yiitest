<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);


$this->menu=array(
	array('label'=>'List User','url'=>array('index')),
	array('label'=>'Create User','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'username',
		'password',
		'email',
		'profile',
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
		),
		/*array(
			'class'=>'CLinkColumn',
			'header'=>'Email',
			'imageUrl'=>Yii::app()->baseUrl.'/images/email.png',
			'labelExpression'=>'$data->email',
			'urlExpression'=>'"mailto://".$data->email',
			'htmlOptions'=>array('style'=>'text-align:center'),
			),*/
	),

)); ?>
