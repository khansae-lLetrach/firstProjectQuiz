<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chapitre extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('Chapitre_model');
	}
    public function index()
    {
        $data["ajax"] = $this->Chapitre_model->get_info();
        $this->load->view('Chapitre_view',$data);
    }

    public function createC()
    {
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('titre', 'titre', 'required');
            $this->form_validation->set_rules('description', 'description', 'required');
            //$this->form_validation->set_rules('image', 'image', 'required'); 
            if ($this->form_validation->run() == FALSE) {
                $data = array('res' => 'error', 'message' => validation_errors());
            } else {
                $config['upload_path'] = './uploads/images/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '1000';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload("image")) {
                    $data = array('responce' => "error", 'message' =>
                    $this->upload->display_errors());
                } else {
                    $ajax_data = $this->input->post();
                    $ajax_data['image'] = $this->upload->data('file_name');
                    if ($this->Chapitre_model->insert_entry($ajax_data)) {
                        $data = array('res' => 'success', 'message' => 'Record added Successfully');
                    } else {
                        $data = array('res' => 'error', 'message' => 'Failed to add record');
                    }
                }
            }
            echo json_encode($data);
        } else {
            echo "No direct script access allowed";
        }
    }
    ////////////////////Aficher les infos (Ajax)/////////
    public function fitch()
    {
        $posts = $this->Chapitre_model->get_info();
        echo json_encode($posts);
    }
}
