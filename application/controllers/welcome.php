<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Static_Controller {
	
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$sdata = array();
		$data['content'] = $this->load->view(__FUNCTION__, $sdata, true);
        $this->render($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */