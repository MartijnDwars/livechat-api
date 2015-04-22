<?php
use Gufy\LivechatApi\LivechatApi;
class RequestTest extends PHPUnit_Framework_TestCase
{
  public function setUp()
  {
    parent::setUp();
    $this->api = new LivechatApi('mgufronefendi@gmail.com', '68f0c8c9affe93465ad402e7e896fe9d');
  }
  public function testRequestApi()
  {
    $agents = $this->api->agent->get('mgufronefendi@gmail.com');
    $this->assertTrue(isset($agents['login']));
  }
  public function testCreateAgent()
  {
    // $delete = $this->api->agent->delete('mgufyefendi@gmail.com');
    $canned = $this->api->cannedResponse->get('32331');
    print_r($canned);
  }
}
