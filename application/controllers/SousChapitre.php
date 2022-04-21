<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SousChapitre extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->model('SousChapitre_model');
        $this->load->model('Chapitre_model');
    }
    public function index()
    {
        $data['chapitre']=$this->Chapitre_model->get_info();
        $data['query'] = $this->SousChapitre_model->get_sousChapitre();
        $this->load->view('SousChapitre_view', $data);
    }

    public function Ajouter()
    {
       
        $this->SousChapitre_model->createData();
       redirect("SousChapitre");
    }
    //////////////////////Updateeee//////////////
    public function edit($id)
    {
        $data['chapitre']=$this->Chapitre_model->get_info();
        $data['info'] = $this->SousChapitre_model->getData($id);
        $this->load->view('EditChapitre_view', $data);
    }
    public function update($id)
    {
        $this->SousChapitre_model->updateData($id);
        redirect("SousChapitre");
    }
    public function Supprimer($id)
    {
        $this->SousChapitre_model->deleteData($id);
        redirect('SousChapitre');
    }
}
