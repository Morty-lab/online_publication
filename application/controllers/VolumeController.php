<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


class VolumeController extends CI_Controller
{



    public function view()
    {
        if (!file_exists(APPPATH . 'views/volumes/volumes.php')) {
			
            show_404();
        }

        $data['volumes'] = $this->volume_model->get_volumes();
		$data['articles'] = $this->article_model->get_articles();

        //Load Page sections header,Main, Footer
        $this->load->view('templates/userHeader', $data);
        $this->load->view('volumes/volumes' , $data);
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
