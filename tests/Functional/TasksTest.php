<?php

namespace Tests\Functional;

class TasksTest extends BaseTestCase
{
    public function testGetTasks()
    {
        $response = $this->runApp('GET', '/tasks');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json;charset=utf-8', $response->getHeaderLine('Content-type'));
        $this->assertContains('GTD', (string)$response->getBody());
    }
}
