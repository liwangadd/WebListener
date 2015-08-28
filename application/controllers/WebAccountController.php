<?php

/**
 * Created by PhpStorm.
 * User: Nikolas
 * Date: 2015/8/27
 * Time: 10:15
 */
class WebAccountController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("encrypt");
        $this->load->library("form_validation");
        $this->load->model("WebAccountModel", "webModel");
    }

    //获取登录界面
    public function getLoginView()
    {
        $this->load->view("teacher/login");
    }

    //获取注册界面
    public function getRegView()
    {
        $this->load->view("teacher/register");
    }

    //用户登出处理
    public function logout(){
        $this->session->unset_userdata("teacher_id");
        redirect("teacher/login");
    }

    //处理用户登录
    public function doLogin()
    {
        $this->form_validation->set_rules("username", "用户名", "required");
        $this->form_validation->set_rules("password", "密码", "required");
        if ($this->form_validation->run() == false) {
            $message = ["error" => "用户名或密码错误"];
            $this->load->view("teacher/login",$message);
        } else {
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $teacher_id = $this->webModel->checkTeacher($username, $password);
            if ($teacher_id) {
                $this->session->set_userdata("teacher_id",$teacher_id);
                $this->session->set_userdata("teacher_name",$username);
                redirect("teacher/home");
            } else {
                $message = ["error" => "用户名或密码错误"];
                $this->load->view("teacher/login", $message);

            }
        }
    }

    //处理用户注册
    public function doReg()
    {
        $this->form_validation->set_rules("username", "用户名", "required|callback_check_username");
        $this->form_validation->set_rules("password", "密码", "required");
        if ($this->form_validation->run() == false) {
            $this->load->view("teacher/register");
        } else {
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $password = $this->encrypt->encode($password);
            $this->webModel->insertTeacher($username, $password);
            redirect("/teacher/login");
        }
    }

    //验证用户名是否重复
    public function check_username($username)
    {
        $where = ["username" => $username];
        $query = $this->db->get_where("teacher", $where);
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message("check_username", "用户名已存在");
            return FALSE;
        }
        return TRUE;
    }

}