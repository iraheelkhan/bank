<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Ion Auth Model
 * @property Bcrypt $bcrypt The Bcrypt library
 * @property Ion_auth $ion_auth The Ion_auth library
 */
class Accounts extends CI_Model
{

	function fetch_account($id){

			      $this->db->select('*');

			      $this->db->from('accounts');

			      $this->db->where('user_id',$id);

			      $query=$this->db->get();

			      $row=$query->row();

			      return $row;
		// $this->db->where('user_id', $id);
		// $query = $this->db->get('accounts');
		// return $query->result();
	}

}
