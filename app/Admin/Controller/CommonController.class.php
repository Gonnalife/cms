<?php
namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class CommonController extends Controller {
	
    public function _initialize(){
    	if (!isset($_SESSION['username'])) {
    		$this->redirect("Login/login",'','2','请先登录。。。。');
    	}
    }
}