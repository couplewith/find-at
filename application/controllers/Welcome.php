<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    	$this->load->view('welcome_message');
	}
	public function poi_main()
	{
                require_once(APPPATH. 'libraries/phpGrid_Lite/conf.php'); // APPPATH is path to application folder
                $data['phpgrid'] = new C_DataGrid("SELECT * FROM es_poi_main", "pid", "es_poi_main"); //$this->ci_phpgrid->example_method(3);

                $this->load->view('show_poi_main',$data);
	}
	public function region()
	{
                require_once(APPPATH. 'libraries/phpGrid_Lite/conf.php'); // APPPATH is path to application folder
                $data['phpgrid'] = new C_DataGrid("SELECT * FROM es_region", "gid", "es_region"); //$this->ci_phpgrid->example_method(3);

                $this->load->view('show_region',$data);
	}
}
