<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
abstract class MY_Controller extends CI_Controller{

	var $layoutVars = array();
	
    var $publicAccess = false; 
	
    public function __construct() {
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('text');
		$this->load->library('form_validation');
		
		if(!isset($this->baseLayout)) $this->baseLayout = 'default';
		
        $this->set_title('Boiler Plate', 'Blah Blah');
	}
	
	public function render($sections = array(), $template_name = null, $return = false) {
       
		if($this->input->is_ajax_request()) {
			$this->baseLayout = 'ajax';
		}
		
		if(!isset($template_name) && isset($this->baseLayout)) $template_name = $this->baseLayout;
		$sections = array_merge($this->layoutVars, $sections);
        
		return $this->load->view('layouts/'.$template_name, $sections, $return);
	}
	
    public function set_title($title, $short_title = null) {
        $this->title = $title;
        $this->short_title = $title;
        if($short_title != null) {
            $this->short_title = $short_title;
        }
    }
    public function add_css($css, $no_cache=false) {
        if($no_cache) {
            $this->additional_css[] = $css.".css?".time();
        } else {
            $this->additional_css[] = $css.".css";
        }
    }
    public function add_js($js, $cache=true) {
        if($cache) {
            $this->additional_js[] = $js.".js";
        } else {
            $this->additional_js[] = $js.".js?".time();
        }
    }
    
	function postRedirect($uri = null) {
		
		if($this->input->post('__redirect_backto')) {
			redirect($this->input->post('__redirect_backto'));
		} else {
			if(!empty($uri)) redirect($uri);
			
			redirect('/');
		}
		
	}
}