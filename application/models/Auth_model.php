<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    //perform login operation
    public function login_action($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query  = $this->db->get('tbl_users');

        if ($query->num_rows() == 1){
            return true;
        }
        else{
            return false;
        }
    }
}