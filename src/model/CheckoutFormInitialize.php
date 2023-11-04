<?php

namespace IyziLaravel\Model;

use IyziLaravel\Model\Mapper\CheckoutFormInitializeMapper;
use IyziLaravel\IyziLaravelOptions;
use IyziLaravel\Request\CreateCheckoutFormInitializeRequest;

class CheckoutFormInitialize extends CheckoutFormInitializeResource
{
    public static function create(CreateCheckoutFormInitializeRequest $request, IyziLaravelOptions $options)
    {
        $rawResult = parent::httpClient()->post($options->getBaseUrl() . "/payment/iyzipos/checkoutform/initialize/auth/ecom", parent::getHttpHeaders($request, $options), $request->toJsonString());
        return CheckoutFormInitializeMapper::create($rawResult)->jsonDecode()->mapCheckoutFormInitialize(new CheckoutFormInitialize());
    }
}