<?php
/**
 * Created by PhpStorm.
 * User: Nikolas
 * Date: 2015/8/27
 * Time: 13:56
 */
class WebAccountModel extends CI_Model{

    public function insertTeacher($username,$password){
        $teacher = ["username" => $username, "password" => $password];
        $this->db->insert("teacher", $teacher);
    }

    public function checkTeacher($username,$password){
        $this->db->select("teacher_id, password")->from("teacher")->where("username",$username);
        $result=$this->db->get()->row();
        if(isset($result)&&$this->encrypt->decode($result->password)==$password){
            return $result->teacher_id;
        }
        return false;
    }

}