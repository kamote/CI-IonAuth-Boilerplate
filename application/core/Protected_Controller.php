<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
abstract class Protected_Controller extends MY_Controller{
    
    public function __construct() {
		parent::__construct();
        $this->authInit();
		$this->groupInit();
    }
	
	function authInit() {
		$this->load->library('ion_auth');
		$this->authRedirect();
	}
	
	function groupInit() {
		//if($this->ion_auth->in_group('patient')) $this->memberAuthInit();
	}
	
	function authRedirect() {
		if(!isset($this->publicAccess) || $this->publicAccess === false) {
			if (!$this->ion_auth->logged_in())
			{
				//redirect them to the login page
				redirect('auth/login', 'refresh');
			}
		}	
	}
}