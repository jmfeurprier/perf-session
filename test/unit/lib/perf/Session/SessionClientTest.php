<?php

namespace perf\Session;

/**
 *
 */
class SessionClientTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    protected function setUp()
    {
        $this->sessionWrapper = $this->getMock('\\perf\\Session\\SessionWrapper');

        $this->client = SessionClient::create($this->sessionWrapper);
    }

    /**
     *
     */
    public function testStart()
    {
        $this->sessionWrapper->expects($this->once())->method('start')->will($this->returnValue(true));

        $this->client->start();
    }
}
