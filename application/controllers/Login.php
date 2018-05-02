<?php 
/**
* 
*/
class Login extends CI_Controller
{

	public function index(){
	$this->load->view("login");
	}

	function cek_login(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		$query = $this->db->get_where('user', ['user_nama' => $user, 'user_pass' => $pass]);

		if ($query->num_rows() > 0) {
			
			$this->session->set_userdata([

				'user_id' => $query->row()->user_id,
				'user_nama' => $query->row()->user_nama,
				'user_pass' => $query->row()->user_pass,
				'user_level' => $query->row()->user_level

			]);

			redirect('/');

		}
		else{
			?>

			<script type="text/javascript">
				alert('login failed');

				window.location ='<?php 	echo base_url('login'); ?>';
			</script>
			<?php
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect('login');
	}
}

 ?>