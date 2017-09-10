<?php

	class sm_model extends CI_Model{

		public function getStudents(){
			$query = $this->db->get('student');
			return $query->result();

		}

		public function saveStudents($data){
			return $this->db->insert('student', $data);
		}

	}

?>