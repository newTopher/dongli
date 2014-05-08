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
            if($data['password'] != md5($password)){
                $this->ajaxReturn(array('code'=>-1,'msg'=>'密码输入不正确'));
            }else{
                session('user',$data);
                $this->ajaxReturn(array('code'=>0,'msg'=>'登陆成功','url'=>'Index/Index'));
            }
        }else{
            $this->display();
        }
    }
}