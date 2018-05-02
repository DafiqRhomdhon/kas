<?php
	class Manajemenuser extends CI_Controller{
		function index(){
			$data['content']='manajemenuser';
			$this->load->view("template",$data);
		}
			function tambah(){
			$data['content']='manajemenuser_tambah';
			$this->load->view("template",$data);
		}
		function edit($id){
			$data['manajemenuser']=$this->db->get_where('user',['user_id'=>$id])->row();
			$data['content']='manajemenuser_edit';
			$this->load->view("template",$data);
		}
		function simpan(){
			$user=$this->input->post('user');
			$pass=$this->input->post('pass');
			$level=$this->input->post('level');
			$data=array(
					'user_nama'=>$user,
					'user_pass'=>$pass,
					'user_level'=>$level

			);
			if ($this->db->insert('user',$data)) {
				redirect('manajemenuser');
			}else{
				redirect('manajemenuser/tambah');
			}
		}
		function update(){
			$id=$this->input->post('id');
			$user=$this->input->post('user');
			$pass=$this->input->post('pass');
			$level=$this->input->post('level');
			$data=array(
					'user_nama'=>$user,
					'user_pass'=>$pass,
					'user_level'=>$level

			);
			$this->db->where('user_id',$id);
			if ($this->db->insert('user',$data)) {
				redirect('manajemenuser');
			}else{
				redirect('manajemenuser/tambah');
			}
		}
		function hapus($id){
			$this->db->delete('user',['user_id'=>$id]);
			redirect('manajemenuser');
		}
	}
?>