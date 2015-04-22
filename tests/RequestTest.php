<?php
use Gufy\LivechatApi\LivechatApi;
use Gufy\LivechatApi\Models\Agent;
class RequestTest extends PHPUnit_Framework_TestCase
{
  public function setUp()
  {
    parent::setUp();
    $this->api = new LivechatApi('mgufronefendi@gmail.com', '68f0c8c9affe93465ad402e7e896fe9d');
  }
  public function testRequestApi()
  {
    $agent = new Agent;
    $agents = $agent->get();
    print_r($agents);
    // $this->assertTrue(isset($agents['login']));
  }
}
