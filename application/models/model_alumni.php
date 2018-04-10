<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_alumni extends CI_Model {

	public function getAlumni($table_name)
	{
		$get_alumni=$this->db->get($table_name);
		return $get_alumni->result_array();
	}
	public function inputData($table_name,$data){
		$tambah=$this->db->insert($table_name,$data);
		return $tambah;
	}
	public function editData($table_name,$data,$id){
		$this->db->where('id_alumni',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	public function hapusData($table_name,$id){
		$this->db->where('id_alumni',$id);
		$delete = $this->db->delete($table_name);
		return $delete;
	}
	public function dataEdit($table_name,$id)
	{
		$this->db->where('id_alumni',$id);
		$get_alumni=$this->db->get($table_name);
		return $get_alumni->row();
	}
}
