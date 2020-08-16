<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assignment extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('assignment_model');
    }

	public function index()
	{
		$this->load->view('index');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function registerAdd()
	{                    
        $this->form_validation->set_rules('fname','First Name','trim|required|alpha');
        $this->form_validation->set_rules('lname','Last Name','trim|required|alpha');
        $this->form_validation->set_rules('age','Age','trim|required|numeric');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[registerData.email]');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('confirmPassword','Confirm Password','trim|required|matches[password]');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('contact','Phone Number','required');
        if (empty($_FILES['profile']['name']))
		{
		    $this->form_validation->set_rules('profile', 'Profile Picture', 'required');
		}
		if (empty($_FILES['resume']['name']))
		{
		    $this->form_validation->set_rules('resume', 'Resume', 'required');
		}        


        if($this->form_validation->run() == false)
        {
            $this->register();
        }
        else
        {
        	$file_data = array();
        	$resume_name = time().$_FILES["resume"]['name'];
			$document_config['file_name'] = $resume_name;
			$document_config['upload_path'] = './assets/uploads/resume/';
			$document_config['allowed_types'] = 'doc|docx|pdf';
			$this->upload->initialize($document_config);
			if (!$this->upload->do_upload('resume')) {
		   		$error = array('errorResume' => $this->upload->display_errors());
			    $this->session->set_flashdata('errorResume',$error['errorResume']);
				    redirect('register','refresh');
			} else {
				$file_data['resume'] = $this->upload->data();
  				
  			}
  			$profile_name = time().$_FILES["profile"]['name'];
			$image_config['file_name'] = $profile_name;
			$image_config['upload_path'] = './assets/uploads/profile/';
			$image_config['allowed_types'] = 'jpeg|jpg|png';
			$image_config['max_size']    = '2048';
			$this->upload->initialize($image_config);
			if (!$this->upload->do_upload('profile')) {
				$error = array('errorProfile' => $this->upload->display_errors());
			    $this->session->set_flashdata('errorProfile',$error['errorProfile']);
			    redirect('register','refresh');
		   	} else{
		    	$file_data['profile'] = $this->upload->data();
		   	}

            $fname = ucfirst(strtolower($this->input->post('fname')));
            $lname = ucfirst(strtolower($this->input->post('lname')));
            $age = $this->input->post('age');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $address = $this->input->post('address');
            $contact = $this->input->post('contact');

            $registerInfo = array('fname'=> $fname, 'lname'=> $lname, 'age'=>$age, 'email'=>$email, 'password'=>md5($password), 'contact'=>$contact, 'address'=>$address, 'profile'=>$profile_name, 'resume'=>$resume_name);
            $result = $this->assignment_model->registerUser($registerInfo);
            
            $this->session->set_flashdata('response',"Registration Successfully");
			redirect('register','refresh');
        }
	}
	public function sendMail()
	{
		$this->load->config('email');
		$from = $this->input->post('contact-email');
        $to = 'parthkhatri100@gmail.com';
        $name = $this->input->post('contact-name');
        $email = $this->input->post('contact-email');
        $mobile = $this->input->post('contact-phone');
        $subject = $this->input->post('contact-subject');;
        $message = 'Name:'.$name.'<br/>Email:'.$email.'<br/>Mobile:'.$mobile.'<br/>Message:'.$this->input->post('contact-message');
        $this->email->set_newline("\r\n");
        $this->email->from($this->config->item('smtp_user'));
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()) {
			$this->session->set_flashdata('success_email','Your email has been sent successfully!');
        } else {
			$this->session->set_flashdata('error_email','Something went wrong. Please try again.');
        }
    }

}
