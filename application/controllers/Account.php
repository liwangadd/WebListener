<?php

/**
 * Created by PhpStorm.
 * User: Nikolas
 * Date: 2015/4/24
 * Time: 17:36
 */
class Account extends CI_Controller
{

    function doLogin()
    {
//        $this->load->view('login');
//        show_error('404错误');
//        感觉没有必要加这个类，但是参考手册中加了，不知道为什么
//        $this->load->helper(array('url','form'));
        $this->load->library('form_validation');
//        单个表单数据验证
//        $this->form_validation->set_rules('username', 'Username', 'required');

//        多个表单数据数组验证
        $config = array(//array('field'=>'username', 'label'=>'Username', 'rules'=>'required|min_length[5]|max_length[20]'),
            array('field'=>'username','label'=>'Username','rules'=>'callback_check_username'),
            array('field'=>'password', 'label'=>'Password', 'rules'=>'required'),
            array('field'=>'re_password', 'label'=>'Re_Password', 'rules'=>'matches[password]'));
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            echo $this->form_validation->error_string();
            //echo '验证失败';
            //$this->load->view('login');
        } else {
            //echo $this->input->post('password');
            echo $this->session->userdata('name');
            echo $this->uri->segment(2);
            echo '验证成功';
        }
    }

    function check_username($str){
        if($str=='test'){
            $this->form_validation->set_message('check_username','username is not support');
            return false;
        }else{
            return true;
        }
    }

    function login()
    {
        $this->session->set_userdata('name','李旺');
        $this->load->view('login');
    }

} 