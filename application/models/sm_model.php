<?php

	class sm_model extends CI_Model{

		public function getStudents(){
			$query = $this->db->get('student');
			return $query->result();

		}

		public function getCourses(){
			$query = $this->db->get('course');
			return $query->result();

		}

		public function saveStudents($data){
			return $this->db->insert('student', $data);
		}

		public function getAllStudents($student_id){
			$query = $this->db->get_where('student', array('id'=>$student_id));
			if($query->num_rows()>0){
				return $query->row();
			}
		}

		public function updateStudents($student_id, $data){
			return $this->db->where('id', $student_id)
				->update('student', $data);
		}

	}

?>