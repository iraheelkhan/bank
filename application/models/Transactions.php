<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Ion Auth Model
 * @property Bcrypt $bcrypt The Bcrypt library
 * @property Ion_auth $ion_auth The Ion_auth library
 */
class Transactions extends CI_Model
{

	function fetch_transactions($id){
	  $this->db->select('*');
	  $this->db->from('transactions');
	  $this->db->where('user_id',$id);
	  $query=$this->db->get();
	  return $query;
		// $this->db->where('user_id', $id);
		// $query = $this->db->get('accounts');
		// return $query->result();
	}

}
