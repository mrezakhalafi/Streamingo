<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model{

	function login($email){
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where("email",$email);
        $user = $this->db->get()->row_array();
        return $user;
    }
}