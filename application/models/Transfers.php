<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Ion Auth Model
 * @property Bcrypt $bcrypt The Bcrypt library
 * @property Ion_auth $ion_auth The Ion_auth library
 */
class Transfers extends CI_Model
{

<<<<<<< HEAD
	function fetch_transfers($id){
	  $this->db->select('*');
	  $this->db->from('transfers');
	  $this->db->where('user_id', $id);
	  $this->db->order_by('created_at', 'dec');
	  $query=$this->db->get();
	  return $query->result();
=======
	function fetch_accounts($id){

			      $this->db->select('*');

			      $this->db->from('accounts');

			      $this->db->where('user_id',$id);

			      $query=$this->db->get();

			      $row=$query->row();

			      return $row;
>>>>>>> 6eabb6d25c2e598ca774cb784db26d63c72f3ef2
		// $this->db->where('user_id', $id);
		// $query = $this->db->get('accounts');
		// return $query->result();
	}

}
