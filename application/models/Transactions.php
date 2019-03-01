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
<<<<<<< HEAD
	  $this->db->where('user_id', $id);
	  $this->db->order_by('created_at', 'dec');
	  $query=$this->db->get();
	  return $query->result();
		// $this->db->where('user_id', $id);
		// $query = $this->db->get('accounts');
		// return $query->result();
	}
	function fetch_transactions1($id){
	  $query = $this->db->query("select * from transactions where user_id = " . $id );
	  return $query->result();
=======
	  $this->db->where('user_id',$id);
	  $query=$this->db->get();
	  return $query;
>>>>>>> 6eabb6d25c2e598ca774cb784db26d63c72f3ef2
		// $this->db->where('user_id', $id);
		// $query = $this->db->get('accounts');
		// return $query->result();
	}

}
