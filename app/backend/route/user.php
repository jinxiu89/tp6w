<?php
/**
 * @Create by PhpStorm
 * @author:jinxiu89@163.com
 * @Create Date:2020/1/15 14:43
 * @User: admin
 * @Current File : user.php
 * @格言：溪涧岂能留得住，终归大海做波涛 --李忱
 * @格言： 我的内心因看见大海而波涛汹涌
 **/

use think\facade\Route;

/**
 * 后台用户相关的分组
 *
 */
Route::group('/user', function () {
    Route::get('hello/:name', 'Index/hello')->name('user_hello');
})->prefix('backend/');