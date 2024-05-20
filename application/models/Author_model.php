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

	public function add_author($data)
	{
		// Check if the $data array is not empty
		if (!empty($data)) {
			// Attempt to insert the author into the 'authors' table
			if ($this->db->insert('authors', $data)) {
				// On successful insertion, return the ID of the newly inserted author
				return $this->db->insert_id();
			} else {
				// Return false if the insert operation fails
				return false;
			}
		} else {
			// Return a message if no data was provided
			return 'No data provided to insert';
		}
	}

	public function get_author_by_id($id)
	{
		// Check if the ID exists
		if ($id != null && $id != '') {
			// Prepare the selection query
			$this->db->where('auid', $id); // Assuming 'id' is the primary key of your authors table
			// Execute the query
			$query = $this->db->get('authors');
			// Check if any results were returned
			if ($query->num_rows() > 0) {
				// Fetch the first result as an associative array
				$row = $query->row_array();
				// Return the author data
				return $row;
			}
		}
		// Return an empty array if no results were found
		return array();
	}


	public function update_author($id, $data)
	{
		// Check if the ID exists
		if ($id != null && $id != '') {
			// Prepare the update query
			$this->db->where('auid', $id); // Assuming 'id' is the primary key of your authors table
			// Execute the update
			if ($this->db->update('authors', $data)) {
				// Return true if the update was successful
				return true;
			}
		}
		// Return false if the ID does not exist or the update failed
		return false;
	}

	public function delete_author($id)
	{
		// Check if the ID exists
		if ($id != null && $id != '') {
			// Prepare the deletion query
			$this->db->where('auid', $id); // Assuming 'id' is the primary key of your authors table
			// Execute the deletion
			if ($this->db->delete('authors')) {
				// Return true if the deletion was successful
				return true;
			}
		}
		// Return false if the ID does not exist or the deletion failed
		return false;
	}

}
