<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Autoload extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * PSR-4 Namespaces
     * --------------------------------------------------------------------------
     *
     * This array defines the namespaces that will be used for autoloading.
     * The key is the namespace, and the value is the path to the directory
     * where the classes are located.
     *
     * Example:
     *     'App' => APPPATH,
     */
    public array $psr4 = [
        'App'         => APPPATH, // For custom application classes
        'Config'      => APPPATH . 'Config',
    ];

    /**
     * --------------------------------------------------------------------------
     * Classmap
     * --------------------------------------------------------------------------
     *
     * This array defines the classmap for autoloading. You can specify
     * classes that should be loaded directly without using namespaces.
     */
    public array $classmap = [];

    /**
     * --------------------------------------------------------------------------
     * Files
     * --------------------------------------------------------------------------
     *
     * This array defines the files that should be included automatically.
     * You can specify any files that you want to load on every request.
     */
    public array $files = [];
}