<?php
namespace Home\Controller;
use Think\Controller;
class WeimediaController extends BaseController {
    public function index(){
        $order = I('get.order');
        $userModel = M('User');
        $where = array();
        $where['is_relate'] = 1;
        $where['status'] = 1;
        $where['type'] = 1;
        $data = $userModel->where($where)->select();
        $wxUserModel = M('Wxuser','tp_','DB_CONFIG2');
        foreach($data as $k=>$v){
            $data[$k]['wxuser'] = $wxUserModel->where(array('uid'=>$v['uid']))->find();
        }
        $this->assign('data',$data);
        $this->display();
    }
}