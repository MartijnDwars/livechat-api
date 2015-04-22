<?php namespace Gufy\LivechatApi\Models;

class Status extends Base
{
  public $baseUrl = 'status';
  public function get($data=[])
  {
    return $this->request('GET', '/', $data);
  }
}
