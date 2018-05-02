<?php
	class Dashboard extends CI_Controller{
		function Index(){
			$data['content']='dashboard_view';
			$this->load->view("template",$data);
		}
	}
?>