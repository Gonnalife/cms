<?php
namespace Admin\Controller;
use Think\Controller;

header('content-type:text/html;charset=utf-8');
class UserController extends CommonController {

	public function manager()
	{
        $res=M('cms_user')->select();
        $this->assign('list',$res);
		$this->display();
	}

	public function manager_add(){
		
		if (IS_POST) {
			$username = I('post.username');
			$passwd=I('post.passwd');
			$password_confirm=I('post.password_confirm');
			//echo $password_confirm;die;
			$data['username'] = $username;
			$data['passwd'] = $passwd;
			if ($passwd == $password_confirm) {
				$results = M('cms_user')->data($data)->add();
				if ($results) {
					$this->redirect("User/manager",'','2','添加成功。。。。');
				}else{
					$this->error('添加失败',U('manager'));
				}
			}else{
				$this->error('两次密码不一致',U('manager'));
			}
		}

		$this->display('addmanager');

	}
	public function manager_del(){
		$uid = I('get.id');
		$results = M('cms_user')->where(['uid'=>$uid])->delete();
		if ($results) {
			$this->redirect("User/manager",'','2','删除成功。。。。');
		}else
		{
			$this->error('删除失败',U('manager'));
		}
	}

	public function manager_save(){
		$uid = I('get.id');
		
	}

}