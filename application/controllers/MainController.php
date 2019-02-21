<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class MainController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}
	public function dashboard(){
		if(!$this->ion_auth->logged_in()){
			return redirect('auth/login');
		}
		$data['user'] = $this->ion_auth->user()->row();
		$user_id = $data['user']->id;
		$data['account'] = $this->accounts->fetch_account($user_id);
		$data['transaction'] = $this->transactions->fetch_transactions($user_id);
		return $this->load->view('dashboard/dashboard', $data);
	}

	public function profile(){
		if(!$this->ion_auth->logged_in()){
			return redirect('auth/login');
		}
		$data['user'] = $this->ion_auth->user()->row();
		return $this->load->view('dashboard/profile', $data);
	}
	public function view1(){
		if(!$this->ion_auth->logged_in()){
			return redirect('auth/login');
		}
		$data['user'] = $this->ion_auth->user()->row();
		return $this->load->view('dashboard/dashboard', $data);
	}

}
