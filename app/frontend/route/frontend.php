<?php
/**
 * @Create by PhpStorm
 * @author:jinxiu89@163.com
 * @Create Date:2020/1/15 9:56
 * @User: admin
 * @Current File : frontend.php
 * @格言：溪涧岂能留得住，终归大海做波涛 --李忱
 * @格言：
 **/
use think\facade\Route;

/**
 * 按功能来分组，或者一个文件一个功能
 *
 */
Route::group('/',function (){
    Route::get('/','Index/index');
})->prefix('frontend/');