<?php

namespace app\common\controller;

use think\Controller;
use think\facade\Session;
use think\facade\Request;
use app\common\model\ResourceBoard;


class Base extends Controller
{

    protected function initialize()
    {
        $this->showNav();
    }

    //显示分类导航
    protected function showNav()
    {
        // 1.查询分类表得到所有的分类信息,该方法要在初始化方法中调用
        $resource_board = ResourceBoard::all(function($query){
            $query->where('status',1)->order('sort','asc');
        });

        // 2.将分类信息赋值给模板: nav.html中调用
        $this->view->assign('resource_board', $resource_board);
    }
}