<?php

namespace smn\router;

interface RequestInterface
{

public function getDate() : DateTime;

public function getMethod() : string;

public function getFullUri() : string;

public function getHeaders() : array;

public function getHeader(string $header_name) : ?string;

public function hasHeader(string $header_name) : bool;

public function getHost() : string;

public function getQueryStringParams() : array;

public function getQS(string $qsName) : string;

public function getBody();


}