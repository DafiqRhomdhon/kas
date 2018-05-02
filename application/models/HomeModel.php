<?php
	class HomeModel extends CI_Model{
		function getData(){
			$data = array (
				"nama"=>"Dafiq",
				"kelas"=>"XI_RPL_1",
				"website"=>"youtube.com",
			);
			return $data ;

		}
	}
?>