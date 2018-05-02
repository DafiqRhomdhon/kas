<?php
	class Kasmasuk extends CI_Controller{
		function Index(){
			$data['content']='kasmasuk';
			$this->load->view("template",$data);
		}
		function tambah(){
			$data['content']='kasmasuk_tambah';
			$this->load->view("template",$data);
		}
		function edit($id){
			$data['masuk']=$this->db->get_where('kasmasuk',['kode'=>$id])->row();
			$data['content']='kasmasuk_edit';
			$this->load->view("template",$data);
		}
		function simpan(){
			$kode=$this->input->post('kode');
			$keterangan=$this->input->post('keterangan');
			$tanggal=$this->input->post('tgl');
			$jumlah=$this->input->post('jumlah');
			$data=array(
					'Kode'=>$kode,
					'Keterangan'=>$keterangan,
					'Tgl'=>$tanggal,
					'Jumlah'=>$jumlah,
					'Jenis'=>'Masuk'
			);
			if ($this->db->insert('kasmasuk',$data)) {
				redirect('kasmasuk');
			}else{
				redirect('kasmasuk/tambah');
			}
		}
		function update(){
			$kode=$this->input->post('kode');
			$keterangan=$this->input->post('keterangan');
			$tanggal=$this->input->post('tgl');
			$jumlah=$this->input->post('jumlah');
			$data=array(
					'Kode'=>$kode,
					'Keterangan'=>$keterangan,
					'Tgl'=>$tanggal,
					'Jumlah'=>$jumlah,
					'Jenis'=>'Masuk'
			);
			$this->db->where('Kode',$kode);
			if ($this->db->update('kasmasuk',$data)) {
				redirect('kasmasuk');
			}else{
				redirect('kasmasuk/tambah');
			}
		}
		function hapus($kode){
			$this->db->delete('kasmasuk',['kode'=>$kode]);
			redirect('kasmasuk');
		}
	}
?>