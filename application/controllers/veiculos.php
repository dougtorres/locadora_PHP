<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Veiculos extends CI_Controller {

	public function index()
	{
		$this->load->view('veiculos.php');
	}
        
        
        public function add_veiculo()
        {
            $this->load->view('add_veiculo.php');
        }
        
        public function inserir()
        {
            $this->form_validation->set_rules('marca','Marca','trim|required');
            
            if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('add_veiculo.php');
        }
        else
        {  
            $data['marca'] = $this->input->post('marca');
            $data['modelo'] = $this->input->post('modelo');
            $data['ano'] = $this->input->post('ano');
            $data['cor'] = $this->input->post('cor');
            $data['ar_condicionado'] = $this->input->post('ar-condicionado');
            $data['hidraulica'] = $this->input->post('hidraulica');
            $data['vidro_eletrico'] = $this->input->post('vidro');
            $data['som'] = $this->input->post('som');
            $data['combustivel'] = $this->input->post('combustivel');
            $data['portas'] = $this->input->post('porta');
            $data['placa'] = $this->input->post('placa');
            $data['diaria'] = $this->input->post('diaria');
            
            if($this->db->insert('veiculos', $data)){
                
                redirect('veiculos');
            }
            

        }

            
            
        }
        
        
        }

?>
