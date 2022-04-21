<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation'));
    $this->load->model('User_model');
  }
  public function index()
  {
 
    $data['query'] = $this->User_model->getTop();
    $this->load->view('user_view', $data);
  }
  public function fitch($id)
  {
    $query     = $this->User_model->getTop($id);
    $quiz      = $this->User_model->User();
    $questions = $this->User_model->getDat($id);
    $info_sc   = $this->User_model->getChapitreSous($id);
    $question  = $this->User_model->question($id);
    $this->load->view('quiz', [
      'query'     => $query,
      'info_sc'   => $info_sc,
      'quiz'      => $quiz,
      'questions' => $questions,
      'question' => $question,
    ]);
  }
  public function update_status()
  {
    $id = $this->input->post('edit_id');
    $data = $this->User_model->update($id);
    echo json_decode($data);
    // $this->input->post('id');
    // $id = $this->input->get('id');
    // $status=$this->input->get('status');
    /* 
    $data['id_ch'] = $this->input->post('edit_id');
    $data['status'] = $this->input->get(); 
    if ($this->User_model->update_status_model($data)) {
      $data = array('responce' => "success", 'message' => "Data update successfully");
    } else {
      $data = array('responce' => "error", 'message' => "failed");
    }
    echo json_encode($data);*/
  }


}
