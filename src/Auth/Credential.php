<?php

namespace Zeroplex\Plurk\Auth;

class Credential
{
    private $appKey;
    private $appSecret;
    private $token;
    private $secret;

    public function __construct($appKey, $appSecret, $token, $secret)
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->token  = $token;
        $this->secret = $secret;
    }

    /**
     * @param string $key property name
     * @return string
     */
    public function __get($key)
    {
        if (!property_exists($this, $key)) {
            throw new \InvalidArgumentException('key is not exists');
        }

        return $this->$key;
    }
}
