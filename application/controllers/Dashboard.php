<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model(array('setting_model','about_model'));
		$this->load->helper(array('url','form'));
		
		$this->load->library('user_agent');
		
		if(!$this->session->userdata('logged_in'))
   			
   		{
     		//If no session, redirect to login page
     		redirect('auth', 'refresh');
   		}
 
	}

	public function index()
	{
		
		$data['nama'] = $this->session->userdata('logged_in')['nama'];
		$data['nim'] = $this->session->userdata('logged_in')['nim'];
		$this->load->library(array('table'));
		$alls=$this->setting_model->get_all()->result();
		$this->table->set_empty("&nbsp;");
		$tmpl = array ('table_open'=>'<table id="tabellaporan" class="table table-hover"  width="200%">');
		$this->table->set_template($tmpl); 
		$this->table->set_heading(
		'Pukul',
		'Durasi(detik)',
		'&nbsp;'
	);
	foreach ($alls as $all){
		$this->table->add_row(
			date('H:i',strtotime($all->jam)),
			$all->durasi,
			anchor('dashboard/delete/'.$all->id,'&nbsp;',array('class'=>'fa fa-trash','onclick'=>"return confirm('Apakah Anda yakin ingin menghapus Alarm ini?')"))
		);
	}
	$data['table']=$this->table->generate();
		$this->load->view('dashboard',$data);
	}
	
	function delete(){
		$id = $this->uri->segment(3);
		$this->setting_model->delete($id);
		redirect($this->agent->referrer());
	}
	public function save()
	{
		$data = array(
				'jam'=>$this->input->post('jam'),
				'durasi'=>$this->input->post('durasi')
		
		);
		$id = $this->setting_model->save($data);
            
		redirect('dashboard', 'refresh');	
        
	}
}
