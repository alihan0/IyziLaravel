<?php

namespace IyziLaravel;

use IyziLaravel\IyziLaravelBootstrap;
use IyziLaravel\IyziLaravelOptions;

IyziLaravelBootstrap::init();

class IyziLaravelConfig
{
    public static function options()
    {
        $options = new IyziLaravelOptions();
        $options->setApiKey('api-key');
        $options->setSecretKey('secret-key');
        $options->setBaseUrl('https://sandbox-api.iyzipay.com');

        return $options;
    }
}