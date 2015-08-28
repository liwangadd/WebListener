<?php

/**
 * Created by PhpStorm.
 * User: Nikolas
 * Date: 2015/8/28
 * Time: 21:16
 */
class AppOpeModel extends CI_Model
{

    public function getAllTest()
    {
        $query = $this->db->get('test');
        return $query->result();
    }

    public function getQueByTestId($testId)
    {
        $where = ['test_id' => $testId];
        $query = $this->db->get_where('question', $where);
        return $query->result();
    }

    public function checkQueAns($stuId,$queId,$ans){
        $this->db->select('ans_right')->from("question")->where('que_id',$queId);
        $res=$this->db->get()->row;
        $info=['stu_id'=>$stuId,'que_id'=>$queId,'right'=>$res->ans_right,'answer'=>$ans];
        if($res==$ans){
            $info['is_right']=1;
            $this->db->insert("stu_que",$info);
            return true;
        }
        $info['is_right']=0;
        $this->db->insert("stu_que",$info);
        return $res->ans_right;
    }

} 