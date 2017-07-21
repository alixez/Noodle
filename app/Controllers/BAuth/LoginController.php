<?php
namespace Noodle\Controllers\BAuth;

// 命名空间很重要， 比如我这里需要使用 Noodle\Controllers 下的 BaseController类。
// 同时我又需要 使用 Noodle\Controllers\Auth 下的 BaseController 类
// 命名空间就可以很好的区分
use Noodle\Controllers\BaseController;
use Noodle\Controllers\Auth\BaseController as Controller;

/**
 * Created by PhpStorm.
 * User: alixez
 * Date: 17-7-21
 * Time: 下午5:58
 */
class LoginController extends BaseController
{
    public function init() {
        $c = new Controller();
        // 或者我在文件头部不使用 use ... as 可以直接像下面一样使用 忽略警告，这里是因为我在上面已经use了
        $b = new \Noodle\Controllers\Auth\BaseController();
    }
}