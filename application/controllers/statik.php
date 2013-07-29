<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statik extends Static_Controller {

	public function index()
	{
		echo 'alis ka dito statik controller';
	}
    
    public function apply() {
        $sdata = array();
        $data['content'] = $this->load->view('applicant/'.__FUNCTION__, $sdata, true);
        $this->render($data);
    }
}

/* End of file statik.php */
/* Location: ./application/controllers/statik.php */