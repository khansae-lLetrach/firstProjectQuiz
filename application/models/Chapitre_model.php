<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chapitre_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function get_info()
    {
        $q = $this->db->get('chapitre');
        return $q->result();
    }

    public function insert_entry($data)
    {
        $q =  $this->db->insert('chapitre', $data);
        return $q;
    }
}
