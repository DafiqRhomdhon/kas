<?php
	class Kaskeluar extends CI_Controller{
		function Index(){
			$data['content']='kaskeluar';
			$this->load->view("template",$data);
		}
		function tambah(){
			$data['content']='kaskeluar_tambah';
			$this->load->view("template",$data);
		}
		function edit($id){
			$data['masuk']=$this->db->get_where('kasmasuk',['kode'=>$id])->row();
			$data['content']='kaskeluar_edit';
			$this->load->view("template",$data);
		}
		function simpan(){
			$kode=$this->input->post('kode');
			$keterangan=$this->input->post('keterangan');
			$tanggal=$this->input->post('tgl');
			$keluar=$this->input->post('keluar');
			$data=array(
					'Kode'=>$kode,
					'Keterangan'=>$keterangan,
					'Tgl'=>$tanggal,
					'Jenis'=>'Keluar',
					'Keluar'=>$keluar
			);
			if ($this->db->insert('kasmasuk',$data)) {
				redirect('kaskeluar');
			}else{
				redirect('kaskeluar/tambah');
			}
		}
		function update(){
			$kode=$this->input->post('kode');
			$keterangan=$this->input->post('keterangan');
			$tanggal=$this->input->post('tgl');
			$keluar=$this->input->post('keluar');
			$data=array(
					'Kode'=>$kode,
					'Keterangan'=>$keterangan,
					'Tgl'=>$tanggal,
					'Jenis'=>'Keluar',
					'Keluar'=>$keluar
			);
			$this->db->where('Kode',$kode);
			if ($this->db->update('kasmasuk',$data)) {
				redirect('kaskeluar');
			}else{
				redirect('kaskeluar/tambah');
			}
		}
		function hapus($kode){
			$this->db->delete('kasmasuk',['kode'=>$kode]);
			redirect('kaskeluar');
		}
	}
?>