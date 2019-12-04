<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Entry1_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data) 
    {
        $data = array(
            'items' => $data['items'],
            'descriptions' => $data['descriptions'],
         );
         
         $this->db->insert('entry1', $data);
    }

    public function update($id, $data) 
    {
        $data = array(
            'items' => $data['items'],
            'descriptions' => $data['descriptions'],
         );
         
         $this->db->where('id', $id);
         $this->db->update('entry1', $data);
    }

    public function delete($id) 
    {
        $this->db->where('id', $id);
        $this->db->delete('entry1');
    }

    public function get_row_by_id($id) 
    {
        $this->db->where('id', $id);
        return $this->db->get('entry1')->row();
    }

    public function delete_all() 
    {
        $this->db->empty_table('entry1');
    }
}
