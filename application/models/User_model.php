<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }
    public function getTop()
    {
        $this->db->group_by('chapitre.id_ch');
        $this->db->select('souschapitre.*,chapitre.titre ,chapitre.	description,chapitre.image ');
        $this->db->from('souschapitre');
        $this->db->join('chapitre', 'chapitre.id_ch = souschapitre.id_ch');
        $data = $this->db->get();
        return $data->result();
    }
    public function getSous($id)
    {
        $this->db->select('souschapitre.*,chapitre.titre');
        $this->db->from('souschapitre');
        $this->db->join('chapitre', 'chapitre.id_ch = souschapitre.id_ch', 'LEFT');
        $this->db->where('souschapitre.id_ch', $id);
        $this->db->LIMIT(1);
        $data = $this->db->get();
        return $data->result();
    }
    public function getDat($id)
    {
        $this->db->select('souschapitre.*,chapitre.titre');
        $this->db->from('souschapitre');
        $this->db->join('chapitre', 'chapitre.id_ch = souschapitre.id_ch', 'LEFT');
        $this->db->where('souschapitre.id_ch', $id);
        $data = $this->db->get();
        return $data->row();
    }
    public function getChapitreSous($id)
    {
      
        $q = $this->db->query("select  c.titre , sc.*  from souschapitre sc join chapitre c on c.id_ch = sc.id_ch  ")->result();
        return $q;
    }
    public function User()
    {
        $this->db->select('quiz.*,chapitre.titre');
        $this->db->from('quiz');
        $this->db->join('chapitre', 'chapitre.id_ch = quiz.id_ch');
        $this->db->LIMIT(1);
        $data = $this->db->get();
        return $data->result();
    }
    public function question($id)
    {
        $q = $this->db->query("select  c.titre , sc.*  from quiz  sc join chapitre c on c.id_ch = sc.id_ch ")
            ->result();
        return $q;
    }
    public function update_status_model($id)
    {
        $this->db->where('id_ch', $id);
        $q= $this->db->update('souschapitre');
        return  $q;
    }
    public function update($id){
        $q = $this->db->update('souschapitre', ['status' => 1], ['id_ch  ' => $id]);
        return $q;
    }
 

}
