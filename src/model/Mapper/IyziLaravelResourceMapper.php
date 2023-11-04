<?php

namespace IyziLaravel\Model\Mapper;

use IyziLaravel\IyziLaravelResource;
use IyziLaravel\JsonBuilder;

class IyziLaravelResourceMapper
{
    protected $rawResult;
    protected $jsonObject;

    public function __construct($rawResult)
    {
        $this->rawResult = $rawResult;
    }

    public static function create($rawResult = null)
    {
        return new IyziLaravelResourceMapper($rawResult);
    }

    public function jsonDecode()
    {
        $this->jsonObject = JsonBuilder::jsonDecode($this->rawResult);
        return $this;
    }

    public function mapResourceFrom(IyziLaravelResource $resource, $jsonObject)
    {
        if (isset($jsonObject->status)) {
            $resource->setStatus($jsonObject->status);
        }
        if (isset($jsonObject->conversationId)) {
            $resource->setConversationId($jsonObject->conversationId);
        }
        if (isset($jsonObject->errorCode)) {
            $resource->setErrorCode($jsonObject->errorCode);
        }
        if (isset($jsonObject->errorMessage)) {
            $resource->setErrorMessage($jsonObject->errorMessage);
        }
        if (isset($jsonObject->errorGroup)) {
            $resource->setErrorGroup($jsonObject->errorGroup);
        }
        if (isset($jsonObject->locale)) {
            $resource->setLocale($jsonObject->locale);
        }
        if (isset($jsonObject->systemTime)) {
            $resource->setSystemTime($jsonObject->systemTime);
        }
        if (isset($this->rawResult)) {
            $resource->setRawResult($this->rawResult);
        }
        return $resource;
    }

    public function mapResource(IyziLaravelResource $resource)
    {
        return $this->mapResourceFrom($resource, $this->jsonObject);
    }
}