<?php
namespace Noodle\Controllers;

/**
 * Created by PhpStorm.
 * User: alixez
 * Date: 17-7-21
 * Time: 下午4:19
 */

// the base controller of app
class BaseController
{
    private $response;
    private $request;

    public function __construct()
    {
        // todo construct controller
    }

    public function request() {
        return $this->request;
    }

    public function response() {
        return $this->response;
    }


}