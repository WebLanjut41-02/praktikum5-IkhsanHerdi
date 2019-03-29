<?php 

defined('BASEPATH') OR exit('No direct script access allowed');



/* End of file filename.php */

class model_db extends CI_Model{
    
    function data($number,$offset){
		return $query = $this->db->get('mahasiswa',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('mahasiswa')->num_rows();
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
        redirect('Welcome/index');
    }
    
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }



}

?>