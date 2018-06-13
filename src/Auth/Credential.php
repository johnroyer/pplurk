<?php

namespace Zeroplex\Plurk\Auth;

class Credential
{
    private $appKey;
    private $appSecret;
    private $token;
    private $secret;

    public function __construct(
        string $appKey,
        string $appSecret,
        string $token,
        string $secret
    ) {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->token  = $token;
        $this->secret = $secret;
    }

    public function getAppKey(): string
    {
        return $this->appKey;
    }

    public function getAppSecret(): string
    {
        return $this->appSecret;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }
}
