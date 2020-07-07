<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Request_model extends CI_Model 
{

	public function GetCountFMW()
	{
		$this->db->where('request_type', 1);
		$this->db->where('request_nature', 'fling');
		return $this->db->count_all_results('requests');
	}

	public function GetCountFWM()
	{
		$this->db->where('request_type', 2);
		$this->db->where('request_nature', 'fling');
		return $this->db->count_all_results('requests');
	}

	public function GetCountFMM()
	{
		$this->db->where('request_type', 3);
		$this->db->where('request_nature', 'fling');
		return $this->db->count_all_results('requests');
	}

	public function GetCountFWW()
	{
		$this->db->where('request_type', 4);
		$this->db->where('request_nature', 'fling');
		return $this->db->count_all_results('requests');
	}

	public function GetCountFCM()
	{
		$this->db->where('request_type', 5);
		$this->db->where('request_nature', 'fling');
		return $this->db->count_all_results('requests');
	}

	public function GetCountFCW()
	{
		$this->db->where('request_type', 6);
		$this->db->where('request_nature', 'fling');
		return $this->db->count_all_results('requests');
	}

	public function GetCountFF()
	{
		$this->db->where('request_type', 7);
		$this->db->where('request_nature', 'fling');
		return $this->db->count_all_results('requests');
	}

	public function GetCountLMW()
	{
		$this->db->where('request_type', 1);
		$this->db->where('request_nature', 'long-term');
		return $this->db->count_all_results('requests');
	}

	public function GetCountLWM()
	{
		$this->db->where('request_type', 2);
		$this->db->where('request_nature', 'long-term');
		return $this->db->count_all_results('requests');
	}

	public function GetCountLMM()
	{
		$this->db->where('request_type', 3);
		$this->db->where('request_nature', 'long-term');
		return $this->db->count_all_results('requests');
	}

	public function GetCountLWW()
	{
		$this->db->where('request_type', 4);
		$this->db->where('request_nature', 'long-term');
		return $this->db->count_all_results('requests');
	}


	public function GetCountSearch($request_nature, $request_type, $age1, $age2, $state)
	{
	  if(!empty($request_nature))
	  {
	      $this->db->where('request_nature', $request_nature);
	  }
	  if(!empty($request_type))
	  {
	      $this->db->where('request_type', $request_type);
	  }
	  if(!empty($age1))
	  {
	      $this->db->where('age >=', $age1);
	  }
	  if(!empty($age2))
	  {
	      $this->db->where('age <=', $age2);
	  }
	  if(!empty($state))
	  {
	      $this->db->where('state', $state);
	  }
	  return $this->db->count_all_results('requests');
	}

	public function GetCountDateSearch($start_date, $end_date)
	{

		$this->db->where('created_at >=', $start_date);
		$this->db->where('created_at <=', $end_date);
		return $this->db->count_all_results('requests');
	}

	public function GetPaginatedFlingResultsFMW($limit, $start) 
	{
				$this->db->limit($limit, $start);
				$this->db->where('request_type', 1);
				$this->db->where('request_nature', 'fling');
				return $this->db->get('requests')->result();
	}

	public function GetPaginatedFlingResultsFWM($limit, $start) 
	{
				$this->db->limit($limit, $start);
				$this->db->where('request_type', 2);
				$this->db->where('request_nature', 'fling');
				return $this->db->get('requests')->result();
	}

	public function GetPaginatedFlingResultsFMM($limit, $start) 
{
            $this->db->limit($limit, $start);
			$this->db->where('request_type', 3);
			$this->db->where('request_nature', 'fling');
            return $this->db->get('requests')->result();
}
	
	public function GetPaginatedFlingResultsFWW($limit, $start) 
    {
            $this->db->limit($limit, $start);
			$this->db->where('request_type', 4);
			$this->db->where('request_nature', 'fling');
            return $this->db->get('requests')->result();
	}

	public function GetPaginatedFlingResultsFCM($limit, $start) 
    {
            $this->db->limit($limit, $start);
			$this->db->where('request_type', 5);
			$this->db->where('request_nature', 'fling');
            return $this->db->get('requests')->result();
	}

	public function GetPaginatedFlingResultsFCW($limit, $start) 
    {
            $this->db->limit($limit, $start);
			$this->db->where('request_type', 6);
			$this->db->where('request_nature', 'fling');
            return $this->db->get('requests')->result();
	}

	public function GetPaginatedFlingResultsFF($limit, $start) 
    {
            $this->db->limit($limit, $start);
			$this->db->where('request_type', 7);
			$this->db->where('request_nature', 'fling');
            return $this->db->get('requests')->result();
	}

	public function GetPaginatedResultsLMW($limit, $start) 
    {
            $this->db->limit($limit, $start);
			$this->db->where('request_type', 1);
			$this->db->where('request_nature', 'long-term');
            return $this->db->get('requests')->result();
	}

	public function GetPaginatedResultsLWM($limit, $start) 
    {
            $this->db->limit($limit, $start);
			$this->db->where('request_type', 2);
			$this->db->where('request_nature', 'long-term');
            return $this->db->get('requests')->result();
	}

	public function GetPaginatedResultsLMM($limit, $start) 
    {
            $this->db->limit($limit, $start);
			$this->db->where('request_type', 3);
			$this->db->where('request_nature', 'long-term');
            return $this->db->get('requests')->result();
	}

	public function GetPaginatedResultsLWW($limit, $start) 
    {
            $this->db->limit($limit, $start);
			$this->db->where('request_type', 4);
			$this->db->where('request_nature', 'long-term');
            return $this->db->get('requests')->result();
	}

	public function GetPaginatedResults($request_nature, $request_type, $age1, $age2, $state, $limit, $start) 
    {
       $this->db->limit($limit, $start);
	   if(!empty($request_nature))
	  {
	      $this->db->where('request_nature', $request_nature);
	  }
	  if(!empty($request_type))
	  {
	      $this->db->where('request_type', $request_type);
	  }
	  if(!empty($age1))
	  {
	      $this->db->where('age >=', $age1);
	  }
	  if(!empty($age2))
	  {
	      $this->db->where('age <=', $age2);
	  }
	  if(!empty($state))
	  {
	      $this->db->where('state', $state);
	  }
	
	  return $this->db->get('requests')->result();
	}

	public function GetPaginatedResultsDates($start_date, $end_date, $limit, $start)
	{ 
		$this->db->limit($limit, $start);
	    $this->db->where('created_at >=', $start_date);
		$this->db->where('created_at <=', $end_date);
		return $this->db->get('requests')->result();
	}

    function Insert($data)
    {
        $this->db->insert('requests', $data);
		return $this->db->affected_rows();
		//var_dump($data);
	}
	
	function NewsletterInsert($data)
    {
        $this->db->insert('newsletter', $data);
		return $this->db->affected_rows();
		//var_dump($data);
	}
	
	function VerifyToken($email, $hash)
    {
      $this->db->select('*');
	  $this->db->where('email', $email);
	  $this->db->where('hash', $hash);
      return $this->db->get('users')->row();  
    }
    
    function UpdateToken($email)
    {
       $this->db->set('active', 1);;
	   $this->db->where('email', $email);
       return $this->db->update('users');  
    }

	function FetchRequestDetails($id)
	{
		return $this->db->get_where('requests', array('id' => $id))->row();
    }
    
    function LoginValidate($email, $pass_word)
	 {
		  $this->db->where('email', $email);
		  $row = $this->db->get('users')->row();
		  return $row ? password_verify($pass_word, $row->pass_word) : false;
	}

	function AllUserRequests($id)
    {
	   $this->db->order_by('id', 'DESC');;
       $this->db->select('*');
	   $this->db->where('userID', $id);
       return $this->db->get('requests')->result();  
	}
	
	function LatestRequests()
    {
	   $this->db->order_by('id', 'DESC');
	   $this->db->limit(9); 
       $this->db->select('*');
       return $this->db->get('requests')->result();  
	}
	
	function GetRequestTypeWithID($id)
	{
	  $this->db->select('value');
	  $this->db->where('id', $id);
	  return $this->db->get('request_type_definitions')->row();
	}

	function Search($request_nature, $request_type, $age1, $age2, $state)
	{
	  $this->db->order_by('id', 'DESC');
	  $this->db->select('*');
	  if(!empty($request_nature))
	  {
	      $this->db->where('request_nature', $request_nature);
	  }
	  if(!empty($request_type))
	  {
	      $this->db->where('request_type', $request_type);
	  }
	  if(!empty($age1))
	  {
	      $this->db->where('age >=', $age1);
	  }
	  if(!empty($age2))
	  {
	      $this->db->where('age <=', $age2);
	  }
	  if(!empty($state))
	  {
	      $this->db->where('state', $state);
	  }
	  
	  return $this->db->get('requests')->result();
	}

	function GetFlings($id)
	{
	  $this->db->select('*');
	  $this->db->where('request_type', $id);
	  $this->db->where('request_nature', 'fling');
	  return $this->db->get('requests')->result();
	}

	function GetLongTerm($id)
	{
	  $this->db->select('*');
	  $this->db->where('request_type', $id);
	  $this->db->where('request_nature', 'long-term');
	  return $this->db->get('requests')->result();
	}

	public function Delete($id)
	{
		$this->db->delete('requests', array('id' => $id));
		return $this->db->affected_rows();
	}

}