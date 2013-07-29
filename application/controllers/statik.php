<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statik extends Static_Controller {

	public function index()
	{
		echo 'alis ka dito statik controller';
	}
    
    public function apply() {
        if($this->input->post()) {
			//$this->form_validation->set_rules('username', 'Username', 'required|alpha_dash|is_unique[users.username]');
			if ($this->form_validation->run() == true) {
                10
                20
                
                $this->session->set_flashdata("success", "");
            } else {
                $this->session->set_flashdata("error", "There was problem updating your profile. Please try again.");
            }
        }
    }
}

/* End of file statik.php */
/* Location: ./application/controllers/statik.php */