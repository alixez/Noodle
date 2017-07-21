<?php
/**
 * Created by PhpStorm.
 * User: alixez
 * Date: 17-7-21
 * Time: 下午5:51
 */

// namespace 相当于 java 的 package 和你的文件目录保持相同的结构
namespace Noodle\Controllers\Auth;

// namespace 关键字和 use 关键字一般是联合使用的 声明一个命名空间后，在其他地方需要使用本类 需要use本命名空间
use Noodle\Controllers\BaseController;

class LoginController extends BaseController
{
    // 此时我集成了baseController
    // 如果我需要重写

    // __construct() 是构造方法
    public function __construct()
    {
        parent::__construct(); // 重写如果需要继承父类的方法实现需要使用 parent::method();
        // todo your logic
    }

    public function login() {
        echo "login action";
        return;
    }
}