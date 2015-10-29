<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function _getartist(){
			
			$result = $this->db->get('artist');
			return $result;
		}
		
		function search($keyword , $type)
    {
        $this->db->like($type,$keyword);
        $result  =   $this->db->get('artist');
        return  $result;
    }
    
        }