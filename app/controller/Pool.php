<?php
namespace app\controller;

use app\BaseController;
use app\service\PoolService;

class Pool extends BaseController
{
    public function list()
    {
        $result = PoolService::instance()->getPoolList();
        return $this->success('θΏεζε',$result);
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
