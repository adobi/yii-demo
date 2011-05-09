<?php
$this->breadcrumbs=array(
	'Ideas'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Idea', 'url'=>array('index')),
	array('label'=>'Create Idea', 'url'=>array('create')),
	array('label'=>'View Idea', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Idea', 'url'=>array('admin')),
);
?>

<h1>Update Idea <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>