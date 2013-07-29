<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Applicant_model extends MY_Model {

    public $_table = 'applicant';

    public $validate = array(
        array( 'field' => 'first_name', 
               'label' => 'First Name',
               'rules' => 'required' )
    );

    function __construct() {
    	parent::__construct();
    }
}