<?php

namespace IyziLaravel;
use IyziLaravel\JsonConvertible;

abstract class BaseModel implements JsonConvertible, RequestStringConvertible
{
    public function toJsonString()
    {
        return JsonBuilder::jsonEncode($this->getJsonObject());
    }
}