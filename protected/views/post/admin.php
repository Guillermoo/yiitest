<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Post','url'=>array('index')),
	array('label'=>'Create Post','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('post-grid', {
		data: $(this).serialize()
		});
		return false;
	});
	");
	?>

	<h1>Manage Posts</h1>

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
	'id'=>'post-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>'condensed',
	//'ajaxUpdate'=>'false',
	'columns'=>array(
		//'id',
		'title',
		'content',
		//'tags',
		array( 'name'=>'status', 
				'value'=>'Post::getStatusOptions($data->status)',
				'filter'=>Post::getStatusOptions(),
		),
		//'status',
		//'user.username',
		array( 'name'=>'user_search',
				'header'=>'Author', 
				'type'=>'raw',
				'value'=>'$data->author->username',
				'filter'=>Post::getUserList(),
		),
		/*'update_time',*/
		/*array('name'=>'user_search','value'=>'$data->user->username'),*/
		array(
			'header' => 'Options',
			'class'=>'bootstrap.widgets.BootButtonColumn',
			//'htmlOptions'=>array('style'=>'width: 60px'),
		),
		
	),
)); ?>
