<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List User','url'=>array('index'), 'icon'=>'list'),
	array('label'=>'Create User','url'=>array('create'), 'icon'=>'file'),
	array('label'=>'Update User','url'=>array('update','id'=>$model->id), 'icon'=>'pencil'),
	array('label'=>'Delete User','url'=>'#','icon'=>'trash','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User','url'=>array('admin'), 'icon'=>'wrench'),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>
