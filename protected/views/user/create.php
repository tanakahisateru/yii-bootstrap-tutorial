<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List User','url'=>array('index'), 'icon'=>'list'),
	array('label'=>'Manage User','url'=>array('admin'), 'icon'=>'wrench'),
);
?>

<h1>Create User</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>