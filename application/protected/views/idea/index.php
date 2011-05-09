<?php
$this->breadcrumbs=array(
	'Ideas',
);

$this->menu=array(
	array('label'=>'Create Idea', 'url'=>array('create')),
	array('label'=>'Manage Idea', 'url'=>array('admin')),
);
?>

<h1>Ideas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
