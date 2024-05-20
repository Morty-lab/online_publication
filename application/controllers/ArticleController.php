<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class ArticleController extends CI_Controller
{



	public function view($page = 'articles')
	{
		if (!file_exists(APPPATH . 'views/articles/' . $page . '.php')) {

			show_404();
		}

		$data['articles'] = $this->article_model->get_articles();
		$data['volumes'] = $this->volume_model->get_volumes();
		$data['submission'] = $this->article_submission_model->get_article_submissions();


		$data['title'] = ucfirst($page); // Capitalize the first letter
		//Load Page sections header,Main, Footer
		$this->load->view('templates/userHeader', $data);
		$this->load->view('articles/' . $page, $data);
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

	public function create_article()
	{
		$data['volumes'] = $this->volume_model->get_volumes();

		$this->load->view('templates/userHeader');
		$this->load->view('articles/addSubmission', $data);
		$this->load->view('templates/footer');
	}

	public function submit_article()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'abstract' => $this->input->post('abstract'),
			'filename' => $this->input->post('filename'),
			'volumeid' => $this->input->post('volumeid'),
			'published' => 0
		);

		$this->article_submission_model->add_article_submission($data);
		redirect('articles');
	}

	public function publishArticle(){
		$id = $this->input->get('id');
		$article = $this->article_submission_model->getArticleSubmissionById($id);
		$this->article_submission_model->publishArticle($id);


		$data = array(
			'title' => $article['title'],
			'abstract' => $article['abstract'],
			'filename' =>$article['filename'],
			'volumeid' => $article['volumeid'],
		);

		

		// echo '<pre>'; print_r($article); echo '</pre>';

		$result = $this->article_model->add_article($data);

		// if ($result) {
		// 	The article was successfully added
		// 	echo 'Article added successfully with ID: ' . $result;
		// } else {
		// 	There was an error adding the article
		// 	echo 'Failed to add article';
		// }

		redirect('articles');

	}




}
