<?php namespace Gufy\LivechatApi\Models;

class Visitor extends Base
{
  public $baseUrl = 'visitors';
  public function get()
  {
    return $this->request('GET', '/');
  }
  public function update($id, $data)
  {
    return $this->request('POST', '/'.$id.'/details', $data);
  }
}
