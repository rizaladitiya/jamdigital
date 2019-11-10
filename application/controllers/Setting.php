<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model(array('setting_model','about_model'));
		$this->load->helper(array('url','form'));
		
		if(!$this->session->userdata('logged_in'))
   			
   		{
     		//If no session, redirect to login page
     		redirect('auth', 'refresh');
   		}
 
	}
	
	public function index()
	{
		$data['nama'] = $this->session->userdata('logged_in')['nama'];
		$data['creator']=$this->about_model->get_by_nama('creator')->row()->value;
		$data['nim']=$this->about_model->get_by_nama('nim')->row()->value;
		$data['program']=$this->about_model->get_by_nama('program')->row()->value;
		$this->load->view('setting',$data);
	}
	public function save()
	{
		$this->about_model->update('creator',array('value'=>$this->input->post('creator')));
		$this->about_model->update('nim',array('value'=>$this->input->post('nim')));
		$this->about_model->update('program',array('value'=>$this->input->post('program')));
            
		redirect('setting', 'refresh');	
        
	}
	
}
