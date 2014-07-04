<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_model
 *
 * @author Mishu
 */
class  Login_Model extends CI_Model {
    public function save_user_info($data)
            {
        $this->db->insert('tbl_user',$data);
        
    }
}


?>
