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

	public function edit()
	{
		$id = $this->input->get('id');
		$article = $this->article_model->get_article_by_id($id);
		$data['article'] = $article;
		$data['volumes'] = $this->volume_model->get_volumes();

		$this->load->view('templates/userHeader');
		$this->load->view('articles/editarticle', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id = $this->input->get('id');
		$data = array(
			'title' => $this->input->post('title'),
			'abstract' => $this->input->post('abstract'),
			'filename' => $this->input->post('filename'),
			'volumeid' => $this->input->post('volumeid'),
		);

		if ($this->article_model->update_article($id, $data)) {
			redirect('articles');
		} else {
			// Handle failure case
			redirect('articles/error');
		}
	}


	public function delete()
	{
		$id = $this->input->get('id');
		// Call the delete_article method from the Article_model
		$this->article_model->delete_article($id);


		// Redirect to the articles page or show a success message
		redirect('articles');


	}


	public function publishArticle()
	{
		$id = $this->input->get('id');
		$article = $this->article_submission_model->getArticleSubmissionById($id);
		$this->article_submission_model->publishArticle($id);


		$data = array(
			'title' => $article['title'],
			'abstract' => $article['abstract'],
			'filename' => $article['filename'],
			'volumeid' => $article['volumeid'],
		);


		$this->article_model->add_article($data);



		redirect('articles');

	}

	public function edit_submission(){
		$id = $this->input->get('id');
		$article = $this->article_submission_model->getArticleSubmissionById($id);
		$data['article'] = $article;
		$data['volumes'] = $this->volume_model->get_volumes();

		$this->load->view('templates/userHeader');
		$this->load->view('articles/editarticle', $data);
		$this->load->view('templates/footer');
	}

	public function update_submission()
	{
		$id = $this->input->get('id');
		$data = array(
			'title' => $this->input->post('title'),
			'abstract' => $this->input->post('abstract'),
			'filename' => $this->input->post('filename'),
			'volumeid' => $this->input->post('volumeid'),
			// Add other fields you wish to update
		);

		$this->article_submission_model->update_article_submission($id, $data);
		// Redirect or show success message
		redirect('articles');

	}

	public function delete_submission()
	{
		$id = $this->input->get('id');
		if ($this->article_submission_model->delete_article_submission($id)) {
			// Redirect or show success message
			redirect('some_success_page');
		} else {
			// Redirect or show error message
			redirect('some_error_page');
		}
	}






}
