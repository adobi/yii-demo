<?php
$this->breadcrumbs=array(
	'Ideas'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Idea', 'url'=>array('index')),
	array('label'=>'Create Idea', 'url'=>array('create')),
	array('label'=>'Update Idea', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Idea', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Idea', 'url'=>array('admin')),
	array('label'=>'Add Comment', 'url'=>array('comment/create', 'idea_id'=>$model->id))
);
?>

<h1>View Idea #<?php echo $model->id; ?></h1>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'idea',
		array('name'=>'user_id', 'value'=>CHtml::encode($model->user->username)),
		'created',
	),
)); ?>


<br />
<h1>Idea comments</h1>

<?php $this->widget('zii.widgets.CListView', array('dataProvider'=> $commentDataProvider, 'itemView'=> '/comment/_view')); ?>