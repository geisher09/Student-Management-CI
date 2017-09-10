<?php
	
	class Home extends CI_controller{

		public function index(){
			$this->load->model('sm_model');
			$students = $this->sm_model->getStudents();
			$courses = $this->sm_model->getCourses();
			$this->load->view('home', ['students'=>$students],['courses'=>$courses]);
		}

		public function courses(){
			 $this->load->model('sm_model');
			 $courses = $this->sm_model->getCourses();
			 $this->load->view('courses',['courses'=>$courses]);
		}	

		public function create(){
		 	$this->load->model('sm_model');
			$courses = $this->sm_model->getCourses();
			$this->load->view('create', ['courses'=>$courses]);
		}

		public function createc(){
			$this->load->view('create_course');
		}


		public function savec(){

			$this->form_validation->set_rules('cid', 'Cid', 'required');
	  		$this->form_validation->set_rules('cname', 'Course name', 'required');
		 	$this->form_validation->set_rules('cdesc', 'Course description', 'required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            
            if ($this->form_validation->run()){

             	$data = $this->input->post();
             	$this->load->model('sm_model');
             	if ($this->sm_model->saveCourse($data)){
             		$this->session->set_flashdata('response', 'Saved Succesfully!');
				 }
				 else{
             		$this->session->set_flashdata('response', 'Failed :(');
				 }
				 return redirect('home/courses');

            }
            else{
            	$this->load->view('create_course');
            }
		}

		public function save(){

			$this->form_validation->set_rules('idno', 'ID No.', 'required');
	  		$this->form_validation->set_rules('lname', 'Last name', 'required');
		 	$this->form_validation->set_rules('fname', 'First name', 'required');
		  	$this->form_validation->set_rules('mname', 'Middle name', 'required');
		  	$this->form_validation->set_rules('sex', 'Sex', 'required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            
            if ($this->form_validation->run()){

             	$data = $this->input->post();
             	$this->load->model('sm_model');
             	if ($this->sm_model->saveStudents($data)){
             		$this->session->set_flashdata('response', 'Saved Succesfully!');
				 }
				 else{
             		$this->session->set_flashdata('response', 'Failed :(');
				 }
				 return redirect('home');

            }
            else{
            	$this->load->model('sm_model');
			 	$students = $this->sm_model->getStudents();
				$this->load->view('create', ['students'=>$students]);
            }
		}

		public function edit( $student_id ){
			    $this->load->model('sm_model');
				$courses = $this->sm_model->getCourses();
			 	$studentf = $this->sm_model->getAllStudents($student_id);
				$this->load->view('update',['studf'=>$studentf,'courses'=>$courses]);
		}

		public function editc( $course_id ){
			    $this->load->model('sm_model');
			 	$course = $this->sm_model->getAllCourse($course_id);
				$this->load->view('update_course',['course'=>$course]);
		}

		public function update( $student_id ){
			$this->form_validation->set_rules('idno', 'ID No.', 'required');
	  		$this->form_validation->set_rules('lname', 'Last name', 'required');
		 	$this->form_validation->set_rules('fname', 'First name', 'required');
		  	$this->form_validation->set_rules('mname', 'Middle name', 'required');
		  	$this->form_validation->set_rules('sex', 'Sex', 'required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            
            if ($this->form_validation->run()){

             	$data = $this->input->post();
             	$this->load->model('sm_model');
             	if ($this->sm_model->updateStudents($student_id, $data)){
             		$this->session->set_flashdata('response', 'Updated Succesfully!');
				 }
				 else{
             		$this->session->set_flashdata('response', 'Failed :(');
				 }
				 return redirect('home');

            }
            else{
            	$this->load->model('sm_model');
			 	$students = $this->sm_model->getStudents();
			 	$courses = $this->sm_model->getCourses();
				$this->load->view('update', ['students'=>$students,'courses'=>$courses]);
            }
			
		}

		public function updatec( $course_id){

			$this->form_validation->set_rules('cid', 'Cid', 'required');
	  		$this->form_validation->set_rules('cname', 'Course name', 'required');
		 	$this->form_validation->set_rules('cdesc', 'Course description', 'required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            
            if ($this->form_validation->run()){

             	$data = $this->input->post();
             	$this->load->model('sm_model');
             	if ($this->sm_model->updateCourses($course_id, $data)){
             		$this->session->set_flashdata('response', 'Updated Succesfully!');
				 }
				 else{
             		$this->session->set_flashdata('response', 'Failed :(');
				 }
				 return redirect('home/courses');

            }
            else{
            	$this->load->view('update_course');
            }
		}

		public function delete($student_id){
            	$this->load->model('sm_model');

            	if ($this->sm_model->deleteStudents($student_id)){
             		$this->session->set_flashdata('response', 'Deleted Succesfully!');
				}

				else{
             		$this->session->set_flashdata('response', 'Failed to Delete');
				}
				return redirect('home');

		}

		public function view($student_id){

			$this->load->model('sm_model');
		 	$studentf = $this->sm_model->getAllStudents($student_id);
			$this->load->view('view',['studf'=>$studentf]);
		}


		public function deletec($course_id){
            	$this->load->model('sm_model');

            	if ($this->sm_model->deleteCourse($course_id)){
             		$this->session->set_flashdata('response', 'Deleted Succesfully!');
				}

				else{
             		$this->session->set_flashdata('response', 'Failed to Delete');
				}
				return redirect('home/courses');

		}

		public function viewc($course_id){

			 $this->load->model('sm_model');
		  	$course = $this->sm_model->getAllCourse($course_id);
			 $this->load->view('view_course',['course'=>$course]);

		}

	}


?>