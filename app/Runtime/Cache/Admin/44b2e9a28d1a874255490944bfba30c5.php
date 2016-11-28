<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>CMS 管理中心 - 修改文章 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/cms/Public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/cms/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/cms/Public/js/global.js"></script>
    <script type="text/javascript" src="/cms/Public/js/jquery.autotextarea.js"></script>
</head>
<body>
<div id="dcWrap">
    <div id="dcHead">
        <div id="head">
            <div class="logo"><a href="index.html"><img src="/cms/Public/images/navlogo.gif" alt="CMS管理菜单" style="height: 25px;width: 115px;font-size: 24px;color:azure"></a></div>
            <div class="nav">
                <ul>
                    <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a>
                        <div class="drop mTopad"><a href="product.php?rec=add">商品</a> <a href="article.php?rec=add">文章</a> <a href="nav.php?rec=add">自定义导航</a> <a href="show.html">首页幻灯</a> <a href="page.php?rec=add">单页面</a> <a href="manager.php?rec=add">管理员</a> <a href="link.html"></a> </div>
                    </li>
                    <li><a href="../index.php" target="_blank">查看站点</a></li>
                    <li><a href="index.php?rec=clear_cache">清除缓存</a></li>
                    <li><a href="http://help.douco.com" target="_blank">帮助</a></li>
                    <li class="noRight"><a href="module.html">CMS+</a></li>
                </ul>
                <ul class="navRight">
                    <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
                        <div class="drop mUser">
                            <a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
                            <a href="manager.php?rec=cloud_account">设置云账户</a>
                        </div>
                    </li>
                    <li class="noRight"><a href="login.php?rec=logout">退出</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- dcHead 结束 --> <div id="dcLeft"><div id="menu">
    <ul class="top">
        <li><a href="index.html"><i class="home"></i><em>管理首页</em></a></li>
    </ul>
    <ul>
        <li><a href="system.html"><i class="system"></i><em>系统设置</em></a></li>
        <li><a href="nav.html"><i class="nav"></i><em>自定义导航栏</em></a></li>
        <li><a href="show.html"><i class="show"></i><em>首页幻灯广告</em></a></li>
        <li><a href="page.html"><i class="page"></i><em>单页面管理</em></a></li>
    </ul>
    <ul>
        <li><a href="product_category.html"><i class="productCat"></i><em>商品分类</em></a></li>
        <li><a href="product.html"><i class="product"></i><em>商品列表</em></a></li>
    </ul>
    <ul>
        <li><a href="article_category.html"><i class="articleCat"></i><em>文章分类</em></a></li>
        <li class="cur"><a href="article.html"><i class="article"></i><em>文章列表</em></a></li>
    </ul>
    <ul class="bot">
        <li><a href="backup.html"><i class="backup"></i><em>数据备份</em></a></li>
        <li><a href="mobile.html"><i class="mobile"></i><em>手机版</em></a></li>
        <li><a href="theme.html"><i class="theme"></i><em>设置模板</em></a></li>
        <li><a href="manager.html"><i class="manager"></i><em>网站管理员</em></a></li>
        <li><a href="manager_log.html"><i class="managerLog"></i><em>操作记录</em></a></li>
    </ul>
</div></div>
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">CMS 管理中心<b>></b><strong>修改文章</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="article.html" class="actionBtn">文章列表</a>修改文章</h3>
        <form action="<?php echo U('Article/saveArticle');?>" method="post" enctype="multipart/form-data">
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <td width="90" align="right">文章名称</td>
                    <td>
                        <input type="text" name="title" value="" size="80" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td align="right" valign="top">文章描述</td>
                    <td>
                        <!-- KindEditor -->
                        <link rel="stylesheet" href="/cms/Public/js/kindeditor/themes/default/default.css" />
                        <link rel="stylesheet" href="/cms/Public/js/kindeditor/plugins/code/prettify.css" />
                        <script charset="utf-8" src="/cms/Public/js/kindeditor/kindeditor.js"></script>
                        <script charset="utf-8" src="/cms/Public/js/kindeditor/lang/zh_CN.js"></script>
                        <script charset="utf-8" src="/cms/Public/js/kindeditor/plugins/code/prettify.js"></script>
                        <script>
                            KindEditor.ready(function(K) {
                                var editor1 = K.create('textarea[name="content"]', {
                                    cssPath : '../plugins/code/prettify.css',
                                    uploadJson : '../php/upload_json.php',
                                    fileManagerJson : '../php/file_manager_json.php',
                                    allowFileManager : true,
                                    afterCreate : function() {
                                        var self = this;
                                        K.ctrl(document, 13, function() {
                                            self.sync();
                                            K('form[name=example]')[0].submit();
                                        });
                                        K.ctrl(self.edit.doc, 13, function() {
                                            self.sync();
                                            K('form[name=example]')[0].submit();
                                        });
                                    }
                                });
                                prettyPrint();
                            });
                        </script>
                        <!-- /KindEditor -->
                        <textarea id="content" name="works" style="width:780px;height:400px;" class="textArea"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <!--<input type="hidden" name="token" value="7e4a88fb" />-->
                        <!--<input type="hidden" name="image" value="">-->
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <input  class="btn" type="submit" value="提交" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </div>
    <div class="clear"></div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
            </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
<script type="text/javascript">

    onload = function()
    {
        document.forms['action'].reset();
    }

    function douAction()
    {
        var frm = document.forms['action'];

        frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
    }

</script>
</body>
</html>