<?php

namespace Zeroplex\Plurk\Test\Auth;

use Zeroplex\Plurk\Test\TestCase as TestCase;
use Zeroplex\Plurk\Auth\Credential;

class CredentialTest extends TestCase
{
    public function setUp()
    {
        $this->cred = new Credential(
            'appKey',
            'appSecret',
            'token',
            'secret'
        );
    }

    public function tearDown()
    {
        $this->cred = null;
    }

    public function testAppKeyGetter()
    {
        $this->assertSame('appKey', $this->cred->getAppKey());
    }

    public function testAppSecretGetter()
    {
        $this->assertSame('appSecret', $this->cred->getAppSecret());
    }

    public function testTokenGetter()
    {
        $this->assertSame('token', $this->cred->getToken());
    }

    public function testSecretGetter()
    {
        $this->assertSame('secret', $this->cred->getSecret());
    }
}
