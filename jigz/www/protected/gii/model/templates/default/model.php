<?php
/**
 * This is the template for generating the model class of a specified table.
 * - $this: the ModelCode object
 * - $tableName: the table name for this class (prefix is already removed if necessary)
 * - $modelClass: the model class name
 * - $columns: list of table columns (name=>CDbColumnSchema)
 * - $labels: list of attribute labels (name=>label)
 * - $rules: list of validation rules
 * - $relations: list of relations (name=>relation declaration)
 */
?>
<?php echo "<?php\n"; ?>

/**
 * This is the model class for table "<?php echo $tableName; ?>".
 *
 * The followings are the available columns in table '<?php echo $tableName; ?>':
<?php foreach($columns as $column): ?>
 * @property <?php echo $column->type.' $'.$column->name."\n"; ?>
<?php endforeach; ?>
 */
class <?php echo $modelClass.$this->ci_model_ext; ?> extends <?php echo $this->ci_base_model."\n"; ?>
{
	/**
     * This model's default database table. Automatically
     * guessed by pluralising the model name.
    */
    protected $_table = '<?php echo $tableName; ?>';

    
<?php if($this->softDelete):?>
	/**
     * Soft Delete
    */
    protected $soft_delete = TRUE;
    protected $soft_delete_key = '<?php echo $this->softDeleteField; ?>';
<?php endif; ?>
	
	/**
	 * @return array relational rules.
	*/
<?php foreach($relations as $name=>$relation): ?>
	public $<?php echo "$name => $relation"; ?>;
<?php endforeach; ?>
	

	/**
	 * Validation rules
	*/
    public $validate = array(
<?php foreach($rules as $field => $rule): ?>
        array( 'field' => '<?php echo $field; ?>', 
			   'label' => '<?php echo $rule['label']; ?>',
			   'rules' => '<?php echo implode('|',$rule['rules']); ?>' ),
<?php endforeach; ?>
	);
}
