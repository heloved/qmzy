<?php

namespace app\index\controller;

use think\facade\Request;
use app\common\controller\Base;
use app\common\model\Resource;
use app\common\model\ResourceCate;
use app\common\model\ResourceBoard;

class Board extends Base {

    /**
     * [index 板块]
     * 19-11-25
     * @return [type] [description]
     */
    public function index() {
        // dump(strtotime('2018-10-29'));
        // dump(strtotime('2018-10-31'));
        
        $b_id = Request::param('board_id');
        $cate_id = Request::param('cate_id');

        $cates_id = ResourceBoard::where(['id'=>$b_id])->value('cate_id');
        $cate_list = ResourceCate::field('id,name')
                    ->where('id','in',$cates_id)->order('sort','asc')->select();
        $this->view->assign('cate_list', $cate_list);
        $map = array(
            'board_id'  => $b_id,
        );
        if(isset($cate_id)){
            $map['cate_id'] = $cate_id;
        }
        $resource_lst = Resource::where($map)->order('create_time','desc')->paginate(8);
        $this->view->assign('resource_lst', $resource_lst);
        return $this->view->fetch();
    }
    
}
