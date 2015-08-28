<?php
/**
 * Created by PhpStorm.
 * User: Nikolas
 * Date: 2015/8/28
 * Time: 20:54
 */

class AppAccountModel extends CI_Model{

    public function insertStu($info){
        $this->db->insert("student",$info);
    }

    public function checkNum($num){
        $info=['stu_num'=>$num];
        $query=$this->db->get_where("student",$info);
        if($query->num_rows()>0){
            return false;
        }else{
            return true;
        }
    }

    public function loginStu($info){
        $this->db->select("stu_id, password")->from('student')->where("username",$info['username']);
        $result=$this->db->get()->row();
        if(isset($result)&&$this->encrypt->decode($result->password)==$info['password']){
            return $result->stu_id;
        }
        return false;
    }

} 