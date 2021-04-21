<?php

class sparepart extends CI_Model{

    public function searchSparepart(){
        $key = $this->input->post('searchKey');
        $this->db->like('nama', $key);
        $this->db->or_like('jenis', $key);
        return $this->db->get('sparepart')->result();
    }

    public function getAllSparepart(){
        return $this->db->get('sparepart')->result_array();
    }

    public function getDataSparepart($kode){
       $this->db->where('kode',$kode);
       return $this->db->get('sparepart')->row_array();
    }

    public function updateSparepart($kode,$data){       
       
		$this->db->where('kode', $kode)->update('sparepart', $data);			
		
    }

    public function deleteSparepart($kode){
        try {
            $this->db->where('kode', $kode)->delete('sparepart');
            return [
                'success' => true
            ];
        } catch (Exception $err) {
            return [
				'success' => false
			];
        }
    }
}
?>