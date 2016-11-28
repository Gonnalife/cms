<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	$this->display();
    }
    // public function add(){
    // 	$res=M('tab3')->add($_POST);
    // 	if ($res) {
    // 		$this->success('添加成功',U('Index/show'));
    // 	}else
    // 	{
    // 		$this->error('添加失败');
    // 	}
    // }
    public function show(){
    	$this->display();
    }
}