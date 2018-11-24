<?php

namespace Tests\Functional;

class QueryTest extends BaseTestCase
{
    public function testGetQuery()
    {
        $response = $this->runApp('GET', '/query');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json;charset=utf-8', $response->getHeaderLine('Content-type'));
        $this->assertEquals([], json_decode((string)$response->getBody()));
    }

    public function testGetQueryAdministrativeAccount()
    {
        $response = $this->runApp('GET', '/query?account=Administrative');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json;charset=utf-8', $response->getHeaderLine('Content-type'));
        $this->assertContains('Administrative', (string)$response->getBody());
    }
}
