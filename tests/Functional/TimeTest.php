<?php

namespace Tests\Functional;

class TimeTest extends BaseTestCase
{
    public function testPostTime()
    {
        $response = $this->runApp('POST', '/time');

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testPutTime()
    {
        $response = $this->runApp('PUT', '/time/1');

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testDeleteTime()
    {
        $response = $this->runApp('DELETE', '/time/1');

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testGetTimeNotAllowed()
    {
        $response = $this->runApp('GET', '/time');

        $this->assertEquals(405, $response->getStatusCode());
        $this->assertContains('Method not allowed', (string)$response->getBody());
    }
}
