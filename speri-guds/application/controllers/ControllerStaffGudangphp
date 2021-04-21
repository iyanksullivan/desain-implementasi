<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerStaffGudang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Staff_udang');
		$this->load->model('Sparepart');
		$this->load->library('form_validation');
		$config['upload_path']   = './assets/fotoadmin';
		$config['allowed_types'] = 'jpg|png|jpeg';	
		$this->load->library('upload',$config);
	}

	public function index()
	{			
		if(isset($this->session->username)){
			$data['admin'] = $this->Admin->getDataAdmin('username',$this->session->username);
			$this->load->view('admin/dashboard',$data);			
		}
		else{
			redirect('ControllerStaffGudang/login');
		}
	}

	public function login(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');		
		
		if($this->form_validation->run() == false){
			$this->load->view('admin/login');
						
		}
		else{
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			if(!$this->Admin->checkAuthAdm($data)){						
				redirect('ControllerStaffGudang/login');
			}
			else{
				$this->session->set_userdata('username',$data['username']);
				redirect('ControllerStaffGudang/index');
			}			
		}			
	}

	public function create(){

		$username  = $this->input->post('username');
        $password = $this->input->post('password');
        $foto  = $_FILES['foto'];

        if($foto = ''){}else{
            // $config['upload_path']   = './assets/fotoadmin';
            // $config['allowed_types'] = 'jpg|png|jpeg';
            
            

			$foto = $_FILES['foto'];

            if(!$this->upload->do_upload('foto')){
                echo "Upload Gagal";die();
            }else{
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'username'     => $username,
            'password'     => $password,
            'foto'         => $foto
        );

        $this->db->insert('admin', $data);
        redirect('ControllerStaffGudang/login');

	}

	public function registerAdm(){        
		$this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');	
		$this->form_validation->set_rules('re-password','Re-password','required');
		$this->form_validation->set_rules('foto','Foto','required');					

		if($this->form_validation->run() == false){
			$this->load->view('admin/createAcc');						
		}
		else{                    
            $data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			$data['re-password'] = $this->input->post('re-password');			
			$data['foto'] = $this->input->post('foto');
			if(!$this->Admin->checkAuthAdm($data)){					
					$this->Admin->saveAdm($data);
					$this->session->set_userdata('username',$data['username']);
					redirect('ControllerStaffGudang/index');
			}
			else{
				$this->session->set_userdata('username',$data['username']);	
				$this->session->set_userdata('foto',$data['foto']);			
				site_url('ControllerStaffGudang/login');
			}			
		}
    }
    
	public function update(){	
		$this->form_validation->set_rules('password','Password','required');	
		$this->form_validation->set_rules('re-password','Re-password','required');
					
		$data['admin'] = $this->Admin->getDataAdmin('username',$this->session->username);
		if($this->form_validation->run() == false){
			$this->load->view('admin/editProfile',$data);
		}
		else{
			if($this->input->post('password') == $this->input->post('re-password')){	
				if(!$this->upload->do_upload('foto')){
					$foto =   $data['admin']['foto'];     
				}else{
					$foto = $this->upload->data('file_name');
				}
				$data = [                    
					'username' => $this->input->post('username',true),
					'password' => $this->input->post('password',true),
					'foto' => $foto
				];			
				$this->Admin->updateAdmin($data);
				redirect('ControllerStaffGudang/index');
			}
				$this->load->view('admin/editProfile',$data);
		}
    }

    public function delete(){		
		$this->Admin->deleteAdmin($this->session->username);
		$this->session->sess_destroy();
		redirect('ControllerStaffGudang/login');
    }

	public function logout(){
		$this->session->sess_destroy();
		redirect('ControllerStaffGudang/login');
	}

	

	
}
