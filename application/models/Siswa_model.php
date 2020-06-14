<?php defined('BASEPATH') OR die('No direct script access allowed');

class Siswa_model extends CI_Model {

     public function getAll()
     {
		  $data_siswa = $this->db->get('siswa')->result();
          return $data_siswa;
     }

}
