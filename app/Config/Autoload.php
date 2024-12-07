<?php

namespace Config;

use CodeIgniter\Config\AutoloadConfig;

class Autoload extends AutoloadConfig
{
    public $psr4 = [
        APP_NAMESPACE => APPPATH,
        'Config' => APPPATH . 'Config',
        'App' => APPPATH,  // Pastikan App mengarah ke direktori yang benar
    ];

    public $classmap = [];

    public $files = [];

    public $helpers = [];
}
