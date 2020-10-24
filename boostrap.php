<?php
require 'vendor/autoload.php';

use Rushy\Di;
use Rushy\Database\DbManager;

Di::getInstance()->set('config', require 'config/database.php');

DbManager::addConnection(Di::getInstance()->get('config')['database']);