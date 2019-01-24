<?php
class Login_model extends CI_Model {

    # VALIDA USUÁRIO
    function validate() {
        $this->db->where('email', $this->input->post('email')); 
        $this->db->where('senha', md5($this->input->post('senha')));
        $this->db->where('status', 1); // Verifica o status do usuário

        $query = $this->db->get('clientes'); 

        if ($query->num_rows == 1) { 
            return true; // RETORNA VERDADEIRO
        }
    }

    # VERIFICA SE O USUÁRIO ESTÁ LOGADO
    function logged() {
        $logged = $this->session->userdata('logged');

        if (!isset($logged) || $logged != true) {
            echo '<!DOCTYPE HTML>
    <html>
    
    <head>
        <meta charset="UTF-8">
        <title>Acesso Negado!</title>
    </head>
    <body>
    </br>
    </br>
        
       <p align="center">Você não tem permissão para acessar esta página! Efetue login!<p>
        
    </body>
   </html>';
            die();
        }
    }
}
