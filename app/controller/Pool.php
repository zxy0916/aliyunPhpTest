<?php
namespace app\controller;

use app\BaseController;
use app\service\PoolService;

class Index extends BaseController
{
    public function list()
    {
        $result = PoolService::instance()->getPoolList();
        return $this->success('返回成功',$result);
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
