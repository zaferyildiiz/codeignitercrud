<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
  }

  public function index()
  {
    $data['users']= $this->user_model->get_user();
    $this->load->view('layouts/header');
    $this->load->view('Main',$data);
    $this->load->view('layouts/footer');
  }

  public function add_user()
  {
     if($this->input->post('first_name')){
        $first_name = $this->input->post('first_name');
        $last_name  = $this->input->post('last_name');
        $birth_date = $this->input->post('birth_day');

        $this->load->library('form_validation');
    		$this->form_validation->set_rules('first_name', 'Username', 'required');
    		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
    		$this->form_validation->set_rules('birth_day', 'Date Of Birth', 'required');

    		if ($this->form_validation->run() == FALSE)
    		{
          $this->load->view('layouts/header');
    			$this->load->view('add_user');
          $this->load->view('layouts/footer');
    		}
    		else
    		{
    			 $data = [
             'first_name'=> $first_name,
             'last_name'=>$last_name,
             'birth_date'=> $birth_date
           ];
           $this->user_model->insert_user($data);
           redirect('/');
    		}
     }else{
       $this->load->view('layouts/header');
       $this->load->view('add_user');
       $this->load->view('layouts/footer');
     }
  }

  public function update_user($id)
  {
    if ($this->input->post('first_name')) {
      $first_name = $this->input->post('first_name');
      $last_name  = $this->input->post('last_name');
      $birth_date = $this->input->post('birth_day');

      $data = [
        'first_name'=> $first_name,
        'last_name'=>$last_name,
        'birth_date'=> $birth_date
      ];
      $update = $this->user_model->update_user($id,$data);
      if ($update) {
        redirect('/');
      }
    }else{
      $data['user'] = $this->user_model->select_user($id);
      $this->load->view('layouts/header');
      $this->load->view('update_user',$data);
      $this->load->view('layouts/footer');
    }
  }

  public function delete_user($id)
  {
    $delete = $this->user_model->delete_user($id);
     if ($delete) {
       redirect('/');
     }
  }
}
