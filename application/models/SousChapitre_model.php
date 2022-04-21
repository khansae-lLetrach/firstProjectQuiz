<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SousChapitre_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function get_sousChapitre()
    {

        $this->db->group_by('souschapitre.id_SousCh  ');
        $this->db->select('souschapitre.*,chapitre.titre');
        $this->db->from('souschapitre');
        $this->db->join('chapitre', 'chapitre.id_ch = souschapitre.id_ch', 'LEFT');
        $data = $this->db->get();
        return $data->result();

    }

    //////////////////////////INSERT//////////////
    function createData()
    {
        $info = array(
            'titreChapitre' => $this->input->post('titre'),
            'descriptionCh' => $this->input->post('description'),
            'id_ch' => $this->input->post('chapitre'),
        );
        $this->db->insert('souschapitre', $info);
    }
    public function getAllData()
    {
        $query = $this->db->query('SELECT * FROM souschapitre');
        return $query->result();
    }

    //////////////////////////Edit///////////////
    public function getData($id)
    {
        $query = $this->db->get_where('souschapitre', ['id_SousCh ' => $id]);
        return $query->row();
    }
    public function updateData($id)
    {
        $info = array(
            'titreChapitre' => $this->input->post('titre'),
            'descriptionCh' => $this->input->post('description'),
            'id_ch' => $this->input->post('chapitre'),
            'date_updated' =>date('Y-m-d'),

        );
        $this->db->where('	id_SousCh ', $id);
        $this->db->update('souschapitre', $info);
    }
    //////////////////////////////DELETE///////////////////
    public function deleteData($id)
    {
        $this->db->where('id_SousCh ', $id);
        $this->db->delete('souschapitre');
    }
}
