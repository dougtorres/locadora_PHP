<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Inicio extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data['error_login'] = '';
        $data['page_title'] = 'Jr Locadora de Veículos';
        $this->load->view('nav-slider', $data);
        $this->load->view('conteudo-index');
        $this->load->view('footer');
    }

     public function cadastro()
        {
        $data['error_cadastro'] = '';    
        $data['page_title'] = 'Cadastro - Jr Locadora de Veículos';
        $this->load->view('nav-slider', $data);
        $this->load->view('form-cadastro', $data);
        $this->load->view('footer');
        }

    public function inserir_cliente()
        {
            $this->load->model('clientes_model', 'clientes');
            $query = $this->clientes->verifica_cliente();
            $this->form_validation->set_rules('nome','Nome','trim|required|min_length[5]| max_length[30]|xss_clean');
            $this->form_validation->set_rules('telefone','Telefone','trim|required');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email');
            $this->form_validation->set_rules('senha','Senha','trim|required|matches[confirme_senha]|md5');
            $this->form_validation->set_rules('confirme_senha','Confirme a Senha','trim|required'); 
            $this->form_validation->set_error_delimiters('', '');

            if ($this->form_validation->run() == FALSE){
            $data['error_cadastro'] = '';    
            $data['page_title'] = 'Cadastro - Jr Locadora de Veículos';
            $this->load->view('nav-slider', $data);
            $this->load->view('form-cadastro', $data);
            $this->load->view('footer');}
             else {  
            
            if($query){
            $data['error_cadastro'] = 'O email informado já existe no sistema';    
            $data['page_title'] = 'Cadastro - Jr Locadora de Veículos';
            $this->load->view('nav-slider', $data);
            $this->load->view('form-cadastro', $data);
            $this->load->view('footer');
                
            } else {
            $data['nome'] = $this->input->post('nome');
            $data['telefone'] = $this->input->post('telefone');
            $data['email'] = $this->input->post('email');
            $data['senha'] = $this->input->post('senha');
            $data['status'] = 1; 
            if($this->db->insert('clientes', $data)){  
            $data['page_title'] = 'Cadastro Realizado - Jr Locadora de Veículos';
            $this->load->view('nav-slider', $data);
            $this->load->view('cadastro_efetuado');
            $this->load->view('footer');
        
            }
        
            }
        
            }
            
            }
        
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */