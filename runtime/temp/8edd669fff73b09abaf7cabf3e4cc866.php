<?php /*a:4:{s:76:"E:\PHPStudy\PHPTutorial\WWW\qmzy5139\application\index\view\board\index.html";i:1576078679;s:76:"E:\PHPStudy\PHPTutorial\WWW\qmzy5139\application\index\view\public\base.html";i:1574696870;s:75:"E:\PHPStudy\PHPTutorial\WWW\qmzy5139\application\index\view\public\nav.html";i:1574695097;s:78:"E:\PHPStudy\PHPTutorial\WWW\qmzy5139\application\index\view\public\footer.html";i:1574690306;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="keywords" content="首页-期末作业-PHP作业-MySQL作业">
        <meta name="description" content="首页-期末作业-PHP作业-MySQL作业首页-期末作业-PHP作业-MySQL作业首页-期末作业-PHP作业-MySQL作业">
        
        <title>期末作业--<?php echo htmlentities(getResBoardName(app('request')->param('board_id'))); ?>板块</title>
        
        <link rel="stylesheet" type="text/css" href="http://localhost/qmzy5139/public/static/layui/css/layui.css" />

        <script type="text/javascript" src="http://localhost/qmzy5139/public/static/index/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="http://localhost/qmzy5139/public/static/layui/layui.js"></script>
        
        


<link rel="stylesheet" href="http://localhost/qmzy5139/public/static/layui/css/layui.css"/>
<link rel="stylesheet" href="http://localhost/qmzy5139/public/static/index/css/main.css"/>
<link rel="stylesheet" href="http://localhost/qmzy5139/public/static/index/css/header.css"/>
<link rel="stylesheet" href="http://localhost/qmzy5139/public/static/index/css/resource_lst.css"/>

<style type="text/css">
    body{
        background-color: #f0f0f0;
    }

    .wrap_box_up img {
        border-radius: 8px;
        display: inline-block;
    }
    .wrap_box_up p{
        background-color: #fff;
    }

    .wrap_box_up span {
        position: relative;
        top: 40px;
        font-size: 18px;
        color: #8e999d;
        letter-spacing: 2px;
        transition:all 1s linear 0s;
    }

    .wrap_box_up span:hover, .wrap_box_up p:hover{
        color:red;
        text-shadow: 0px 0px 1px #fff,
            2px -3px 2px #1EB,
            4px -6px 3px #01DEFD,
            6px -9px 4px #0BF,
            8px -12px 5px #08F;
    }

    .resource-list li {
        margin:14px;
        width: 270px;
        height: 208px;
        box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2);
    }

    .resource-list .first {
        height: 396px;
        -webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.1);
        box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.1);
        color: #fff;
    }

    .resource-list .first img {
        width: 100%;
        display: inline-block;
    }

    .resource-list li .intro {
        /* background:#bdbbba; */
        background:#fff;
        top: 122px;
        padding:0 18px;
    }

    .resource-list li .intro h3 {
        color:#f40;
        font-weight: 700;
        font-size:15px;
        line-height: 22px;
    }

    .resource-list li .intro h3 i {
        padding:0px 4px;
        /*font-size: 14px;*/
        height: 18px;
        line-height: 18px;
    }

    .resource-list li a:hover .intro {
        top: 48px;
    }
    /* .resource-list li a .intro:hover {
        top: 48px;
    } */


    /* .resource-list li .intro p {
          font-size: 14px;
    }*/

    .resource-list li .bottom {
        height: 48px;
        font-size: 12px;
        line-height: 46px;
        padding:0 16px;
    }
    
    #tip h1,h2{margin:8px auto;}
    #tip h1{color:#FF5722;}
    #tip h2{color:#FFB800;}
    #tip h3{color:#009688;text-align:left;}
    #tip h4{color:#01AAED;}
    #tip p{color:#009688; text-align:left;text-indent:2em;}
</style>

    


        

        <script>
                //一般直接写在一个js文件中
                layui.use(['layer', 'form'], function () {
                    var layer = layui.layer
                            , form = layui.form;
    
                    //layer.msg('Hello World');
                });
            </script>

    </head>
    <body>

        
        
        
        
        <div class="heloved-header layui-header">
    <!-- logo start -->
    <div class="heloved-logo">
        <img src="http://localhost/qmzy5139/public/static/logo.png" alt="期末作业网" />
        <!--        <div class="heloved-logo-left">
                </div>
                <div class="heloved-logo-right">
                    <img src="http://localhost/qmzy5139/public/static/index/images/tel.jpg" alt="服务热线">24小时在线 <span class="heloved-tel">123456788</span>
                </div>-->
    </div>
    <!-- logo end -->

    <!-- nav start -->
    <ul class="header-nav" id="header-nav">

        <li class='layui-nav-item  
        <?php if(empty(app('request')->param('board_id')) || ((app('request')->param('board_id') instanceof \think\Collection || app('request')->param('board_id') instanceof \think\Paginator ) && app('request')->param('board_id')->isEmpty())): ?>
        header-nav-this
        <?php endif; ?>'
            ><a href="<?php echo url('index/index/index'); ?>">首页</a></li>

        <?php if(is_array($resource_board) || $resource_board instanceof \think\Collection || $resource_board instanceof \think\Paginator): $i = 0; $__LIST__ = $resource_board;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$board): $mod = ($i % 2 );++$i;?>
        <li class='layui-nav-item
        
        <?php if($board['id'] == app('request')->param('board_id')): ?>  
            header-nav-this
        <?php endif; ?>'><a href="<?php echo url('index/board/index',['board_id'=> $board['id']]); ?>"><?php echo htmlentities($board['name']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>

        <!-- <li class="layui-nav-item"><a href="<?php echo url('index/index/index'); ?>">首页</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('index/resource/index'); ?>">综合资源</a></li>
        <li class="layui-nav-item header-nav-this"><a href="<?php echo url('index/resource/message'); ?>">留言板系统</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('index/resource/mall'); ?>">商城系统</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('index/resource/news'); ?>">新闻系统</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('index/resource/user'); ?>">用户管理系统</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('index/resource/web'); ?>">WEB前端</a></li> -->
        <!-- <li class="layui-nav-item"><a href="#">课程中心</a></li> -->
        <!-- <li class="layui-nav-item"><a href="#">加入我们</a></li>-->
    </ul>

    <!-- nav end -->

    <!--login and register start -->
    <!--  <ul class="heloved-user">
        <li><span class="login" id="btnLogin">登录</span></li>
        <li><span class="register">注册</span></li>
    </ul>-->
    <!--login and register end -->

    <!--user-information-->
    <div class="heloved-user-info">
        <span class="dropbtn">云想衣裳花想容</span>
        <div class="dropdown" style="display: none;">
            <div class="dropdown-content">
                <a href="#">菜单1</a>
                <a href="#">菜单2</a>
                <a href="#">菜单3</a>
            </div>
        </div>
    </div>
    <!--user-information-->
</div>

        <!-- 你的HTML代码 -->
        

    <div class="layui-row resource-class" id="category-list">
        <div class="layui-col-md12 resource-border">
            <ul class="category-third">
                <li class="resource-type">类型：</li>
                <!-- <li class="resource-class-li-bg"><a href="#">全部</a></li>
                <li><a href="#" title="留言板系统">留言板系统</a></li>
                <li><a href="#" title="用户管理系统">用户管理系统</a></li>
                <li><a href="#" title="商城系统">商城系统</a></li>
                <li><a href="#" title="论坛系统">论坛系统</a></li>
                <li><a href="#" title="博客系统">博客系统</a></li>
                <li><a href="#" title="学生管理系统">学生管理系统</a></li>
                <li><a href="#" title="新闻系统">新闻系统</a></li>
                <li><a href="#" title="文章系统">文章系统</a></li>
                <li><a href="#" title="登录注册">登录注册</a></li>
                <li><a href="#" title="其他类型">其他类型</a></li> -->
                <!--<li><a href="#" title="验证码">验证码</a></li>-->

                <li 
                <?php if(empty(app('request')->param('cate_id')) || ((app('request')->param('cate_id') instanceof \think\Collection || app('request')->param('cate_id') instanceof \think\Paginator ) && app('request')->param('cate_id')->isEmpty())): ?>
                class="resource-class-li-bg"
                <?php endif; ?>
                    ><a href="<?php echo url('index/board/index',['board_id'=> app('request')->param('board_id')]); ?>">全部</a></li>

                <?php if(is_array($cate_list) || $cate_list instanceof \think\Collection || $cate_list instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                <li
                
                <?php if($cate['id'] == app('request')->param('cate_id')): ?>  
                class="resource-class-li-bg"
                <?php endif; ?>><a href="<?php echo url('index/board/index',['board_id'=> app('request')->param('board_id'),'cate_id'=>$cate['id']]); ?>" title="<?php echo htmlentities($cate['name']); ?>"><?php echo htmlentities($cate['name']); ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>


            </ul>
        </div>
    
        <div class="layui-col-md12 resource-border" style="display:none;">
            <ul class="category-third">
                <li class="resource-type">标签：</li>
                <li class="resource-class-li-bg"><a href="#">全部</a></li>
                <li><a href="#" title="PHP+MySQLi">PHP+MySQLi</a></li>
                <li><a href="#" title="Bootstrap">Bootstrap</a></li>
                <li><a href="#" title="PDO">PDO</a></li>
                <li><a href="#" title="留言板">留言板</a></li>
                <li><a href="#" title="文件上传">文件上传</a></li>
                <li><a href="#" title="文件与目录操作">文件与目录操作</a></li>
                <li><a href="#" title="验证码">验证码</a></li>
                <li><a href="#" title="GD库函数">GD库函数</a></li>
                
                <li><a href="#" title="图片教程">后台管理系统</a></li>
                <li><a href="#" title="视频教程">前台</a></li>
                <li><a href="#" title="视频教程">前台+后台管理系统</a></li>
                <li><a href="#" title="许愿墙">许愿墙</a></li>
                <li><a href="#" title="分页类">分页类</a></li>
            </ul>
        </div>
    </div>

<!--<div class="wrap_box_up">
        <a href="#">
            <p>If you correct your mind, the rest of your life will fall into place. - Lao Tzu</p>
        </a>
    </div>-->


    <div class="wrap_box_content">
        <div class="content_title dropbtn" style="background: none;font-size: 30px;">
            <i class="layui-icon layui-icon-prev"></i>
            Never put off the work till tomorrow what you can put off today. &#10084 
            <i class="layui-icon layui-icon-next"></i>
        </div>
        <div class="content_content clearfix">
            <ul class="resource-list">

                <?php if(is_array($resource_lst) || $resource_lst instanceof \think\Collection || $resource_lst instanceof \think\Paginator): $i = 0; $__LIST__ = $resource_lst;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$resource): $mod = ($i % 2 );++$i;?>
            
                <li>
                    <a href="<?php echo htmlentities($resource['url']); ?>" target="_blank">
                        <img alt="<?php echo htmlentities($resource['title']); ?>" height="168" width="100%" src="http://localhost/qmzy5139/public/uploads/<?php echo htmlentities($resource['img']); ?>" style="display: inline-block;">
                        <div class="intro">
                            <h3><i><?php echo htmlentities(getResourceTag($resource['id'])); ?></i><?php echo htmlentities($resource['title']); ?></h3>
                            <p><?php echo htmlentities($resource['description']); ?></p>
                        </div>
                        <div class="bottom">
                            <span class="l"><span class="layui-badge <?php echo htmlentities(randResTimeColor($resource['id'])); ?>"><?php echo htmlentities(date("Y-m-d",!is_numeric($resource['create_time'])? strtotime($resource['create_time']) : $resource['create_time'])); ?></span></span>
                            <span class="r"> <?php echo htmlentities($resource['down_count']); ?>人使用&nbsp;&nbsp; 作业币：<span class="layui-badge"><?php echo htmlentities($resource['money']); ?></span></span>
                        </div>
                    </a> 
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                    
                        <li>
                            <a href="http://47.106.86.207/190106_message/index.php" target="_blank">
                                <img alt="商城系统" height="168" width="100%" src="http://47.106.86.207/190106_message/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>PHP+MySQLi</i>留言板</h3>
                                    <p>登录，留言管理（增删改查）</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-green">2019-01-06</span></span>
                                    <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">30</span></span>
                                </div>
                            </a> 
                        </li>
                        
                        <li>
                            <a href="http://47.106.86.207/190105_shop/index.php" target="_blank">
                                <img alt="商城系统" height="148" width="100%" src="http://47.106.86.207/190103_shop/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>PHP+MySQLi</i>商城系统1</h3>
                                    <p>后台：管理员登录，商品管理（增删改查）<br>前台：登录注册，商品列表，加购物车</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-green">2019-01-05</span></span>
                                    <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">60</span></span>
                                </div>
                            </a> 
                        </li>
                        
                        <li>
                            <a href="http://47.106.86.207/190104_article/index.php" target="_blank">
                                <img alt="商城系统" height="148" width="100%" src="http://47.106.86.207/190104_article/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>PHP+MySQLi</i>文章管理系统</h3>
                                    <p>登录注册，首页文章列表（分页，最新文章），文章管理（增删改查 ）</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-green">2019-01-04</span></span>
                                    <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">50</span></span>
                                </div>
                            </a> 
                        </li>
                        
                        <li>
                            <a href="http://47.106.86.207/190103_shop/index.php" target="_blank">
                                <img alt="商城系统" height="148" width="100%" src="http://47.106.86.207/190103_shop/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>PHP+MySQLi</i>商城系统</h3>
                                    <p>后台：管理员登录，商品管理（增删改查）<br>前台：登录注册，商品列表，加购物车</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-green">2019-01-03</span></span>
                                    <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">60</span></span>
                                </div>
                            </a> 
                        </li>
                        
                        <li>
                            <a href="http://47.106.86.207/181229_stu/index.php" target="_blank">
                                <img alt="学生管理系统" height="124" width="100%" src="http://47.106.86.207/181229_stu/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>PDO</i>学生管理系统</h3>
                                    <p>学生列表、删除、修改</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-green">2018-12-29</span></span>
                                    <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">20</span></span>
                                </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/181228_shop/index.php" target="_blank">
                                <img alt="饭店点餐系统" height="168" width="100%" src="http://47.106.86.207/181228_shop/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>MySQLi</i>饭店点餐系统</h3>
                                    <p>1. 登录，只有管理员用户可以维护饭店商品信息，普通用户没有相关权限。2. 展示商品信息、3. 顾客点餐功能4. 账单结算功能</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-green">2018-12-28</span></span>
                                    <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">50</span></span>
                                </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/message_shuoshuo/index.php" target="_blank">
                                <img alt="PHP+mysql+jQuery说说留言板" height="148" width="100%" src="http://47.106.86.207/message_shuoshuo/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>留言板</i>PHP+mysql+jQuery说说留言板（无限极）</h3>
                                    <p>留言、分页、评论留言、回复留言</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-green">2018-12-27</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">20</span></span>
                                </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/18_12_26_stu/index.html" target="_blank">
                                <img alt="学生管理系统" height="124" width="100%" src="http://47.106.86.207/18_12_26_stu/st.jpg" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>学生管理系统</i>学生管理系统</h3>
                                    <p>登录、注册、修改密码、学生管理、课程管理</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-green">2018-12-26</span></span>
                                    <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">45</span></span>
                                </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/demo/demo_php/page/index.php" target="_blank">
                                <img alt="PHP简单漂亮的分页类" height="124" width="100%" src="http://47.106.86.207/demo/demo_php/page/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>分页类</i>PHP简单漂亮的分页类</h3>
                                    <p>PHP简单漂亮的分页类</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-green">2018-12-24</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">20</span></span>
                                </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/vote/index.html" target="_blank">
                                <img alt="PHP+jQuery+Ajax+Mysql实现文章心情投票功能" height="124" width="100%" src="http://47.106.86.207/vote/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>小案例</i>PHP+jQuery+Ajax+Mysql实现文章心情投票功能</h3>
                                    <p>PHP+jQuery+Ajax+Mysql实现文章心情投票功能</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-green">2018-12-24</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">10</span></span>
                                </div>
                            </a>
                        </li>
    
    
                        <li>
                            <a href="http://47.106.86.207/wishing/index.php" target="_blank">
                                <img alt="PHP+jQuery+Ajax漂亮的许愿墙" height="168" width="100%" src="http://47.106.86.207/wishing/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>许愿墙</i>PHP+jQuery+Ajax漂亮的许愿墙</h3>
                                    <p>登录、许愿列表、新增许愿、删除许愿、修改许愿在墙上的位置</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-green">2018-12-24</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">30</span></span>
                                </div>
                            </a>
                        </li>
    
                       
    
    
                        <li>
                            <a href="http://47.106.86.207/bbs_xl/index.php" target="_blank">
                                <img alt="文章（论坛）管理系统" height="124" width="100%" src="http://47.106.86.207/bbs_xl/2.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>TP3.2.3</i>文章（论坛）管理系统前台</h3>
                                    <p>首页文章、板块文章（列表、发文）、文章详情（回复），个人中心（我的文章、我的回复，个人资料）</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-cyan">2018-12-19</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">100</span></span>
                                </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/bbs_xl/admin" target="_blank">
                                <img alt="文章（论坛）管理系统" height="124" width="100%" src="http://47.106.86.207/bbs_xl/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>TP3.2.3</i>文章（论坛）管理系统后台</h3>
                                    <p>用户管理（编辑、删除）、板块管理（添加、编辑、删除、）、文章管理、回复管理</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-cyan">2018-12-19</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">100</span></span>
                                </div>
                            </a>
                        </li>
    

    
                        <li>
                            <a href="http://47.106.86.207/18_12_05/p.php" target="_blank">
                                <img alt="title" height="124" width="100%" src="__UPLOAD__/resource/18-12-05.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>session+cookie</i>利用session+cookie操作购物车</h3>
                                    <p>using cookies and session.Your not allowed to use any databases</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-cyan">2018-12-05</span></span>
                                    <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">10</span></span>
                                </div>   
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/18_12_05/session.php" target="_blank">
                                <img alt="title" height="124" width="100%" src="__UPLOAD__/resource/18-12-05.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>session</i>利用session操作购物车</h3>
                                    <p>using cookies and session.Your not allowed to use any databases</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-gray">2018-12-05</span></span>
                                    <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">10</span></span>
                                </div>   
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/18_11_29_news/index.html" target="_blank">
                                <img alt="重庆电子工程职业学院后台管理员平台" height="124" width="100%" src="__UPLOAD__/resource/18-11-29.jpg" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>PHP+MySQL</i>学校新闻管理</h3>
                                    <p>前台：首页 新闻页 新闻详细页
                                        后台：登录、修改密码
                                        新闻管理（查看、编辑、添加、删除）
                                        图片上传、图片列表
                                    </p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-orange">2018-11-29</span></span>
                                    <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">60</span></span>
                                </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/18-11-29/index.php" target="_blank">
                                <img alt="重庆电子工程职业学院后台管理员平台" height="124" width="100%" src="__UPLOAD__/resource/18-11-29.jpg" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>PHP+MySQL</i>后台管理员平台</h3>
                                    <p>网站首页（静态）后台：管理员注册、登录（相同用户名不允许注册）
                                        添加学生、学生查询（可按学生姓名、学号、班级等查询）
                                    </p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-orange">2018-11-29</span></span>
                                    <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">30</span></span>
                                </div>
                            </a>
                        </li>
    
    
                        <li>
                            <a href="http://47.106.86.207/18_12_17_guestbook/message.php" target="_blank">
                                <img alt="简单留言板系统" height="168" width="100%" src="http://47.106.86.207/18_12_17_guestbook/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>MySQLi留言板</i>简单留言板系统</h3>
                                    <p>添加留言、编辑留言、留言列表、删除留言、查找留言（可按标题，作者，内容查找）</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge">2018-12-17</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">45</span></span>
                                </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/18_12_17_message/index.php" target="_blank">
                                <img alt="织金洞留言板" height="168" width="100%" src="http://47.106.86.207/18_12_15_message/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>MySQLi留言板</i>织金洞留言板</h3>
                                    <p>登陆注册、退出登陆、留言列表、添加留言</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge">2018-12-17</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">30</span></span>
                                </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/18_12_15_message/index.php" target="_blank">
                                <img alt="织金洞留言板" height="168" width="100%" src="http://47.106.86.207/18_12_15_message/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>PDO留言板</i>织金洞留言板</h3>
                                    <p>登陆注册、退出登陆、留言列表、添加留言</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge">2018-12-15</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">30</span></span>
                                </div>
                            </a>
                        </li>
    
                    
    
                        <li>
                            <a href="http://47.106.86.207/18_12_13_stu/index.php" target="_blank">
                                <img alt="学生信息管理系统" height="168" width="100%" src="http://47.106.86.207/18_12_13_stu/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>PDO</i>学生信息管理系统</h3>
                                    <p>学生信息浏览、添加、编辑、删除</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge">2018-12-13</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">20</span></span>
                                </div>
                            </a>
                        </li>
    
    
                        <li>
                            <a href="http://47.106.86.207/demo/demo_php/18_12_13_filesystem/filesystem.php" target="_blank">
                                <img alt="在线文件管理系统" height="168" width="100%" src="http://47.106.86.207/18_12_13_wishing/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>文件与目录操作</i>在线文件管理系统</h3>
                                    <p>创建文件、文件列表、删除文件、修改文件</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-blue">2018-12-13</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">30</span></span>
                                </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/18_12_13_wishing/" target="_blank">
                                <img alt="唯美许愿墙项目" height="168" width="100%" src="http://47.106.86.207/18_12_13_wishing/1.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>许愿墙</i>唯美许愿墙项目</h3>
                                    <p>首页、许愿、愿望列表、编辑愿望、删除愿望、搜索愿望</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-green">2018-12-13</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">45</span></span>
                                </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/demo/demo_php/18_12_13_dir/dirSize.php" target="_blank">
                                <img alt="递归统计目录大小函数" height="168" width="100%" src="http://47.106.86.207/blog_hd/public/static/index.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>文件与目录操作</i>递归统计目录大小函数</h3>
                                    <p>递归统计目录大小函数</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-black">2018-12-13</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">15</span></span>
                                </div>
                            </a>
                        </li>
    
    
                        <li>
                            <a href="http://47.106.86.207/demo/demo_php/18_12_12/index.html" target="_blank">
                                <img alt="文件上传实例" height="168" width="100%" src="http://47.106.86.207/blog_hd/public/static/index.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>文件上传</i>详细的图片上传实例</h3>
                                    <p>文件上传实例</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-cyan">2018-12-12</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">20</span></span>
                                </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/demo/demo_php/18_12_11/index.php" target="_blank">
                                <img alt="图片等比缩放" height="168" width="100%" src="http://47.106.86.207/blog_hd/public/static/index.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>GD库函数使用</i>图片等比缩放</h3>
                                    <p>图片等比缩放</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge layui-bg-cyan">2018-12-11</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">5</span></span>
                                </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="http://47.106.86.207/demo/demo_php/18_12_10/form.html" target="_blank">
                                <img alt="GD库验证码的生成与使用" height="168" width="100%" src="http://47.106.86.207/blog_hd/public/static/index.png" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>验证码</i>GD库验证码的生成与使用</h3>
                                    <p>GD库验证码的生成与使用</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge">2018-12-10</span></span>
                                    <span class="r"> 0人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">5</span></span>
                                </div>
                            </a>
                        </li>
                       
    
                        <li>
                            <a href="#">
                                <img alt="小灰灰特产" height="124" width="100%" src="http://img.php.cn/upload/course/000/000/003/5a5099080616f758.jpg" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>PHP+MySQL</i>输入中文显示对应英文</h3>
                                    <p>添加中文和对应的英文，搜索框输入中文就显示英文</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge">2018-11-06</span></span>
                                    <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">10</span></span>
                                </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="http://120.78.162.99/18-11-06_techan/" target="_blank">
                                <img alt="小灰灰特产" height="124" width="100%" src="http://img.php.cn/upload/course/000/000/003/5a5099080616f758.jpg" style="display: inline-block;">
                                <div class="intro">
                                    <h3><i>PHP+MySQL</i>小灰灰特产</h3>
                                    <p>前台1、登陆注册，2、在线留言、3、订单添加、显示、4、商品分类显示
                                        <br/>后台1、登录、2、商品管理</p>
                                </div>
                                <div class="bottom">
                                    <span class="l"><span class="layui-badge">2018-11-06</span></span>
                                    <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">60</span></span>
                                </div>
                            </a>
                        </li>

                <li>
                    <a href="http://120.78.162.99/18-11-05_car/" target="_blank">
                        <img alt="汽车功能" height="124" width="100%" src="http://img.php.cn/upload/course/000/000/003/5a5099080616f758.jpg" style="display: inline-block;">
                        <div class="intro">
                            <h3><i>PHP+MySQL</i>汽车功能</h3>
                            <p>前台1、用户登录注册2、商品列表 、商品详情页面 后台 1、管理员登录 2、汽车增删改查</p>
                        </div>
                        <div class="bottom">
                            <span class="l"><span class="layui-badge layui-bg-cyan">2018-11-05</span></span>
                            <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">50</span></span>
                        </div>
                    </a>
                </li>
    
    
                <li>
                    <a href="http://47.106.86.207/blog_hd/public/index.php" target="_blank">
                        <img alt="后盾网个人博客前台" height="168" width="100%" src="http://47.106.86.207/blog_hd/public/static/index.png" style="display: inline-block;">
                        <div class="intro">
                            <h3><i>TP5.0.10</i>后盾网个人博客前台（适应手机端）</h3>
                            <p></p>
                        </div>
                        <div class="bottom">
                            <span class="l"><span class="layui-badge layui-bg-blue">2018-11-03</span></span>
                            <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">80</span></span>
                        </div>
                    </a>
                </li>
    
                <li>
                    <a href="http://47.106.86.207/blog_hd/public/index.php/admin/login/login.html" target="_blank">
                        <img alt="后盾网个人博客后台" height="168" width="100%" src="http://47.106.86.207/blog_hd/public/static/admin.png" style="display: inline-block;">
                        <div class="intro">
                            <h3><i>TP5.0.10</i>后盾网个人博客后台</h3>
                            <p>登录、栏目管理、标签管理、文章管理、友情管理、站点管理</p>
                        </div>
                        <div class="bottom">
                            <span class="l"><span class="layui-badge layui-bg-cyan">2018-10-31</span></span>
                            <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">80</span></span>
                        </div>
                    </a>
                </li>

               

                <li>
                    <a href="http://47.106.86.207/faiqiyi/public/index.php" target="_blank">
                        <img alt="仿爱奇艺系统前台功能" height="168" width="100%" src="http://47.106.86.207/faiqiyi/index.png" style="display: inline-block;">
                        <div class="intro">
                            <h3><i>TP5.0.14</i>仿爱奇艺系统前台功能</h3>
                            <p>前台功能、首页、视频列表页、视频播放页、页面搜索</p>
                        </div>
                        <div class="bottom">
                            <span class="l"><span class="layui-badge layui-bg-green">2018-10-20</span></span>
                            <span class="r"> 1人使用&nbsp;&nbsp; 作业币：<span class="layui-badge">100</span></span>
                        </div>
                    </a>
                </li>
                
                
            </ul>
        </div>
    </div>

   

    <div class="wrap_box_up">
        <a href="#">
            <p> Never put off the work till tomorrow what you can put off today. &#10084 </p>
        </a>
    </div>


        <!-- 你的HTML代码 -->
        
        <!--尾部信息-->
<!--<footer>
    <ul class="share-group">
        <li>
            <a href="#">GitHub</a>
        </li>
        <li>
            <a href="#">博客园</a>
        </li>
        <li>
            <a href="#">其他</a>
        </li>
        <li>
            <a href="#">其他</a>
        </li>
        <li>
            <a href="#">引用说明</a>
        </li>
    </ul>
    <div class="copy">
        <p>&copy; ZzHao - 2017</p>
    </div>
</footer>-->

<!-- 底部版权区 start -->
<div class="copyright">
    <div class="copyright_content">
        <ul>
            <li>
                <a href="">关于</a>
                <ul>
                    <li>子列表</li>
                    <li>子列表</li>
                    <li>子列表</li>
                    <li>子列表</li>
                </ul>
            </li>
            <li>
                <a href="">课程</a>
                <ul>
                    <li>子列表</li>
                    <li>子列表</li>
                    <li>子列表</li>
                    <li>子列表</li>
                </ul>
            </li>
            <li>
                <a href="">留言</a>
                <ul>
                    <li>子列表</li>
                    <li>子列表</li>
                    <li>子列表</li>
                    <li>子列表</li>
                </ul>
            </li>
            <li>
                <a href="">关注</a>
                <ul>
                    <li>子列表</li>
                    <li>子列表</li>
                    <li>子列表</li>
                    <li>子列表</li>
                </ul>
            </li>
            <li>
                <a href=""><img src="images/weixin.png" alt="">微信关注</a>
                <ul>
                    <li></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<!-- 底部版权区 end -->

        
        
        
<script>
        $('#category-list').on('click', 'a', function () {
            $('.resource-class-li-bg a').each(function (k, v) {
                console.log(k);
                console.log(v);
            });
        });

    </script>
    <script>
            layui.use('layer', function () {
                var layer = layui.layer;
                var content = '';
                content += '<div id="tip">';
                content += "<h1>qimozuoye.com</h1>";
                content += "<h2>talk is cheap show me the code</h2>";
                content += "<h3>登录账户一般有如下三个：</h3>";
                content += "<p>用户名：admin &nbsp;密码：123456</p>";
                content += "<p>用户名：admin &nbsp;密码：123</p>";
                content += "<p>用户名：qimozuoye &nbsp;密码：123456</p>";
                content += "<h4>本站资源部分来源网络，仅供学习，不可商用，如果侵犯了您的权益，请联系站长QQ:319460833</h4>";
                content += "</div>";
                //配置一个透明的询问框
                // layer.msg(content, {
                //     time: 1500, //20s后自动关闭
                //     shade: 0.4,
                //     btn: ['明白了', '知道了', '哦']
                //     , btnAlign: 'c'
                // });

                //示范一个公告层
//                layer.open({
//                    type: 1
//                    , title: false //不显示标题栏
//                    , closeBtn: false
//                    , area: '300px;'
//                    , shade: 0.8
//                    , id: 'LAY_layuipro' //设定一个id，防止重复弹出
//                    , btn: ['明白了', '知道了', '哦']
//                    , btnAlign: 'c'
//                    , moveType: 1 //拖拽模式，0或者1
//                    , content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">你知道吗？亲！<br>layer ≠ layui<br><br>layer只是作为Layui的一个弹层模块，由于其用户基数较大，所以常常会有人以为layui是layerui<br><br>layer虽然已被 Layui 收编为内置的弹层模块，但仍然会作为一个独立组件全力维护、升级。<br><br>我们此后的征途是星辰大海 ^_^</div>'
//                    , success: function (layero) {
//                        var btn = layero.find('.layui-layer-btn');
//                        btn.find('.layui-layer-btn0').attr({
//                            href: 'http://www.layui.com/'
//                            , target: '_blank'
//                        });
//                    }
//                });
            });

        </script>

    </body>
</html>