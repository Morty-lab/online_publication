<?php


class Author_model extends CI_Model
{
    // Model constructor
    

    // Method to fetch users based on a condition
    public function get_authors()
    {
        $this->db->get("authors");

        return $this->db->get('authors')->result_array(); // Assuming 'users' is your table name
    }

    public function add_article($data)
    {

        
        // if (!empty($data)) {
            
        //     if ($this->db->insert('users', $data)) {
                
        //         return $this->db->insert_id();
        //     } else {
            
        //         return false;
        //     }
        // } else {
            
        //     return 'No data provided to insert';
        // }
    }
}
