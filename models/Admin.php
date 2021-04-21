<?php

class Admin extends CI_Model{

    public function checkUnameAdm($nik){

		$this->db->where('nik', $nik);
  		$check =  $this->db->count_all_results('staff_gudang'); 

		if($check > 0) return true;	
		else return false;

    }
    
    public function getDataAdmin($key,$value){
        return $this->db->get_where('staff_gudang', [$key => $value])->row_array();
    }

    public function checkAuthAdm($data){
        if($this->checkUnameAdm($data['nik'])){
            $this->db->where('nik',$data['nik']);
            $pass = $this->db->get('staff_gudang')->row_array();
            if($pass['password'] == $data['password'] ){
                return true;
            }
            else{
                return false;
            }            
        }
        else{
            return false;
        }
    }

    public function saveAdm($data){
    
        /* Defined Data */

        $data = [
            'nik' => $this->input->post('nik',true),
            'nama' => $this->input->post('nama',true),
            'password' => $this->input->post('password',true),
            'hak_akses' => $this->input->post('hak_akses',true)
        ];

       /* Inserting Data */
       $this->db->insert('staff_gudang', $data);

    }

    public function updateAdmin($data){                
			$this->db->where('nik', $data['nik'])->update('staff_gudang', $data);
    }

    public function deleteAdmin($nik){
        $this->db->where('nik', $nik)->delete('staff_gudang');
    }
    
    public function isAllowed($getUserLogged){
        return $getUserLogged->role != 'Adm' ? true : false;
    }
}