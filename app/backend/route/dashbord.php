<?php
/**
 * @Create by PhpStorm
 * @author:jinxiu89@163.com
 * @Create Date:2020/1/15 9:56
 * @User: admin
 * @Current File : backend.php
 * @格言：溪涧岂能留得住，终归大海做波涛 --李忱
 * @格言：我的内心因看见大海而波涛汹涌
 **/

use think\facade\Route;

/**
 * 分组按功能来分 方便维护
 * 后台根功能相关的路由
 */
Route::group('/',function (){
    Route::get('hello/:name','dashboard/Index/hello');
    Route::get('/','Index/index');
})->prefix('backend.');
