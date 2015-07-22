<?php

use Gufy\LivechatApi\LivechatApi;
use Gufy\LivechatApi\Models\Agent;

class RequestTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testGetAgents()
    {
        $livechatApi = new LivechatApi('test-user', 'test-key');

        $agents = $livechatApi->agent->get();

        $this->assertInternalType('array', $agents);
    }

    public function testGetReportTotalChats()
    {
        $livechatApi = new LivechatApi('test-user', 'test-key');

        $totalChats = $livechatApi->report->totalChats();

        $this->assertInternalType('array', $totalChats);
    }

    public function testGetChats()
    {
        $livechatApi = new LivechatApi('test-user', 'test-key');

        $chats = $livechatApi->chat->get([
      'group' => 0,
    ]);

        $this->assertInternalType('array', $chats);
    }
}
