<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerAdm extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin');
		// belom euy
		// $this->load->model('User');
		$this->load->model('Sparepart');
		$this->load->library('form_validation');
		// $this->load->library('upload',$config);
	}

	public function index()
	{			
		if(isset($this->session->username)){
			$data['admin'] = $this->Admin->getDataAdmin('nik',$this->session->nik);
			$this->load->view('admin/dashboard',$data);			
		}
		else{
			redirect('ControllerAdm/login');
		}
	}

	public function login(){
		$this->form_validation->set_rules('nik','nik','required');
		$this->form_validation->set_rules('password','Password','required');		
		
		if($this->form_validation->run() == false){
			$this->load->view('admin/login');
						
		}
		else{
			$data['nik'] = $this->input->post('nik');
			$data['password'] = $this->input->post('password');
			if(!$this->Admin->checkAuthAdm($data)){						
				redirect('ControllerAdm/login');
			}
			else{
				$this->session->set_userdata('nik',$data['nik']);
				redirect('ControllerAdm/index');
			}			
		}			
	}

	public function create(){

		$nik  = $this->input->post('nik');
		$nama = $this->input->post('nama');
        $password = $this->input->post('password');
		$hak_akses = 1;

        $data = array(
            'nik'     => $nik,
			'nama'	  => $nama,
            'password' => $password,
			'hak_akses' => $hak_akses
        );

        $this->db->insert('admin', $data);
        redirect('ControllerAdm/login');

	}

	public function registerAdm(){        
		$this->form_validation->set_rules('nik','NIK','required');
		$this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('password','Password','required');	
		$this->form_validation->set_rules('re-password','Re-password','required');					

		if($this->form_validation->run() == false){
			$this->load->view('admin/createAcc');						
		}
		else{                    
            $data['nik'] = $this->input->post('nik');
			$data['name'] = $this->input->post('name');
			$data['password'] = $this->input->post('password');
			$data['re-password'] = $this->input->post('re-password');
			$data['hak_akses'] = $this->input->post('hak_akses');
			if(!$this->Admin->checkAuthAdm($data)){
					$this->Admin->saveAdm($data);
					$this->session->set_userdata('nik',$data['nik']);
					redirect('ControllerAdm/index');
			}
			else{
				$this->session->set_userdata('nik',$data['nik']);	
				site_url('ControllerAdm/login');
			}			
		}
    }
    
	public function update(){	
		$this->form_validation->set_rules('password','Password','required');	
		$this->form_validation->set_rules('re-password','Re-password','required');
					
		$data['admin'] = $this->Admin->getDataAdmin('nik',$this->session->nik);
		if($this->form_validation->run() == false){
			$this->load->view('admin/editProfile',$data);
		}
		else{
			if($this->input->post('password') == $this->input->post('re-password')){	
				$data = [                    
					'nik' => $this->input->post('nik',true),
					'password' => $this->input->post('password',true),
				];			
				$this->Admin->updateAdmin($data);
				redirect('ControllerAdm/index');
			}
				$this->load->view('admin/editProfile',$data);
		}
    }

    public function delete(){		
		$this->Admin->deleteAdmin($this->session->nik);
		$this->session->sess_destroy();
		redirect('ControllerAdm/login');
    }

	public function logout(){
		$this->session->sess_destroy();
		redirect('ControllerAdm/login');
	}

	

	
}
