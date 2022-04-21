<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class quizmodel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get()
	{
		$this->db->group_by('quiz.id_quiz ');
        $this->db->select('quiz.*,chapitre.titre');
        $this->db->from('quiz');
        $this->db->join('chapitre', 'chapitre.id_ch = quiz.id_ch', 'LEFT');
        $data = $this->db->get();
        return $data->result();
	}
	public function GetQuiz()
	{
		$q = $this->db->get('quiz');
		return $q->result();
	}
	function createData()
	{

		$info = array(
			'	question' => $this->input->post('Question'),
			'reponse' => $this->input->post('reponse'),
			'correction' => $this->input->post('correction'),
			'id_ch' => $this->input->post('chapitre'),
		);
		$this->db->insert('quiz', $info);
	}

	public function getAllData()
    {
		$this->db->group_by('quiz.id_quiz ');
        $this->db->select('quiz.*,chapitre.titre');
        $this->db->from('quiz');
        $this->db->join('chapitre', 'chapitre.id_ch = quiz.id_ch', 'LEFT');
        $data = $this->db->get();
        return $data->result();
    }

    //////////////////////////Edit///////////////
    public function getData($id)
    {
        $query = $this->db->get_where('quiz', ['id_quiz  ' => $id]);
        return $query->row();
    }
    public function updateData($id)
    {
        $info = array(
			'question' => $this->input->post('Question'),
			'reponse' => $this->input->post('reponse'),
			'correction' => $this->input->post('Correction'),
			'id_ch' => $this->input->post('chapitre'),
        );
        $this->db->where('	id_quiz  ', $id);
        $this->db->update('quiz', $info);
    }
    //////////////////////////////DELETE///////////////////
    public function deleteData($id)
    {
        $this->db->where('id_quiz  ', $id);
        $this->db->delete('quiz');
    }
}
