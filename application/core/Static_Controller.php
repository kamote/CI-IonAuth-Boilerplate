<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
abstract class Static_Controller extends MY_Controller{
    
    public function __construct() {
		parent::__construct();
        
        $this->publicAccess = true;
    }
}