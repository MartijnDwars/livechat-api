<?php
use Gufy\LivechatApi\LivechatApi;
class RequestTest extends PHPUnit_Framework_TestCase
{
  public function setUp()
  {
    parent::setUp();
  }
  public function testRequestApi()
  {
    $agents = $this->api->greeting->get();
    print_r($agents);
    // $this->assertTrue(isset($agents['login']));
  }
}
