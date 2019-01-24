<?php
class Clientes_model extends CI_Model {

    # VALIDA USUÁRIO
    function verifica_cliente() {
        $this->db->where('email', $this->input->post('email')); 
        $query = $this->db->get('clientes'); 

        if ($query->num_rows == 1) { 
            return true; // RETORNA VERDADEIRO
        }
    }

}
