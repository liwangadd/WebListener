<?php

/**
 * Created by PhpStorm.
 * User: Nikolas
 * Date: 2015/8/27
 * Time: 21:37
 */
class WebOpeController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->model("WebOpeModel","webModel");
    }

    //获取用户主界面
    public function getHomeView()
    {
        if($this->session->userdata("teacher_id")==null){
            redirect("teacher/login");
        }

        $pageIndex=$this->uri->segment(3);
        if(!isset($pageIndex)) $pageIndex=0;

        $data=$this->webModel->getTestByPage($pageIndex, 5);
        $count=$data["count"];

        //加载分页类
        $this->load->library('pagination');
        $config['base_url'] = site_url("teacher/home");
        $config['total_rows'] = $count;
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data["link"]=$this->pagination->create_links();

        $this->load->view("teacher/home",$data);
    }

    //发表试卷界面
    public function publishTestView(){
        $this->load->view("teacher/pubTest");
    }

    //发表题目界面
    public function publishQueView(){
        $test_id=$this->uri->segment(3);
        $message['test_id']=$test_id;
        $this->load->view("teacher/pubQue",$message);
    }

    //处理试卷上传
    public function doPubTest(){
        $title=$this->input->post("title");
        $teacher=$this->session->userdata("teacher_name");
        $this->webModel->pubTest($title,$teacher);
        header("refresh:3;url=".site_url('teacher/home'));
        echo '试卷发表成功,请在试卷中上传试题';
    }

    //处理题目上传
    public function doPubQue(){
        //提交的题目必须存在题目，答案a，正确答案，音频文件
        $this->form_validation->set_rules("que_topic","topic","required");
        $this->form_validation->set_rules("ans_a","ans_a","required");
        $this->form_validation->set_rules("ans_right","ans_right","required|callback_check_ans");
        $test_id=$this->input->post("test_id");
        if($this->form_validation->run()==false){
            $this->load->view("teacher/pubError",['test_id'=>$test_id]);
        }else{
            $result=$this->webModel->uploadRecord();
            if($result==false){
                $this->load->view("teacher/pubError",['test_id'=>$test_id]);
            }else{
                $data=$this->input->post();
                $data['path']=$result;
                $this->webModel->insertQue($data);
                $this->load->view("teacher/pubSuccess",['test_id'=>$test_id]);
            }
        }
    }

    //验证正确答案填写格式是否正确
    public function check_ans($str){
        if($str=='A'||$str=='B'||$str=='C'||$str=='D'){
            return true;
        }else{
            $this->form_validation->set_message("check_ans","正确答案填写错误");
            return false;
        }
    }

    public function listQue(){
        $test_id=$this->uri->segment(3);
        $result=$this->webModel->listQue($test_id);
        $data['result']=$result;
        $this->load->view('teacher/listQue',$data);
    }

} 