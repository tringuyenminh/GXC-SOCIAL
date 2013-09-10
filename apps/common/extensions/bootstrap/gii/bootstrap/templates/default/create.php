<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Create',
);\n";
?>

$this->menu=array(
	array('label'=>'Create <?php echo $this->modelClass; ?>','url'=>array('create'),'active'=>true),
	array('label'=>'Manage <?php echo $this->modelClass; ?>(s)','url'=>array('admin')),
);
?>

<h1>Create <?php echo $this->modelClass; ?></h1>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
