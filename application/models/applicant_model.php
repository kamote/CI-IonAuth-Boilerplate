<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Applicant_model extends MY_Model {

    public $_table = 'applicant';

    public $validate = array(
        array( 'field' => 'first_name', 
               'label' => 'First Name',
               'rules' => 'required' )
    );

    public $protected_attributes = array('id');
    
    protected $soft_delete = TRUE;
    protected $return_type = 'array';

    function __construct() {
    	parent::__construct();
    }
}