<?php /*a:4:{s:76:"E:\PHPStudy\PHPTutorial\WWW\qmzy5139\application\index\view\index\index.html";i:1575042136;s:76:"E:\PHPStudy\PHPTutorial\WWW\qmzy5139\application\index\view\public\base.html";i:1574696870;s:75:"E:\PHPStudy\PHPTutorial\WWW\qmzy5139\application\index\view\public\nav.html";i:1574695097;s:78:"E:\PHPStudy\PHPTutorial\WWW\qmzy5139\application\index\view\public\footer.html";i:1574690306;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="keywords" content="首页-期末作业-PHP作业-MySQL作业">
        <meta name="description" content="首页-期末作业-PHP作业-MySQL作业首页-期末作业-PHP作业-MySQL作业首页-期末作业-PHP作业-MySQL作业">
        
        <title>首页-期末作业-PHP作业-MySQL作业</title>
        
        <link rel="stylesheet" type="text/css" href="http://localhost/qmzy5139/public/static/layui/css/layui.css" />

        <script type="text/javascript" src="http://localhost/qmzy5139/public/static/index/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="http://localhost/qmzy5139/public/static/layui/layui.js"></script>
        
        
<link rel="stylesheet" type="text/css" href="http://localhost/qmzy5139/public/static/index/css/main.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/qmzy5139/public/static/index/css/header.css">
<link href="http://localhost/qmzy5139/public/static/index/myfocus/js/mf-pattern/mF_sd_qqyue.css" rel="stylesheet" type="text/css" />


        
<script src="http://localhost/qmzy5139/public/static/index/myfocus/js/myfocus-2.0.1.min.js" type="text/javascript"></script>
<script src="http://localhost/qmzy5139/public/static/index/myfocus/js/mf-pattern/mF_sd_qqyue.js" type="text/javascript"></script>
<script type="text/javascript">

//实例化
    myFocus.set({
        id: 'qqyue', //ID
        pattern: 'mF_sd_qqyue', //风格样式
        time: 2, //切换时间间隔(秒)
        trigger: 'click', //触发切换模式：'click'(点击)/'mouseover'(悬停)
        width: 735, //设置宽度(主图区)
        height: 260, //设置高度(主图区)
        txtHeight: 'default'//文字层高度设置，'default'为默认高度，0为隐藏
    });
</script>


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
        
<div class="heloved-wrap">
    <!-- nav start-->
    <div class="heloved-banner">

        <div class="heloved-banner-left">
            <div class="heloved-nav">
                <div class="heloved-nav-left"></div>
                <div class="heloved-nav-mid">
                    <div class="heloved-nav-mid-left">
                        <ul>
                            <li><a href="#">文章中心</a></li>
                            <li><a href="<?php echo url('index/resource/index'); ?>">php文章</a></li>
                            <li><a href="<?php echo url('index/resource/index'); ?>">论坛</a></li>
<!--                            <li><a href="list.html">新闻动态</a></li>
                            <li><a href="list.html">课程中心</a></li>
                            <li><a href="list.html">在线课程</a></li>
                            <li><a href="list.html">人才招聘</a></li>-->
                        </ul>
                    </div>
                    <div class="heloved-nav-mid-right">
                        <form action="" method="post">
                            <input type="text" class="heloved-search">
                        </form>
                    </div>
                </div>
                <div class="heloved-nav-right"></div>
            </div>
            <!-- nav end-->
            <!--焦点图、轮换图 ad start -->
            <div class="heloved-ad" id="qqyue">
                <div class="loading">
                    <img src="http://localhost/qmzy5139/public/static/index/myfocus/img/loading.gif" alt="">
                </div>
                <!--            <div class="pic">
                                <ul>
                                    <li><img src="http://localhost/qmzy5139/public/static/index/myfocus/img/1a.jpg" alt=""></li>
                                    <li><img src="http://localhost/qmzy5139/public/static/index/myfocus/img/2a.jpg" alt=""></li>
                                    <li><img src="http://localhost/qmzy5139/public/static/index/myfocus/img/3a.jpg" alt=""></li>
                                </ul>
                            </div>-->
                <ul class="pic"><!--图片标题-->
                    <li><a href="#"><img src="http://localhost/qmzy5139/public/static/index/images/banner1.jpeg" thumb="" alt="图片1来源于网络，版权属于作者" text="图片1更详细的描述文字" /></a></li>
                    <li><a href="#"><img src="http://localhost/qmzy5139/public/static/index/images/banner2.png" thumb="" alt="版权属于作者，图片2来源于网络" text="图片2更详细的描述文字" /></a></li>
                    <li><a href="#"><img src="http://localhost/qmzy5139/public/static/index/images/banner3.jpeg" thumb="" alt="图片3来源于网络，版权属于作者" text="图片3更详细的描述文字" /></a></li>
                    <li><a href="#"><img src="http://localhost/qmzy5139/public/static/index/images/banner4.jpeg" thumb="" alt="版权属于作者，图片4来源于网络" text="图片4更详细的描述文字" /></a></li>
                    <li><a href="#"><img src="http://localhost/qmzy5139/public/static/index/images/banner5.png" thumb="" alt="图片5来源于网络，版权属于作者" text="图片5更详细的描述文字" /></a></li>
                </ul>
                <ul class="par"><!--图片段落-->
                    <li><p>When writing the story of your life,don't let anyone else hold then pen.</p><b></b></li>
                    <li><p>If you want something you're never had then you're go to do something you're never done.</p><b></b></li>
                    <li><p>The future belongs to those who believe in the beauty of their dreams.</p><b></b></li>
                    <li><p>日前，4华谊兄弟旗下内地首支歌唱"美好生活"的男女组合牛奶咖啡发行了2010全新明黄色系概念大碟《给你点儿颜色》……</p><b></b></li>
                    <li><p>日前，5华谊兄弟旗下内地首支歌唱"美好生活"的男女组合牛奶咖啡发行了2010全新明黄色系概念大碟《给你点儿颜色》……</p><b></b></li>
                </ul>
            </div>
            <!--焦点图、轮换图 ad end -->
        </div>

        <div class='heloved-banner-right'>
            <div class="heloved-banner-right-top">
                <div id="clock">
                    <div class="bg">
                        <div class="point">
                            <div id="hour"></div>
                            <div id="minute"></div>
                            <div id="second"></div>
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <div class="sign-in">
                    <p class="fire">每日签到</p>
                </div>
            </div>
            <div class="heloved-banner-right-bottom">

                <div class="type-js" style="width:232px; height: 158px;background-color: rgba(0,0,0,0.3);">
                    <!--<p class="text-js">一只蝴蝶飞向天空，展示了她所有的美丽，但在美丽的背后，她曾经有过织丝成茧的辛劳、在黑暗之中的等待和化茧成蝶的痛苦。我们常常看到的风景是：一个人总在仰望和羡慕着别人的幸福，一回头却发现，自己正被别人仰望和羡慕着。其实，谁都是幸福的，只是，你的幸福，常常感受在别人心里。也许有人说你梦想太大不切实际，又有人说你梦想太小胸无大志，那就不要去解释；你梦想的东西他们总是不屑一顾，那就不要去管那些人。因为他们不知道，一个人的梦想也许不值钱，但是一个人的努力很值钱</p>-->
                    <!--<p class="text-js">土地是以它的肥沃和收获而被估价的；才能也是土地，不过它生产的不是粮食，而是真理，如果只能滋生冥想和幻想的话，即使再大的才能也只是沙地或盐池，那上面连小草也长不出来。——别林斯基</p>-->
                    <p class="text-js" style="background-color: rgba(0,0,0,0);"><?php echo htmlentities($typing); ?></p>
                </div>
                <!--<p id='typing'></p>-->
            </div>
        </div>
    </div>


    <!-- 信息展示区 start -->
    <div class="main">
        <!-- 文章 -->
        <div class="article index-box-shadow">
            <div class="title">
                <h2 class="title_left">最新文章</h2>
                <span class="title_right"><a href="news.html">More&gt;&gt;</a></span>
            </div>

            <div class="pic_news">
                <img src="images/news.jpg" alt="图片" width="80px" height='80px'>
                <h2><a href="news.html">520女神喊你来表白</a></h2>
                <p>活动时间：5月20日--5月25日<br/>获奖公布时间：5月26日<br/><a href="news.html">Show More&gt;&gt;</a></p>
            </div>

            <div class="article_list">
                <ul>
                    <li><span>2018-08-28</span><a href="<?php echo url('index/article/index'); ?>">enjoy every moment</a></li>
                    <li><span>2018-08-28</span><a href="<?php echo url('index/article/index'); ?>">enjoy every moment</a></li>
                    <li><span>2018-08-28</span><a href="<?php echo url('index/article/index'); ?>">enjoy every moment</a></li>
                    <li><span>2018-08-28</span><a href="<?php echo url('index/article/index'); ?>">enjoy every moment</a></li>
                </ul>
            </div>
        </div>
        <!-- 文章 end -->


        <div class="source index-box-shadow">
            <div class="title">
                <h2 class="title_left">最新资源</h2>
                <!--<span class="title_right"><a href="news.html">More&gt;&gt;</a></span>-->
            </div>
            <dl>
                <?php if(is_array($new_resource) || $new_resource instanceof \think\Collection || $new_resource instanceof \think\Paginator): $i = 0; $__LIST__ = $new_resource;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new_res): $mod = ($i % 2 );++$i;?>
                <dd>
                    <a href='<?php echo htmlentities($new_res['url']); ?>' target='_blank'>
                        <img alt='' src='http://localhost/qmzy5139/public/uploads/<?php echo htmlentities($new_res['img']); ?>' height='124px' width='100%' style='display:inline-block;' />
                        <div class="source-trans">
                            <h3><i><?php echo htmlentities(getResBoardName($new_res['board_id'])); ?></i><?php echo htmlentities($new_res['title']); ?></h3>
                        </div>
                    </a>
                </dd>
                <?php endforeach; endif; else: echo "" ;endif; ?>

                <!-- <dd>
                    <a href='#' target='_blank'>
                        <img alt='' src='http://localhost/qmzy5139/public/static/index/images/dd.png' height='124px' width='100%' style='display:inline-block;' />
                        <div class="source-trans">
                            <h3><i>jQuery</i>MySQL数据库技术小知识每日分享</h3>
                        </div>
                    </a>
                </dd> -->

            </dl>

        </div>

        <div class="sidebar index-box-shadow">
            <div class="video">
                <div class="title">
                    <h2 class="title_left">会员排行</h2>
                    <!--<span class="title_right"><a href="news.html">More&gt;&gt;</a></span>-->
                </div>
                <div class="video_content">

                </div>
            </div>
            <div class="sidebar_ad">
                <img src="" alt="">
            </div>
        </div>
    </div>

    <!-- 信息展示区 end -->

</div><!-- wrap 结束 -->

<!--advertisement start-->
<div class="heloved-wrap heloved-ad-big">
    <a href="#" target="_blank">
        <span>在天愿作比翼鸟，在地愿为连理枝</span>
        <img src="http://img.mukewang.com/5305da0d0001ab9306000338-300-170.jpg">
    </a>
</div>
<!--advertisement end-->
    
<div class="heloved-wrap index-box-shadow resource-hot">
    <div class="freshresource">
        <div class="freshresource-title">最受欢迎的作品</div>
        <ul>
            <!-- <li>
                <a href="#" target="_blank">
                    <img width="100%" alt="IT菜鸟逆袭指南（江湖篇）" title="IT菜鸟逆袭指南（江湖篇）" src="http://img.mukewang.com/530c732400013e5106000338-300-170.jpg">
                    <h5>IT菜鸟逆袭指南（江湖篇）</h5>
                    <p>屌爆了！码农逆袭有秘诀，看“挨踢（IT）”小菜鸟慕无忌如何成为技术“土豪”。</p>
                    <div class="tips"><span class="l">16人参加</span> <span class="r">课程时长：1小时</span></div>
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    <img width="100%" alt="分享：HTML5离线应用实战演练" title="分享：HTML5离线应用实战演练" src="http://img.mukewang.com/5305da0d0001ab9306000338-300-170.jpg">
                    <h5>分享：HTML5离线应用实战演练...</h5>
                    <p>FT Web App是少数真正实现了离线阅读体验的移动应用之一，一起来剖析它的技术吧！ </p>
                    <div class="tips"><span class="l">39人参加</span> <span class="r">课程时长：2小时</span></div>
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    <img width="100%" alt="分享：移动优先的跨终端 Web" title="分享：移动优先的跨终端 Web" src="http://img.mukewang.com/52e618d80001a7e106000338-300-170.jpg">
                    <h5>分享：移动优先的跨终端 Web</h5>
                    <p>不可多得的学习宝典，移动互联时代，您必须知道的跨终端技术。</p>
                    <div class="tips"><span class="l">261人参加</span> <span class="r">课程时长：1小时</span></div>
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    <img width="100%" height="170" alt="分享：响应式布局" title="分享：响应式布局" src="http://img.mukewang.com/52e5ed2300011d2706000338-300-170.jpg">
                    <h5>分享：响应式布局</h5>
                    <p>让网站兼容不同终端不再是梦，为解决移动互联网浏览而诞生。</p>
                    <div class="tips"><span class="l">148人参加</span> <span class="r">课程时长：1小时</span></div>
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    <img width="100%" alt="案例：表单美化" title="案例：表单美化" src="http://img.mukewang.com/52e5f6ef000114ab06000338-300-170.jpg">
                    <h5>案例：表单美化</h5>
                    <p>追求不凡，一次学习四类表单控件的美化，让所有平淡的表单控件瞬间美好起来！</p>
                    <div class="tips"><span class="l">105人参加</span> <span class="r">课程时长：2小时</span></div>
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    <img width="280" height="170" alt="案例：表单验证" title="案例：表单验证" src="http://img.mukewang.com/52e62c09000162fd06000338-300-170.jpg">
                    <h5>案例：表单验证</h5>
                    <p>技术升级必修内容！ 通过对学习输入框的验证，轻松掌握正则表达式的用法！</p>
                    <div class="tips"><span class="l">81人参加</span> <span class="r">课程时长：1小时</span></div>
                </a>
            </li> -->
           
            <?php if(is_array($hot_resource) || $hot_resource instanceof \think\Collection || $hot_resource instanceof \think\Paginator): $i = 0; $__LIST__ = $hot_resource;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new_res): $mod = ($i % 2 );++$i;?>
            <li>
                <a href="<?php echo htmlentities($new_res['url']); ?>" target="_blank">
                    <img width="280" height="170" alt="<?php echo htmlentities($new_res['title']); ?>" title="<?php echo htmlentities($new_res['title']); ?>" src="http://localhost/qmzy5139/public/uploads/<?php echo htmlentities($new_res['img']); ?>">
                    <h5><?php echo htmlentities($new_res['title']); ?></h5>
                    <p><?php echo htmlentities($new_res['description']); ?></p>
                    <div class="tips">
                        <span class="l"><?php echo htmlentities($new_res['down_count']); ?>人访问</span>
                        <span class="r">使用人次：<?php echo htmlentities($new_res['down_count']); ?></span>
                    </div>
                </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>

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

        
        
        
<script type='text/javascript' src='http://localhost/qmzy5139/public/static/index/js/index.js'></script>


    </body>
</html>