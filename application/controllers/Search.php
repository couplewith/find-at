<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
	    //	$this->load->view('welcome_message');
                require_once(APPPATH. 'libraries/phpGrid_Lite/conf.php'); // APPPATH is path to application folder
                $data['phpgrid'] = new C_DataGrid("SELECT * FROM es_poi_main", "pid", "regin_gid"); //$this->ci_phpgrid->example_method(3);

                $this->load->view('show_poi_main',$data);
	}
}
