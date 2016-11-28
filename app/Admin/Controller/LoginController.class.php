<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

	public function login()
	{
		$this->display();
	}
	public function sub()
	{
		$username = I('post.username');
		$passwd = I('post.passwd');
		$result  = M("cms_user")->where("username = '$username' and passwd = '$passwd'")->select();
		if ($result) {
			session('username',$username);  
			session('uid',$result['uid']);  
			$this->display('Index/index');
		}else{
			$this->redirect('用户名或者密码错误',U('Login/login'));
		}
		
	}

}