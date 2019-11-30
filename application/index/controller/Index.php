<?php

namespace app\index\controller;

use app\common\controller\Base;

use app\common\model\Resource;
/**
 * 前台首页
 */
class Index extends Base {

    /**
     * 首页
     * @return type
     */
    public function index() {
        
        $typing_max = db('typing')->order('id desc')->value('id');
        $id = rand(1,$typing_max);
        
        $typing = db('typing')->where('id', $id)->value('content');

        $this->assign('typing',$typing?$typing:'All action results from thought, so it is thoughts that matter.-- Sai BaBa');
        
        $new_resource = Resource::order('create_time desc')->limit(6)->select();
        $this->view->assign('new_resource', $new_resource);
        $hot_resource = Resource::order('create_time desc')->limit(8)->select();
        $this->view->assign('hot_resource', $hot_resource);
        return $this->view->fetch();
    }

}
