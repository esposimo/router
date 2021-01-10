<?php

namespace smn\router;

interface ResponseInterface
{

    public function setHeader(string $header_name, string $header_value, $override = true);

    public function setBody();

    public function sendHeader();

    public function sendBody();

    public function getPreparedHeaders();

    public function getPreparedBody();

    public function getPreparedResponse();

    public function sendResponse();



}