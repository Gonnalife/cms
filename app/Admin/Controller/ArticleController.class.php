<?php
namespace Admin\Controller;
use Think\Controller;
/*
 * 文章管理控制器
 */
header("content-type:text/html;charset=utf-8");
class ArticleController extends CommonController {
    //文章列表
    public function article()
    {
            $data=M("admin_works")->select();
            $this->assign('data',$data);
            $this->display();
    }
    //添加文章
    public function addarticle()
    {
        if(IS_POST){

            $uid=$_SESSION['uid'];
            $data=I('post.');
            $uptime=date('Y-m-d H:i:s',time());

            $admin_article = M("admin_works");
            $admin_article->title=$data['title'];
            $admin_article->works=$data['works'];
            $admin_article->uptime=$uptime;
            $admin_article->uid=$uid;

            if($admin_article->add()){
                $this->success('添加文章成功',U('article'));
            }else{
                $this->error('添加文章失败',U('addarticle'));
            }
        }else{
            $this->display();
        }

    }
    //删除文章
    public function delArticle()
    {
            $wid=I('get.id');
            $admin_article = M("admin_works")->where(['wid'=>$wid])->delete();

        if($admin_article){
            $this->success('删除文章成功',U('article'));
        }else{
            $this->error('删除文章失败',U('article'));
        }
    }
    //修改文章
    public function updateArticle()
    {
            if($wid=I('get.id')){
                $this->assign('id',$wid);
                $this->display('updatearticle');
            };
    }
    public function saveArticle()
    {

        if($data=I('post.')){

            $data['uptime']=date('Y-m-d H:i:s',time());
            $admin_article = M("admin_works");
            if($admin_article->where(['wid'=>$data['id']])->save($data)){
                $this->success('修改文章成功',U('article'));
            }else{
                $this->error('修改文章失败',U('updateArticle'));
            }

        }
    }

}
?>