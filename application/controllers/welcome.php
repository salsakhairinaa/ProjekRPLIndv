<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->data['hasil']=$this->model_alumni->getAlumni('data_alumni');
		$this->load->view('welcome_message',$this->data);
	}
	public function form_input(){
		$this->load->view('form-input');
	}
	public function insert(){
		$nama=$_POST['nama'];
		$angkatan=$_POST['angkatan'];
		$alamat=$_POST['alamat'];
		$data=array('nama_alumni' => $nama, 'angkatan' => $angkatan, 'alamat_alumni' => $alamat);
		$tambah = $this->model_alumni->inputData('data_alumni',$data);
		if($tambah>0){
			redirect('welcome/index');
		} else{
			echo 'Fail :(';
		}
		}
		public function delete($id){
			$delete = $this->model_alumni->hapusData('data_alumni',$id);
		if($delete>0){
			redirect('welcome/index');
		} else{
			echo 'Fail :(';
		
		}
		
		}
		public function form_edit($id){
		$this->data['dataEdit'] = $this->model_alumni->dataEdit('data_alumni',$id);
		$this->load->view('form-edit',$this->data);
	}
	public function update($id){
		$nama=$_POST['nama'];
		$angkatan=$_POST['angkatan'];
		$alamat=$_POST['alamat'];
		$data=array('nama_alumni' => $nama, 'angkatan' => $angkatan, 'alamat_alumni' => $alamat);
		$edit = $this->model_alumni->editData('data_alumni',$data,$id);
		if($edit > 0){
			redirect('welcome/index');
		} else{
			echo 'Fail :(';
		}
	}
}
