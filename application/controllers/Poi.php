<?php
class Poi extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Poi_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['pois'] = $this->Poi_model->get_poi();
        $data['title'] = 'Poi archives';
 
        $this->load->view('templates/header', $data);
        $this->load->view('poi/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['poi_item'] = $this->Poi_model->get_poi($slug);
        
        if (empty($data['poi_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['poi_item']['title'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('poi/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a poi item';
 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('poi/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->Poi_model->set_poi();
            $this->load->view('templates/header', $data);
            $this->load->view('poi/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit a poi item';        
        $data['poi_item'] = $this->Poi_model->get_poi_by_id($id);
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('poi/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->Poi_model->set_poi($id);
            //$this->load->view('poi/success');
            redirect( base_url() . 'index.php/poi');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $poi_item = $this->Poi_model->get_poi_by_id($id);
        
        $this->Poi_model->delete_poi($id);        
        redirect( base_url() . 'index.php/poi');        
    }
}
