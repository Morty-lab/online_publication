<?php


class Article_Submission_model extends CI_Model
{
    // Model constructor
    

    // Method to fetch users based on a condition
    public function get_article_submissions()
    {
        $this->db->get("article_submission");

        return $this->db->get('article_submission')->result_array(); // Assuming 'users' is your table name
    }

	public function add_article_submission($data)
	{
		// Check if the $data array is not empty
		if (!empty($data)) {
			// Insert the data into the 'articles' table
			if ($this->db->insert('article_submission', $data)) {
				// Return the ID of the newly inserted article
				return $this->db->insert_id();
			} else {
				// Return false if the insert operation failed
				return false;
			}
		} else {
			// Return a message if no data was provided
			return 'No data provided to insert';
		}
	}
	

	public function getArticleSubmissionById($id){
		$this->db->where('submission_id', $id);
    $query = $this->db->get('article_submission');
    
    // Check if any results were returned
    if ($query->num_rows() > 0) {
        // Fetch the first result as an associative array
        $row = $query->row_array();
        
        // Convert the row array to an associative array
        $article = (array)$row;
        
        return $article;
    } else {
        // Return an empty array if no results were found
        return array();
    }
		
	}

	public function publishArticle($id){
		$this->db->where('submission_id', $id);
		return $this->db->update('article_submission', array('published' => 1));

	}
}
