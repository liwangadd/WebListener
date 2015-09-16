<?php

/**
 * Created by PhpStorm.
 * User: Nikolas
 * Date: 2015/8/28
 * Time: 21:16
 */
class AppOpeController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AppOpeModel', 'appModel');
    }

    public function getAllTest()
    {
        $stu_id=$this->input->post('stu_id');
        $result = $this->appModel->getAllTest($stu_id);
        if (!isset($result)) {
            echo json_encode(['message' => false]);
            return;
        }
        echo json_encode(['message' => true, 'result' => $result]);
    }

    public function getQueByTestId()
    {
        $testId = $this->input->post("test_id");
        $result = $this->appModel->getQueByTestId($testId);
        if (!isset($result)) {
            echo json_encode(['message' => false]);
            return;
        }
        echo json_encode(['message' => true, 'result' => $result]);
    }

    public function checkQueAns(){
        $queId=$this->input->post('que_id');
        $ans=$this->input->post('ans');
        $stuId=$this->input->post('stu_id');
        $res=$this->appModel->checkQueAns($stuId,$queId,$ans);
        if($res){
            echo json_encode(['message'=>true,'ans_right'=>$ans]);
            return;
        }
        echo json_encode(['message'=>false,'ans_right'=>$res]);
    }

} 