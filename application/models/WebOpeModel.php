<?php

/**
 * Created by PhpStorm.
 * User: Nikolas
 * Date: 2015/8/27
 * Time: 22:11
 */
class WebOpeModel extends CI_Model
{

    public function __construct(){
        parent::__construct();
    }

    public function pubTest($title,$teacher){
        $test=["test_topic"=>$title,"teacher_name"=>$teacher];
        $this->db->insert("test",$test);
    }

    public function getTestByPage($pageIndex,$pageSize){
        $query=$this->db->get("test", $pageSize,$pageIndex);
        $result=$query->result();
        $count=$this->db->count_all("test");
        return ["result"=>$result,"count"=>$count];
    }

    public function uploadRecord(){
        $config['upload_path'] = 'records';
        $config['allowed_types'] = 'mp3';
        $config['max_size'] = '1000';
        $config['encrypt_name']=true;
        $this->load->library("upload",$config);
        if($this->upload->do_upload("path")){
            return $this->upload->file_name;
        }else{
            return false;
        }
    }

    public function insertQue($data){
        $this->db->insert("question", $data);
    }
} 