<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        if(IS_POST){
            $name = I('post.name');
            $password = I('post.password');
            $userModel = M('User');
            $data = $userModel->where(array('name'=>$name))->find();
            print_r($data);exit;
        }else{
            $this->display();
        }
    }
}