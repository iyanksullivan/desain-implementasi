<?php

class Staff_gudang extends CI_Model{

    public function checkUnameAdm($username){

		$this->db->where('username', $username);
  		$check =  $this->db->count_all_results('staff_gudang'); 

		if($check > 0) return true;	
		else return false;

    }
    
    public function getDatastaff_gudang($key,$value){
        return $this->db->get_where('staff_gudang', [$key => $value])->row_array();
    }

    public function checkAuthAdm($data){
        if($this->checkUnameAdm($data['username'])){
            $this->db->where('username',$data['username']);
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
            'username' => $this->input->post('username',true),
            'password' => $this->input->post('password',true),
            'foto'     => $this->input->post('foto',true),
        ];

       /* Inserting Data */
       $this->db->insert('staff_gudang', $data);

    }

    public function updatestaff_gudang($data){                
			$this->db->where('username', $data['username'])->update('staff_gudang', $data);
    }

    public function deletestaff_gudang($username){
        $this->db->where('username', $username)->delete('staff_gudang');
    }
    
    public function isAllowed($getUserLogged){
        return $getUserLogged->role != 'Adm' ? true : false;
    }
}