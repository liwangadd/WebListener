<?php
/**
 * Created by PhpStorm.
 * User: Nikolas
 * Date: 2015/8/28
 * Time: 20:49
 */

class AppAccountController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('encrypt');
        $this->load->model('AppAccountModel','appModel');
    }

    public function view(){
        $this->load->view('teacher/listQue');
    }

    public function doRegister(){
        $info=$this->input->post();
        if(!$this->appModel->checkNum($info['stu_num'])){
            echo json_encode(['message'=>'double']);
            return;
        }
        $info['password']=$this->encrypt->encode($info['password']);
        $this->appModel->insertStu($info);
        echo json_encode(['message'=>'success']);
    }

    public function doLogin(){
        $info=$this->input->post();
        $result=$this->appModel->loginStu($info);
        if(!$result){
            echo json_encode(['login'=>false]);
            return;
        }
        echo json_encode(['login'=>true,'stu_id'=>$result]);
    }

} 