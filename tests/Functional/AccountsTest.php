<?php

namespace Tests\Functional;

class AccountsTest extends BaseTestCase
{
    public function testGetAccounts()
    {
        $response = $this->runApp('GET', '/accounts');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json;charset=utf-8', $response->getHeaderLine('Content-type'));
        $this->assertContains('Administrative', (string)$response->getBody());
    }
}
