<?php


class Volume_model extends CI_Model
{
    // Model constructor
    public function __construct()
    {
        // $this->load->database(); // Load the database library
    }

    // Method to fetch users based on a condition
    public function get_volumes()
    {
        $this->db->get("volume");
		$this->db->order_by('date_at', 'desc');

        return $this->db->get('volume')->result_array(); // Assuming 'users' is your table name
    }

    public function add_user($data)
    {

        
        if (!empty($data)) {
            
            if ($this->db->insert('users', $data)) {
                
                return $this->db->insert_id();
            } else {
            
                return false;
            }
        } else {
            
            return 'No data provided to insert';
        }
    }
}
