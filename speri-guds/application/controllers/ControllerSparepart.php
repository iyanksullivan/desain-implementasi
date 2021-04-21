<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerSparepart extends CI_Controller{
    public function __construct(){
		parent::__construct();
        $this->load->model('Sparepart');
        $this->load->library('form_validation');
        $config['upload_path']   = './assets/fotosparepart';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // $this->load->library('upload',$config);
    }

    public function index(){
        $data['sparepart'] = $this->sparepart->getAllSparepart();
        $this->load->view('admin/sparepart',$data);
    }    
    
    public function getAll(){
        $this->sparepart->getDataSparepart();
    }

    public function get($id){
        $this->sparepart->getDataSparepart('id', $id);
    }

    public function create(){
        
        $nama  = $this->input->post('nama');
        $jenis = $this->input->post('jenis');
        $kode  = $this->input->post('kode');
        $manufaktur = $this->input->post('manufaktur');
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');
        
        // $foto  = $_FILES['foto'];

        // if($foto = ''){}else{
            

        //     if(!$this->upload->do_upload('foto')){
        //         echo "Upload Gagal";die();
        //     }else{
        //         $foto = $this->upload->data('file_name');
        //     }
        // }

        $data = array(
            'KODE'    => $kode,
            'NAMA'     => $nama,
            'JENIS'    => $jenis,
            'MANUFAKTUR'     => $manufaktur,
            'JUMLAH'    => $jumlah,
            'HARGA'    => $harga,
            // 'foto'     => $foto
        );

        $this->db->insert('sparepart', $data);
        redirect('Controllersparepart/daftarSparepartAdmin');
        
    }

    public function update($id){     
        $this->form_validation->set_rules('kode','Kode','required');  
        $this->form_validation->set_rules('nama','Nama','required');    
        $this->form_validation->set_rules('jenis','Jenis','required');
        $this->form_validation->set_rules('manufaktur','Nama','required');          
        $this->form_validation->set_rules('jumlah','Jumlah','required');        
        $this->form_validation->set_rules('harga','Harga','required');
        

        $data['sparepart'] = $this->sparepart->getDataSparepart($id);
        if($this->form_validation->run() == false){
            $this->load->view('sparepart/editsparepart',$data);
        }
        else{
            $kode  = $this->input->post('nama');
            $jenis = $this->input->post('jenis');
            $nama  = $this->input->post('nama');
            $jenis = $this->input->post('jenis');
            $harga = $this->input->post('harga');               
    
            if($foto = ''){}else{
                
    
                if(!$this->upload->do_upload('foto')){
                    $foto =   $data['sparepart']['foto'];                
                }else{
                    $foto = $this->upload->data('file_name');
                }
            }
    
            $data = array(
                'nama'     => $nama,
                'jenis'    => $jenis,
                'harga'    => $harga,
                'foto'     => $foto
            );
    
            $this->Sparepart->updateSparepart($id, $data);
            redirect('Controllersparepart/daftarSparepartAdmin');
        }
		        
    }

    public function delete($id){
        $this->Sparepart->deleteSparepart($id);
		redirect('ControllerSparepart/daftarSparepartAdmin');
    }
    public function detail($id){
        $data['sparepart'] = $this->sparepart->getDataSparepart($id);
        if($this->form_validation->run() == false){
            $this->load->view('sparepart/detailsparepart',$data);
        }
        else{
            $this->Sparepart->updateSparepart($id);
            redirect('Controllersparepart/daftarSparepartAdmin');
        }
    }

    public function search(){
        $this->Sparepart->searchSparepart();
    }

    public function keranjang(){
        $this->load->view('sparepart/keranjang');
    }

    public function parseInput(){
		return json_decode(file_get_contents('php://input'));
	}

    public function daftarSparepartAdmin(){
		$data['sparepart'] = $this->Sparepart->getAllSparepart();
		$this->load->view('sparepart/sparepart',$data);
	}

}