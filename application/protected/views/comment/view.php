<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Comment', 'url'=>array('index', 'idea_id'=>$model->idea->id)),
	array('label'=>'Create Comment', 'url'=>array('create', 'idea_id'=>$model->idea->id)),
	array('label'=>'Update Comment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Comment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comment', 'url'=>array('admin', 'idea_id'=>$model->idea->id)),
);
?>

<h1>View Comment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'created',
		'comment',
		array('name'=>'user_id', 'value'=>CHtml::encode($model->user->username)),		
		array('name'=>'idea_id', 'value'=>CHtml::encode($model->idea->title)),
	),
)); ?>
