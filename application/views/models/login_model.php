<?php
/**
 * 
 */
class  Login_Model extends CI_Model {
    public function save_user_info($data)
            {
        $this->db->insert('tbl_user',$data);
        
    }
}





?>