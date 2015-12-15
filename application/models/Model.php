<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Model extends CI_Model {
 	public function keyup($arg){
 		$this->db->select('*');
 		$this->db->like('content', $arg);
 		return  $row = $this->db->get('auto')->result_array();
    }
}

 ?>