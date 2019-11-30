<?php

namespace app\index\controller;

use think\Controller;

class Resource extends Controller {

    /**
     * [index 资源中心]
     * @return [type] [description]
     */
    public function index() {

        return $this->view->fetch();
    }
    /**
     * [index 资源中心]
     * @return [type] [description]
     */
    public function index1() {

        return $this->view->fetch();
    }
    /**
     * [index 资源中心]
     * @return [type] [description]
     */
    public function index2() {

        return $this->view->fetch();
    }

    /**
     * 资源详情
     * @return type
     */
    public function detail() {

        return $this->view->fetch();
    }

    /**
     * 留言板 191121
     */
    public function message(){
        return $this->view->fetch();
    }

    public function mall(){
        return $this->view->fetch();
    }

    public function news(){
        return $this->view->fetch();
    }

    public function user(){
        return $this->view->fetch();
    }

    public function web()
    {
        return $this->view->fetch();
    }


    public function test()
    {
        return $this->view->fetch();
    }
}
