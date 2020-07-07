<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model 
{


    function InsertUser($data)
    {
        $this->db->insert('users', $data);
		return $this->db->affected_rows();
		//var_dump($data);
	}
	
	function VerifyToken($email, $hash)
    {
      $this->db->select('*');
	  $this->db->where('email', $email);
	  $this->db->where('token', $hash);
	  $row = $this->db->get('password_reset_request')->row();  
	  return $row ? true : false;
    }
    
    function UpdateToken($email)
    {
       $this->db->set('active', 1);;
	   $this->db->where('email', $email);
       return $this->db->update('users');  
    }

	function FetchUserDetails($email)
	{
		return $this->db->get_where('users', array('email' => $email))->row();
    }
    
    function LoginValidate($email, $pass_word)
	 {
		  $this->db->where('email', $email);
		  $row = $this->db->get('users')->row();
		  return $row ? password_verify($pass_word, $row->pass_word) : false;
	}

	function InsertPasswordResetToken($data)
    {
        $insert = $this->db->insert('password_reset_request', $data);
		return $this->db->affected_rows();
	}

	function UpdatePassword($email, $new_password)
	{
	    $this->db->set('pass_word', $new_password);
		$this->db->where('email', $email);
		$this->db->update('users');
		return $this->db->affected_rows();
	}

}