<?php
$this->breadcrumbs=array(
	'Ideas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Idea', 'url'=>array('index')),
	array('label'=>'Manage Idea', 'url'=>array('admin')),
);
?>

<h1>Create Idea</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>