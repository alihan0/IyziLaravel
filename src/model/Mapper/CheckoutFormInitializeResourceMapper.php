<?php

namespace IyziLaravel\Model\Mapper;

use IyziLaravel\Model\CheckoutFormInitializeResource;

class CheckoutFormInitializeResourceMapper extends IyziLaravelResourceMapper
{
    public static function create($rawResult = null)
    {
        return new CheckoutFormInitializeMapper($rawResult);
    }

    public function mapCheckoutFormInitializeResourceFrom(CheckoutFormInitializeResource $initialize, $jsonObject)
    {
        parent::mapResourceFrom($initialize, $jsonObject);

        if (isset($jsonObject->token)) {
            $initialize->setToken($jsonObject->token);
        }
        if (isset($jsonObject->checkoutFormContent)) {
            $initialize->setCheckoutFormContent($jsonObject->checkoutFormContent);
        }
        if (isset($jsonObject->tokenExpireTime)) {
            $initialize->setTokenExpireTime($jsonObject->tokenExpireTime);
        }
        if (isset($jsonObject->paymentPageUrl)) {
            $initialize->setPaymentPageUrl($jsonObject->paymentPageUrl);
        }
        return $initialize;
    }

    public function mapCheckoutFormInitializeResource(CheckoutFormInitializeResource $initialize)
    {
        return $this->mapCheckoutFormInitializeResourceFrom($initialize, $this->jsonObject);
    }
}