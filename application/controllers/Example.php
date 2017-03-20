<?php
class Example extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('example_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['example'] = $this->example_model->get_example();
        $data['title'] = 'Example archive';
 
        $this->load->view('templates/header', $data);
        $this->load->view('example/index', $data);
        $this->load->view('templates/footer');
    }
 
}
