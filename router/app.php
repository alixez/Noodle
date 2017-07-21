<?php
/**
 * Created by PhpStorm.
 * User: alixez
 * Date: 17-7-21
 * Time: 下午4:41
 */

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'Noodle\Controllers\HomeController@homeTemplate');
Macaw::get('/best', "Noodle\\Controllers\\HomeController@bestTemplate");
Macaw::get('/login', 'Noodle\Controllers\Auth\LoginController@login');

Macaw::dispatch();