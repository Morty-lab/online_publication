<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class UserController extends CI_Controller
{



	public function view($page = "users")
	{
		if (!file_exists(APPPATH . 'views/user/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['users'] = $this->user_model->get_users();
		$data['authors'] = $this->author_model->get_authors();

		$data['title'] = ucfirst($page); // Capitalize the first letter
		//Load Page sections header,Main, Footer
		$this->load->view('templates/userHeader', $data);
		$this->load->view('user/' . $page, $data);
		// $this->load->view('modals/authModal',$data);
		$this->load->view('templates/userFooter', $data);
	}

	public function create($page = "adduser")
	{


		$this->load->view('templates/userHeader');
		$this->load->view('user/' . $page);
		// $this->load->view('modals/authModal',$data);
		$this->load->view('templates/userFooter');
	}

	public function add()
	{
		// Retrieve form data
		$completeName = $this->input->post('completeName');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		// Prepare data array
		$data = array(
			'complete_name' => $completeName,
			'email' => $email,
			'pword' => $password,
		);

		// $data = array(
		// 	'complete_name' => "John Doe",
		// 	'email' => "z5fDy@example.com",
		// 	'pword' => "password1",
		// );

		// Call the model's add_user method
		$this->user_model->add_user($data);
		redirect('user');
	}

	public function edit(){
		$id = $this->input->get('id');
		$data['user'] = $this->user_model->get_user_by_id($id);
		
		$this->load->view('templates/userHeader');
		$this->load->view('user/edituser', $data);
		// $this->load->view('modals/authModal',$data);
		$this->load->view('templates/userFooter');
	}

	public function update()
	{
		// Retrieve form data
		$userId = $this->input->get('id');
		$completeName = $this->input->post('completeName');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		// Prepare data array
		$data = array(
			'complete_name' => $completeName,
			'email' => $email,
			'pword' => $password,
		);

		// Assuming you have the user's ID stored in a session or passed as a hidden field in the form

		// Call the model's update_user method
		$this->user_model->update_user($userId, $data);

		// Redirect to the account page or another page of your choice
		redirect('user');
	}


	public function delete($id)
	{
		// Call the model's delete_user method
		$this->user_model->delete_user($id);

		// Redirect to the users list
		redirect('user');
	}


}
