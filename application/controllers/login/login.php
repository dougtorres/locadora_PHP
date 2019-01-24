<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        // VALIDATION RULES
        $this->form_validation->set_rules('email', 'Email', 'trim|required|verify_email');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        $this->form_validation->set_error_delimiters('', '');


        // MODELO MEMBERSHIP
        $this->load->model('login_model', 'clientes');
        $query = $this->clientes->validate();

        if ($this->form_validation->run() == FALSE) {
            
            $data['error_login'] = '';
            $data['page_title'] = 'Jr Locadora de Veículos';
            $this->load->view('nav-slider', $data);
            $this->load->view('conteudo-index', $data);
            $this->load->view('footer');
        } else {

            if ($query) { // VERIFICA LOGIN E SENHA
                $data = array(
                    'username' => $this->input->post('email'),
                    'logged' => true
                );
                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $data['error_login'] = 'Email ou senha incorretos';
                $data['page_title'] = 'Jr Locadora de Veículos';
                $this->load->view('nav-slider', $data);
                $this->load->view('conteudo-index', $data);
                $this->load->view('footer');
            }
        }
    }
    
    public function logout(){
       
        $this->session->sess_destroy();

        redirect('default_controller','refresh');
        
    }
   
}
