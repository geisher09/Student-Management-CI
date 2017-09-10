<?php
	
	class Home extends CI_controller{

		public function index(){
			$this->load->model('sm_model');
			$students = $this->sm_model->getStudents();
			$this->load->view('home', ['students'=>$students]);
		}

		 public function create(){
		 	$this->load->model('sm_model');
		 	$students = $this->sm_model->getStudents();
			$this->load->view('create', ['students'=>$students]);
		}

		public function profile($idno)
		{
			$student = $this->students->read(array('idno'=>$id));

			if(count($student)>0){
			$header_data['title'] = "Stud prof";
			// echo "Display student profile Id=$id";
			$data['student'] = $student;
			$this->load->view('students/profile',$data);
			$this->load->view('include/header',$header_data);
			$this->load->view('include/footer');
			}

			else
				redirect('students','refresh');
			

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
		public function edit(){

		}

	}


?>