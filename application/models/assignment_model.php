<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Assignment_model extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    function checkEmail($email, $id = 0)
    {
        $this->db->select("email");
        $this->db->from("registerData");
        $this->db->where("email", $email);   
        if($id != 0){
            $this->db->where("id !=", $id);
        }
        $query = $this->db->get();

        return $query->result();
    }

    function registerUser($registerInfo)
    {
        $this->db->trans_start();
        $this->db->insert('registerData', $registerInfo);
        $this->db->trans_complete();
    }
}

  