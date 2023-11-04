<?php

namespace IyziLaravel;

interface JsonConvertible
{
    public function getJsonObject();

    public function toJsonString();
}