<?php namespace Gufy\LivechatApi\Models;
use GuzzleHttp\Client;
use Exception;
abstract class Base implements \ArrayAccess
{
  protected $api_url = 'https://api.livechatinc.com/';
  protected $user;
  protected $api_key;
  public $data = [];
  protected $baseUrl = '';
  public function __construct($user, $api_key)
  {
    $this->user = $user;
    $this->api_key = $api_key;
  }

  public function buildUrl($path)
  {
    return $this->baseUrl.$path;
  }

  public function request($method, $url, $data=[])
  {
    try
    {
      $client = new Client([
        'base_url'=>$this->api_url,
        'defaults'=>[
          'auth'=>[
            $this->user,
            $this->api_key,
          ],
          'headers'=>[
            'X-API-Version'=>2,
          ],
        ]
      ]);
      if($method == 'GET')
      $data = ['query'=>$data];
      else
      $data = ['body'=>$data];
      $request = $client->createRequest($method, $this->buildUrl($url), $data);
      $response = $client->send($request);
      return $response->json();
    }
    catch(\Exception $e)
    {
      return json_decode((string)$e->getResponse()->getBody(), 1);
    }
  }

  public function offsetGet($offset)
  {
    return $this->data[$offset];
  }
  public function offsetSet($offset, $value)
  {
    return $this->data[$offset] = $value;
  }
  public function offsetUnset($offset)
  {
    unset($this->data[$offset]);
  }
  public function offsetExists($offset)
  {
    return isset($this->data[$offset]);
  }
}
