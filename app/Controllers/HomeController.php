<?php
/**
 * Created by PhpStorm.
 * User: alixez
 * Date: 17-7-21
 * Time: 下午5:47
 */

namespace Noodle\Controllers;


class HomeController extends BaseController
{
    public function homeTemplate() {
        echo 'home template';

        return;
    }

    public function bestTemplate() {
        echo 'bast template';
    }
}