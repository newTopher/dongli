<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {

    protected function _initialize(){

        $this->assgin('headimg',C('IMG_PATH'));


    }


}