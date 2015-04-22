<?php
use Gufy\LivechatApi\LivechatApi;
use Gufy\LivechatApi\Models\Agent;
class RequestTest extends PHPUnit_Framework_TestCase
{
  public function setUp()
  {
    parent::setUp();
  }
  public function testRequestApi()
  {
    $agent = new Agent;
    $agents = $agent->get();
    print_r($agents);
    // $this->assertTrue(isset($agents['login']));
  }
}
