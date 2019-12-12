<?php

namespace app\common\controller;

use think\Controller;
use think\Db;
use think\facade\Session;
use think\facade\Request;
use app\common\model\ResourceBoard;


class Base extends Controller
{

    protected function initialize()
    {
        $this->showNav();
        $this->showTyping();
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

    /**
     * 191212
     */
    public function showTyping()
    {
        $typing_max = db('typing')->order('id desc')->value('id');
        $id = rand(1,$typing_max);
        
        $typing = db('typing')->where('id', $id)->value('content');

        $this->assign('typing',$typing?$typing:'All action results from thought, so it is thoughts that matter.-- Sai BaBa');
    }
}