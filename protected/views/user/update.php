<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List User','url'=>array('index'), 'icon'=>'list'),
	array('label'=>'Create User','url'=>array('create'), 'icon'=>'file'),
	array('label'=>'View User','url'=>array('view','id'=>$model->id), 'icon'=>'eye-open'),
	array('label'=>'Manage User','url'=>array('admin'), 'icon'=>'wrench'),
);
?>

<h1>Update User <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>