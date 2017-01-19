<?php

namespace Zeroplex\Plurk\Test\Auth;

use Zeroplex\Plurk\Test\TestCase as TestCase;
use Zeroplex\Plurk\Auth\Credential;

class CredentialTest extends TestCase
{
    public function setUp()
    {
        $this->cred = new Credential(
            '1',
            '2',
            '3',
            '4'
        );
    }

    public function tearDown()
    {
        $this->cred = null;
    }

    /**
     * @dataProvider keyProvider
     */
    public function testGetKey($key, $expected)
    {
    }

    public function keyProvider()
    {
        return [
            ['appKey', '1'],
            ['appSecret', '2'],
            ['token', '3'],
            ['secret', '4'],
        ];
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testGetWrongKey()
    {
        $this->cred->nonExist;
    }
}
