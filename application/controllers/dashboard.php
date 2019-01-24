<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
         * 
         */
        
        function __construct() {
        parent::__construct();
        $this->load->model('login_model', 'clientes');
        $this->clientes->logged();
    }
	public function index()
	{
                 $sql = "SELECT nome FROM clientes WHERE email ="." '".$this->session->userdata('username')."'";
                 $query = $this->db->query($sql);
                 foreach ($query->result_array() as $row)
                {
                    echo $row['nome'];
                 }
                 $data['username'] = $row['nome'];
		$this->load->view('adm-page', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */