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
        
        $new_resource = Resource::order('create_time desc')->limit(6)->select();
        $this->view->assign('new_resource', $new_resource);
        $hot_resource = Resource::order('create_time desc')->limit(8)->select();
        $this->view->assign('hot_resource', $hot_resource);
        return $this->view->fetch();
    }

}
