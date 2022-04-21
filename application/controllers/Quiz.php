<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quiz extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->model('quizmodel');
        $this->load->model('Chapitre_model');
    }
    public function index()
    {
        $data['chapitre'] = $this->Chapitre_model->get_info();
        $data['query'] = $this->quizmodel->get();
        $this->load->view('Quiz_view', $data);
    }
    public function Ajouter()
    {

        $this->quizmodel->createData();
        redirect("Quiz");
    }
    public function edit($id)
    {
        $data['chapitre'] = $this->Chapitre_model->get_info();
        $data['info'] = $this->quizmodel->getData($id);
        $this->load->view('EditQuiz', $data);
    }
    public function update($id)
    {
        $this->quizmodel->updateData($id);
        redirect("Quiz");
    }
    public function Supprimer($id)
    {
        $this->quizmodel->deleteData($id);
        redirect('Quiz');
    }
}
