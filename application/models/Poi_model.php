<?php
class Poi_model extends CI_Model {
 
    private $tab_poi = 'es_poi_main';
    public function __construct()
    {
        $this->load->database();
    }
    
    
    // ##  gat all data  ##  //
    public function get_poi($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get($this->tab_poi);
            return $query->result_array();
        }
 
        $query = $this->db->get_where($this->tab_poi, array('slug'=> $slug) );
        return $query->row_array();
    }
    
    // ##  view data  ##  //
    public function get_poi_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get($this->tab_poi);
            return $query->result_array();
        }
 
        $query = $this->db->get_where($this->tab_poi, array('pid' => $id));
        return $query->row_array();
    }

    // ##  insert or update ##  //
    public function set_poi($data_arr){

        $this->load->helper('url');
        /**
        $data = array (
            'pid'        => $data_arr['pid'],      
            'region_gid'  => $data_arr['region_gid'],
            'region_nm'   => $data_arr['region_name'],
            'region_sido' => $data_arr['region_sido'],
            'region_addr' => $data_arr['region_addr'],
            'poi_name'   => $data_arr['poi_name'],
            'poi_desc'   => $data_arr['poi_desc'],
            'poi_link'   => $data_arr['poi_link'],
            'map_type'   => $data_arr['map_type'],
            'map_id'     => $data_arr['map_id'],
            'map_level'  => $data_arr['map_level'],
            'geo_lat'    => $data_arr['geo_lat'],
            'geo_long'   => $data_arr['geo_long'],
            'reg_date'   => $data_arr['reg_date'],
            'status'     => $data_arr['status']
        );
        **/
        $data = $data_arr;

        // $slug = url_title($this->input->post('title'), 'dash', TRUE);
        if ( $data['pid'] == 0 ){
            $data = $this->security->xss_clean($data);
            return $this->db->insert($this->tab_poi, $data);
        }else{
            $data = $this->security->xss_clean($data);
            $this->db->where('pid', $data['pid']);
            return $this->db->update($this->tab_poi, $data);
        }
    }
    
    public function delete_poi($id)
    {
        $this->db->where('pid', $id);
        return $this->db->delete($this->tab_poi);
    }
}
