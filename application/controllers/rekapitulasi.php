<?php
	class Rekapitulasi extends CI_Controller{
		function Index(){
			$data['content']='rekapitulasi';
			$this->load->view("template",$data);
		}
	}
?>