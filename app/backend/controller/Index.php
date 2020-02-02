<?php
declare (strict_types=1);

namespace app\backend\controller;

use app\BaseController;
use think\App;
use think\facade\Config;
use think\Request;

class Index extends BaseController
{
    public function __construct(App $app)
    {
        parent::__construct($app);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function hello(Request $request)
    {
        return 'hello '.$request->param('name','','trim');
    }

    public function index()
    {
        return "hello world";
    }
}
