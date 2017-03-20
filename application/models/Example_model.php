<?php
class Example_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_example($slug = FALSE)
    {
        // $url="/data/webapp/drung_www/menu.json";
        $url="http://localhost/menu.json";
        $result = file_get_contents($url);
        $result = json_decode($result, true);
        if ( json_last_error() > 0 )
        {
           $return =  array(  "links" , "/error.html" );
        }
        if ($slug === FALSE)
        {
            return $result;
        }
        return array('slug' => $result );
    }
    
    public function get_example_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('example');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('example', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_example($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );
        
        if ($id == 0) {
            $data = $this->security->xss_clean($data);
            return $this->db->insert('example', $data);
        } else {
            $data = $this->security->xss_clean($data);
            $this->db->where('id', $id);
            return $this->db->update('example', $data);
        }
    }
    
    public function delete_example($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('example');
    }
}
