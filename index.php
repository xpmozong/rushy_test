<?php
require 'boostrap.php';

use Rushy\Core\Router;
use Rushy\Core\Request;

Router::load('Config/routes.php')
        ->direct(Request::uri(), Request::method());