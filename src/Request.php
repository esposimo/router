<?php

namespace smn\router;

class Request implements RequestInterface
{
    protected array $request;

    public function __construct() {
        $this->request = $_SERVER;
    }

    public function getDate(): DateTime
    {
        return DateTime::createFromFormat('U.u', $_SERVER['REQUEST_TIME']);
    }

    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getFullUri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function getHeaders(): array
    {
        return array_change_key_case(getallheaders(), CASE_LOWER);;
    }

    public function getHeader(string $header_name): ?string
    {
        if ($this->hasHeader($header_name)) {
            return $this->getHeaders()[strtolower($header_name)];
        }
        return null;
    }

    public function hasHeader(string $header_name): bool
    {
        return (array_key_exists(strtolower(($header_name), $this->getHeaders())));
    }


    public function getHost(): string
    {
        $header_host = $this->getHeader('host');
        $split = explode(':', $header_host);
        return $split[0];
    }

    public function getQueryStringParams(): array
    {
        // TODO: Implement getQueryStringParams() method.
    }

    public function getQS(string $qsName): string
    {
        // TODO: Implement getQS() method.
    }

    public function getBody()
    {
        // TODO: Implement getBody() method.
    }
}