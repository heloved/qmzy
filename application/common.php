<?php
use think\Db;

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 *   根据资源id查询资源标签
 * 19-11-29
 */

if(!function_exists('getResourceTag'))
{
    function getResourceTag($id)
    {
        $tag_id = Db::table('qmzy_resource')->where('id', $id)->value('tag_id');
        $tag_name = Db::table('qmzy_resource_tag')->where('id', 'in', $tag_id)->column('name'); 
        return implode('+', $tag_name);
    }
}

/**
 * 资源时间随机背景色
 * 19-11-29
 */
if(!function_exists('randResTimeColor'))
{
    function randResTimeColor($id)
    {
        $key = rand(0,6);
        $color = array(
            'layui-bg-green', // 墨绿
            "layui-bg-red", // 赤色
            "layui-bg-orange", //橙色
            "layui-bg-cyan",// 藏青
            "layui-bg-blue",// 蓝色
            "layui-bg-black",//雅黑
            "layui-bg-gray" // 银灰
        );
        return $color[$key];
    }
}

/**
 * 
 */
if(!function_exists('getResBoardName'))
{
    function getResBoardName($id)
    {
        return Db::name('resource_board')->where('id', $id)->value('name');
    }
}