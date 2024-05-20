<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


class AuthorController extends CI_Controller
{



    public function view($page= 'authors')
    {
        if (!file_exists(APPPATH . 'views/user/' . $page . '.php')) {
			
            show_404();
        }

        $data['authors'] = $this->author_model->get_authors();

        $data['title'] = ucfirst($page); // Capitalize the first letter
        //Load Page sections header,Main, Footer
        $this->load->view('templates/userHeader', $data);
        $this->load->view('user/' . $page, $data);
        // $this->load->view('modals/authModal',$data);
        $this->load->view('templates/footer', $data);
    }

    public function add($data)
    {
        // $data = array(
        //     'complete_name' => 'John Dy',
        //     'email' => 'john.doe@example.com',
        //     'password' => 'password1',
        // );
    
        // // Call the model's add_user method
        // $this->user_model->add_user($data);
        // redirect('user');
    }

}
