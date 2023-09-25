<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Cors extends BaseConfig
{
    public $validOrigins = ['*'];
    public $allowHeaders = ['Content-Type', 'Authorization', 'X-Requested-With'];
    public $allowMethods = ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'];
    public $exposeHeaders = [];
    public $maxAge = 0;
    public $origin = true;
    public $supportsCredentials = false;
}
